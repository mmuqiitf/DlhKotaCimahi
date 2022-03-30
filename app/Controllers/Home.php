<?php

namespace App\Controllers;

use App\Models\GrafikModel;
use App\Models\TssGrafikModel;
use App\Models\Users;

class Home extends BaseController
{
    public function index()
    {
        $modelUser = new Users();
        $jumlah_user = $modelUser->countAllResults();
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('main/dashboard');
        // echo view('layout/footer');
        $bulan = $this->request->getGet('bulan');
        $bulan = $bulan ? $bulan : Date("m");
        $bulantss = $this->request->getGet('bulan');
        $bulantss = $bulantss ? $bulantss : Date("m");
        return view('/pages/home', ['jumlah_user' => $jumlah_user,]);
    }

    public function indexair()
    {
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('main/indeksair');
        // echo view('layout/footer');
        return view('/main/indeksair');
    }

    public function statusair()
    {
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('main/mutuair');
        // echo view('layout/footer');
        return view('/main/mutuair');
    }

    public function bnpencemaran()
    {
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('main/mutuair');
        // echo view('layout/footer');

        return view('/main/bebanpencemaran');
    }

    public function BODEksisting()
    {
        return view('/pages/BODEksisting/index');
    }
    public function BODPotensial()
    {
        return view('/pages/BODPotensial');
    }

    public function apiData($bulan)
    {
        $grafik = new GrafikModel();
        $grafik->where('tgl >=', "2020-{$bulan}-01");
        $grafik->where('tgl <=', "2020-{$bulan}-31");
        $grafik->orderBy('tgl', 'asc');

        echo json_encode($grafik->get()->getResult());
    }

    public function apiDataTss($bulantss)
    {
        $grafiktss = new TssGrafikModel();
        $grafiktss->where('tgl >=', "2020-{$bulantss}-01");
        $grafiktss->where('tgl <=', "2020-{$bulantss}-31");
        $grafiktss->orderBy('tgl', 'asc');

        echo json_encode($grafiktss->get()->getResult());
    }
}
