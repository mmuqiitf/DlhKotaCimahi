<?php

namespace App\Controllers;

use App\Models\SystemModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class BODEksisting extends BaseController
{
    public function __construct()
    {
        $this->systemModel = new SystemModel();

        $this->spreadsheet = new Spreadsheet();
		$this->writer = new Xlsx($this->spreadsheet);
		$this->reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$this->reader->setReadDataOnly(true);

        session();
		helper('filesystem');

    }

    public function index()
    {
        $this->reader->setLoadSheetsOnly(["Tabel 29"]);
		$workSheet = $this->reader->load("exp/BODAktualCimahi.xlsx");
        //dd($workSheet);
        return view('/pages/BODEksisting/index');
    }

    public function create()
    {
        return view('/pages/BODEksisting/create');
    }

    public function uploadExcel()
    {
        $date = date('d/m/Y G:i:s');
		$upd = [
			'value' => $date
		];
		$this->systemModel->update(1, $upd);

		$file = $this->request->getfile('BODAktualCimahi');
        $file_lama = 'exp/BODAktualCimahi.xlsx';
        if (file_exists($file_lama)){
            unlink('exp/BODAktualCimahi.xlsx');
        }

		if ($file != "") {
			$ext = $file->getClientExtension();
			$data_fn = "BODAktualCimahi." . $ext;
			$file->move("exp/", $data_fn);
		}
        return redirect()->to('/BODEksisting/index/');
    }
}