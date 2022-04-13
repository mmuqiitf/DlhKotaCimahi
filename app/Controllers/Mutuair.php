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
}
