<?php

namespace App\Controllers;

use App\Models\TssEksistingModel;

class TSSAktual extends BaseController
{
    public function index()
    {
        $TssEksistingModel = new TssEksistingModel();
        
        $pager = \Config\Services::pager();

		$data = array(
			'tss_eksisting' => $TssEksistingModel->getNorules(),
			'pager' => $TssEksistingModel->pager
		);
        return view('/pages/TSSAktual/indexTSS', $data);
    }

    public function add()
    {
        $TssEksistingModel = new TssEksistingModel;
        $data = array(
            'nama_sungai' => $this->request->getPost('nama_sungai'),
            'titik_pantau' => $this->request->getPost('titik_pantau'),
            'data_tss' => $this->request->getPost('data_tss'),
            'debit_air' => $this->request->getPost('debit_air'),
            'beban_pencemar' => $this->request->getPost('beban_pencemar'),
            'waktu_sampling' => $this->request->getPost('waktu_sampling'),
        );
        $TssEksistingModel->saveTss($data);
        echo '<script>
                alert("Sukses Mnambah Data");
                </script>';
        return redirect()->to('/TSSAktual');
    }

    public function createTSS()
    {
        return view('/pages/TSSAktual/createTSS');
    }

  
}