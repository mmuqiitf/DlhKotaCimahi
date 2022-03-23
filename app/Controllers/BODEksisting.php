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
        
        
        return view('/pages/BODEksisting/create');
    }

  
}