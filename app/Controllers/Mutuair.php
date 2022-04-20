<?php

namespace App\Controllers;

use App\Models\Titikpantau;

class Mutuair extends BaseController
{
    protected $Titikpantau;

    public function __construct()
    {
        $this->Titikpantau = new Titikpantau();
    }
    public function index()
    {
        $model = new Titikpantau();
        $data = [
            'Pantau' => $model->paginate(100, 'Pantau'),
        ];
        return view('main/Statusair', $data);
    }

    public function hapusPantau($id)
    {
        $model = new Titikpantau();
        $session = session();
        $model->delete($id);
        $session->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Mutuair/index');
    }




    public function tampilEdit($id)
    {

        $Pantau = new Titikpantau();
        $data = [
            'Pantau' => $Pantau->getPantau($id),
        ];
        return view('main/update', $data);
    }






    // public function delete_bod()
    // {
    //     $data = $this->request->getvar('ID_BOD_Eksisting');
    //     //dd($data);
    //     $this->BodEksistingModel->delete($data);
    //     session()->setFlashdata('success', 'Data berhasil dihapus');
    //     return redirect()->to('/BODEksisting/listbod');
    // }

    // public function delete_tss($id)
    // {
    //     $data = $this->where([
    //         'id_tikpan' => $id
    //     ])->first();
    //     return $data;
    // }





    public function update($id)
    {

        $this->Titikpantau->save([
            'id_tikpan' => $id,
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

        return redirect()->to('/Mutuair/index');
    }





    // function Datatabel()
    // {
    //     $model = new Titikpantau();
    //     $data = [
    //         'Pantau' => $model->paginate(100, 'Pantau'),
    //     ];
    //     echo view('main/Statusair', $data);
    // }
}
