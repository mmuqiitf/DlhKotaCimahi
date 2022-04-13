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

    public function edit($id = null)
    {
        if (!isset($id)) redirect('main/Statusair');

        $Titikpantau = $this->Titikpantau;
        $validation = $this->form_validation;
        $validation->set_rules($Titikpantau->rules());

        if ($validation->run()) {
            $Titikpantau->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["Statusair"] = $product->getById($id);
        if (!$data["Statusair"]) show_404();

        $this->load->view("main/createtss", $data);
    }

    public function delete($id)
    {
        $this->Titikpantau->delete($id);
        return direct()->to('/main/Statusair');
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
            'Nama_sungai' => $this->request->getVar('collist'),
            'periode_pantau' => $this->request->getVar('periode'),
            'tanggal_pantau' => $this->request->getVar('inputtanggal'),
            'status_mutu' => $this->request->getVar('colstatus'),
            'Nilai_pij' => $this->request->getVar('colpij'),

        ]);

        return redirect()->to('/mutuair');
    }



   

    function Datatabel()
    {
        $model = new Titikpantau();
        $data = [
            'Pantau' => $model->paginate(100, 'Pantau'),
        ];
        echo view('pages/mutuair', $data);
    }
}


