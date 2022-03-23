<?php

namespace App\Controllers;
use App\Models\BODEksistingModel;

class BODEksisting extends BaseController
{
    public function __construct()
    {
        helper('form');
		$this->validation = \Config\Services::validation();
        $this->BodEksistingModel = new BODEksistingModel();
        session();
    }
    

    public function listbod()
    {   
        $bod = $this->BodEksistingModel->dataBODEksisting();
        
        $data = [
            'title' => 'BOD Eksisting',
            'bod' => $bod
        ];

        return view('pages/BODEksisting/bodlist', $data);
    }
    public function create()
    {
        $data=['validation' => \Config\Services::validation()];
    
        return view('pages/BODEksisting/create', $data);
    }

    public function create_bod()
    {
        //BOD Eksisting
       // $data = $this->BodEksistingModel->dataBODEksisting();
        //dd($data);
        if (!$this->validate([
            'nama_sungai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Sungai harus diisi'
                ]
            ],
            'titik_pantau' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Titik pantau harus diisi'
                ]
            ],
            'BOD' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'BOD harus diisi'
                ]
            ],
            'Debit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Debit harus diisi'
                ]
            ],
            'beban_pencemar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Beban pencemar harus diisi'
                ]
            ],
            'waktu_sampling' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu sampling harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/BODEksisting/create')->withInput();
        }
        $data = [
            
            'ID_BOD_Eksisting' => $this->request->getPost('ID_BOD_Eksisting'),
            'nama_sungai' => $this->request->getPost('nama_sungai'),
            'titik_pantau' => $this->request->getPost('titik_pantau'),
            'BOD' => $this->request->getPost('BOD'),
            'Debit' => $this->request->getPost('Debit'),
            'beban_pencemar' => $this->request->getPost('beban_pencemar'),
            'waktu_sampling' => $this->request->getPost('waktu_sampling'),
        ];
        $this->BodEksistingModel->bod_eksisting_post($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return view('/pages/BODEksisting/create');
    }

  
}