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
        
        return view('/pages/BODEksisting/index');
    }

    public function create()
    {
        return view('/pages/BODEksisting/create');
    }

    public function periode1()
    {
        $this->reader->setLoadSheetsOnly(["Tabel 29"]);
		$workSheet = $this->reader->load("exp/BODAktualCimahi.xlsx");

        $n = 1;
        $a = 1;
        $i = 1;
        $d = 5;
        while ($i <= 15){
            while ($n <=3){
                $data[$i]['nama_sungai'] = $workSheet->getActiveSheet()->getCell('B' . $d)->getValue();
                $n++;
            }
            $data[$i]['titik_pantau'] = $workSheet->getActiveSheet()->getCell('C' . $d)->getValue();
            $data[$i]['lintang'] = $workSheet->getActiveSheet()->getCell('D' . $d)->getValue();
            $data[$i]['bujur'] = $workSheet->getActiveSheet()->getCell('E' . $d)->getValue();
            $data[$i]['waktu_sampling'] = $workSheet->getActiveSheet()->getCell('F' . $d)->getValue();
            $data[$i]['BOD'] = $workSheet->getActiveSheet()->getCell('M' . $d)->getValue();
            $data[$i]['debit'] = $workSheet->getActiveSheet()->getCell('AP' . $d)->getValue();
            $data[$i]['beban_pencemar'] = $workSheet->getActiveSheet()->getCell('AQ' . $d)->getCalculatedValue();

            //Filter Nilai
            if ($data[$i]['beban_pencemar'] == 0){
                $data[$i]['beban_pencemar'] = "-";
            }

            //Filter Nama 
            if($data[$i]['nama_sungai'] == null){
                $data[$i]['nama_sungai'] = $simpan;
            }else{
                $simpan = $data[$i]['nama_sungai'];
            }

            $i++;
            $d++;
            $n=1;
        }

        $i = 1;
        $prd = "PERIODE I";
        
        $data1 = [
            'data' => $data,
            'i' => $i,
            'prd' =>$prd
        ];
        //dd($data);
        return view('/pages/BODEksisting/excel', $data1);
    }

    public function periode2()
    {
        $this->reader->setLoadSheetsOnly(["Tabel 29"]);
		$workSheet = $this->reader->load("exp/BODAktualCimahi.xlsx");

        $n = 1;
        $a = 1;
        $i = 1;
        $d = 29;
        while ($i <= 15){
            while ($n <=3){
                $data[$i]['nama_sungai'] = $workSheet->getActiveSheet()->getCell('B' . $d)->getValue();
                $n++;
            }
            $data[$i]['titik_pantau'] = $workSheet->getActiveSheet()->getCell('C' . $d)->getValue();
            $data[$i]['lintang'] = $workSheet->getActiveSheet()->getCell('D' . $d)->getValue();
            $data[$i]['bujur'] = $workSheet->getActiveSheet()->getCell('E' . $d)->getValue();
            $data[$i]['waktu_sampling'] = $workSheet->getActiveSheet()->getCell('F' . $d)->getValue();
            $data[$i]['BOD'] = $workSheet->getActiveSheet()->getCell('M' . $d)->getValue();
            $data[$i]['debit'] = $workSheet->getActiveSheet()->getCell('AP' . $d)->getValue();
            $data[$i]['beban_pencemar'] = $workSheet->getActiveSheet()->getCell('AQ' . $d)->getCalculatedValue();

            //Filter Nilai
            if ($data[$i]['beban_pencemar'] == 0){
                $data[$i]['beban_pencemar'] = "-";
            }

            //Filter Nama 
            if($data[$i]['nama_sungai'] == null){
                $data[$i]['nama_sungai'] = $simpan;
            }else{
                $simpan = $data[$i]['nama_sungai'];
            }

            $i++;
            $d++;
            $n=1;
        }

        $i = 1;
        $prd = "PERIODE II";
        
        $data1 = [
            'data' => $data,
            'i' => $i,
            'prd' =>$prd
        ];
        //dd($data);
        return view('/pages/BODEksisting/excel', $data1);
    }

    public function periode3()
    {
        $this->reader->setLoadSheetsOnly(["Tabel 29"]);
		$workSheet = $this->reader->load("exp/BODAktualCimahi.xlsx");

        $n = 1;
        $a = 1;
        $i = 1;
        $d = 51;
        while ($i <= 15){
            while ($n <=3){
                $data[$i]['nama_sungai'] = $workSheet->getActiveSheet()->getCell('B' . $d)->getValue();
                $n++;
            }
            $data[$i]['titik_pantau'] = $workSheet->getActiveSheet()->getCell('C' . $d)->getValue();
            $data[$i]['lintang'] = $workSheet->getActiveSheet()->getCell('D' . $d)->getValue();
            $data[$i]['bujur'] = $workSheet->getActiveSheet()->getCell('E' . $d)->getValue();
            $data[$i]['waktu_sampling'] = $workSheet->getActiveSheet()->getCell('F' . $d)->getValue();
            $data[$i]['BOD'] = $workSheet->getActiveSheet()->getCell('M' . $d)->getValue();
            $data[$i]['debit'] = $workSheet->getActiveSheet()->getCell('AP' . $d)->getValue();
            $data[$i]['beban_pencemar'] = $workSheet->getActiveSheet()->getCell('AQ' . $d)->getCalculatedValue();

            //Filter Nilai
            if ($data[$i]['beban_pencemar'] == 0){
                $data[$i]['beban_pencemar'] = "-";
            }

            //Filter Nama 
            if($data[$i]['nama_sungai'] == null){
                $data[$i]['nama_sungai'] = $simpan;
            }else{
                $simpan = $data[$i]['nama_sungai'];
            }

            $i++;
            $d++;
            $n=1;
        }

        $i = 1;
        $prd = "PERIODE III";
        
        $data1 = [
            'data' => $data,
            'i' => $i,
            'prd' =>$prd
        ];
        //dd($data);
        return view('/pages/BODEksisting/excel', $data1);
    }

    public function uploadExcel()
    {
        $date = date('d/m/Y G:i:s');
		$upd = [
			'value' => $date
		];
		$this->systemModel->update(1, $upd);

		$file = $this->request->getfile('BODAktualCimahi');
        //$file_lama = 'exp/BODAktualCimahi.xlsx';

        //if (file_exists($file_lama)){
        //    unlink('exp/BODAktualCimahi.xlsx');
        //}

		if ($file != "") {
            unlink('exp/BODAktualCimahi.xlsx');
			$ext = $file->getClientExtension();
			$data_fn = "BODAktualCimahi." . $ext;
			$file->move("exp/", $data_fn);
		}

        return redirect()->to('/BODEksisting/periode1/');
    }
}