<?php

namespace App\Controllers;
use App\Models\BODEksistingModel;

class BODEksisting extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->BodEksistingModel = new BODEksistingModel();
        $this->session = \Config\Services::session();
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
        //BOD Eksisting
       // $data = $this->BodEksistingModel->dataBODEksisting();
        //dd($data);
        if (!$this->validate([
            'BOD' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => 'BOD harus diisi'
                ]
            ], 'Debit' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => 'Debit harus diisi'
                ]
            ], 'beban_pencemar' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => 'Beban Pencemar harus diisi'
                ]
            ], 'waktu_sampling' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu Sampling harus diisi'
                ]
            ], 'titik_pantau' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => 'Titik Pantau harus diisi'
                ]
            ]
            ]
                ))
        $data = [
            'title' => 'BOD Eksisting',
            'action' => site_url('BODEksisting/create_action'),
            'button' => 'Create',
            'ID_BOD_Eksisting' => set_value('ID_BOD_Eksisting'),
            'nama_sungai' => set_value('nama_sungai'),
            'titik_pantau' => set_value('titik_pantau'),
            'BOD' => set_value('BOD'),
            'Debit' => set_value('Debit'),
            'beban_pencemar' => set_value('beban_pencemar'),
            'waktu_sampling' => set_value('waktu_sampling'),
        ];
        $this->BODEksistingModel->bod_eksisting_post($data);
        return view('/pages/BODEksisting/create');
    }

  
}