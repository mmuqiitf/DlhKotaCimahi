<?php

namespace App\Controllers;
use App\Models\Titikpantau;

class BODEksisting extends BaseController
{
    protected $Titikpantau;

    public function __construct()
    {
        $this->Titikpantau = new Titikpantau();

    }
    public function index()
    {
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
            'status_mutu' => $this->request->getVar('colstatus'),
            'Nilai_pij' => $this->request->getVar('colpij'),
        ]);

        return redirect()->to('/statusair');
    }

  
}