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

    public function searchExcel(){
        $this->reader->setLoadSheetsOnly(["Tabel 29"]);
		$workSheet = $this->reader->load("exp/BODAktualCimahi.xlsx");
        $keyword = $this->request->getVar('keyword');
        $d = $this->request->getVar('periodeke');

        //Perulangan Mengambil Nilai
        $n = 1;
        $a = 1;
        $i = 1;
        $data[$i]['nama_sungai'] = null;
        $data[$i]['titik_pantau'] = null;
        $data[$i]['lintang'] = null;
        $data[$i]['bujur'] = null;
        $data[$i]['waktu_sampling'] = null;
        $data[$i]['BOD'] = null;
        $data[$i]['debit'] = null;
        $data[$i]['beban_pencemar'] = null;

        //Validasi Nama Periode
        if($d == 5){
            $prd = "PERIODE I";
        }elseif($d == 29){
            $prd = "PERIODE II";
        }elseif($d == 51){
            $prd = "PERIODE III";
        }

        while($i <= 15){
            $data3[$i]['waktu_sampling'] = $workSheet->getActiveSheet()->getCell('F' . $d)->getValue();
            //Fitur Search
            if($keyword){
                if($data3[$i]['waktu_sampling'] == $keyword){
                    //Masukan data
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
                }
            }
            $i++;
            $d++;
            $n=1;
        }

        //Penjelasan Data
        $i = 1;      

        //Validasi Isi Data
        if($data[$i]['nama_sungai'] == null){
            $prd = "DATA TIDAK DITEMUKAN!";
        }

        $data1 = [
            'data' => $data,
            'i' => $i,
            'prd' =>$prd
        ];

        //dd($dataHasil);
        return view('/pages/BODEksisting/excel', $data1);
    }

    public function periode()
    {
        //Read File
        $this->reader->setLoadSheetsOnly(["Tabel 29"]);
		$workSheet = $this->reader->load("exp/BODAktualCimahi.xlsx");

        //Validasi Periode
        $nomor = $this->request->getVar('periode');
        $d = 5;
        if($nomor > $d){
            $d = $nomor;
        }

        //Validasi Nama Periode
        if($d == 5){
            $prd = "PERIODE I";
        }elseif($d == 29){
            $prd = "PERIODE II";
        }else{
            $prd = "PERIODE III";
        }

        //Perulangan Mengambil Nilai
        $n = 1;
        $a = 1;
        $i = 1;
        //$d = 5;
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
            //$data[$i]['waktu_sampling'] = search('20 Februari 2020');
        }

        $i = 1;
        //dd($data);
        
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

        return redirect()->to('/BODEksisting/periode/');
    }
}