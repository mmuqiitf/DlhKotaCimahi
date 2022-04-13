<?php

namespace App\Controllers;
use App\Models\Titikpantau;

class BODEksisting extends BaseController
{
    // protected $Titikpantau;

    public function __construct()
    {
        $this->Titikpantau = new Titikpantau();

    }
    public function index()
    {
        // $data["titikpantau"] = $this->titikpantau_model->getAll(); // ambil data dari model
        // $this->load->view("main/mutuair", $data); // kirim data ke view
        return view('/pages/BODEksisting/index');
        
    }

    public function create()
    {
        return view('/pages/BODEksisting/create');
    }

    public function save()
    {
        $this->Titikpantau->save([
            'Param_1' => $this->request->getVar('coltss'),
            'Param_2' => $this->request->getVar('colbod'),
            'Param_3' => $this->request->getVar('colcod'),
            'Param_4' => $this->request->getVar('colfosfat'),
            'Param_5' => $this->request->getVar('colcoliform'),
            'Param_6' => $this->request->getVar('colferal'),
            'Param_7' => $this->request->getVar('coldo'),
            'id_sungai' => $this->request->getVar('collist'),
            'periode_pantau' => $this->request->getVar('periode'),
            'tanggal_pantau' => $this->request->getVar('inputtanggal'),
            'status_mutu' => $this->request->getVar('colstatus'),
            'Nilai_pij' => $this->request->getVar('colpij'),

        ]);

        return redirect()->to('/statusair');
    }


    public function listtss()
    {
        $titikpantau = $this->Titikpantau->datatss();
        
        $data = [
            'title' => 'Peninjauan Status Mutu Air',
            'titikpantau' => $titikpantau
        ];

        return view('main/mutuair', $data);
    }


    // function Datatabel()
    // {
    //     $model = new Titikpantau();
    //     $data['mahasiswa']  = $model->getta9()->getResult();
    //     return redirect()->to('/statusair',$data);
    // }



  
}