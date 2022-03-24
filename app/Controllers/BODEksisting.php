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
        return redirect()->to('/BODEksisting/listbod');
    }
    
    public function update_bod()
    {
        $bod=$this->request->getvar('ID_BOD_Eksisting');
        $data = $this->request->getvar(['nama_sungai', 'titik_pantau', 'BOD', 'Debit', 'beban_pencemar', 'waktu_sampling']);
        
        //dd($data);
        $this->BodEksistingModel->update($bod,$data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('/BODEksisting/listbod');
    }

    public function delete_bod()
    {
        $data = $this->request->getvar('ID_BOD_Eksisting');
        //dd($data);
        $this->BodEksistingModel->delete($data);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/BODEksisting/listbod');
    }

    public function update_list_bod($idbod)
    {
        $bod = $this->BodEksistingModel->bod($idbod);
        $data = [
            'title' => 'Update BOD Eksisting',
            'bod' => $bod
        ];
        //dd($bod);
        return view('pages/BODEksisting/update', $data);
    }


    public function delete_bod1($ID_BOD_Eksisting){
        $bod=$this->BodEksistingModel->searchBy('ID_BOD_Eksisting',$ID_BOD_Eksisting);
        $this->BodEksistingModel->delete($bod);
        session()->setFlashdata('success', 'Data berhasil dihapus', $bod);
        return redirect()->to('/BODEksisting/listbod');
    }

  
}