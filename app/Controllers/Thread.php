<?php

namespace App\Controllers;

use \App\Models\ThreadModel;
use \App\Models\SungaiModel;
use \App\Models\UserModel;


class Thread extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $page = 1;
        $keyword = '';

        if ($this->request->getPost()) {
            $keyword = $this->request->getPost('keyword');
        }

        if ($this->request->getGet()) {
            $page = $this->request->getGet('page');
        }

        $perPage = 20;

        $limit = $perPage;
        $offset = ($page - 1) * $perPage;

        $modelThread = new ThreadModel();

        $threads = $modelThread->select('thread.id, thread.Nilai_pij, sungai.nama_sungai')
            ->join('sungai', 'thread.id_sungai=id.sungai', 'left')
            ->get($limit, $offset);

        $total = $modelThread->select('thread.id, thread.Nilai_pij, sungai.nama_sungai')
            ->join('sungai', 'thread.id_sungai=id.sungai', 'left')
            ->countAllResults();



        return view('thread/index', [
            'threads' => $threads,
            'page' => $page,
            'perPage' => $perPage,
            'total' => $total,
            'offset' => $offset,
            'keyword' => $keyword,
        ]);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $modelThread = new ThreadModel();
        $thread = $modelThread->find($id);

        $modelSungai = new  SungaiModel();
        $sungai = $modelSungai->find($thread->id_sungai);

        return view('thread/view', [
            'thread' => $thread,
            'sungai' => $sungai,
        ]);
    }
}
