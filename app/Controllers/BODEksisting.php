<?php

namespace App\Controllers;

use App\Models\BODEksistingModel;

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
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->BodEksistingModel = new BODEksistingModel();
        session();

        session();
        helper('filesystem');
    }

    public function listbod()
    {
        $bod = $this->BodEksistingModel->paginate(5, "tbltitikpantau");
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $bod = $this->BodEksistingModel->search($keyword);
        } else {
            $bod = $this->BodEksistingModel->paginate(5, "tbltitikpantau");
        }
        $data = [
            'validation' => \Config\Services::validation(),
            'title' => 'BOD Eksisting',
            'bod' => $bod,
            'pager' => $this->BodEksistingModel->pager,
        ];

        return view('pages/BODEksisting/bodlist', $data);
    }
    public function create()
    {
        $data = ['validation' => \Config\Services::validation()];

        return view('pages/BODEksisting/create', $data);
    }

    public function create_bod()
    {
        if (!$this->validate([
            'nama_sungai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Sungai harus diisi'
                ]
            ],
            'nama_titikPantau' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Titik pantau harus diisi'
                ]
            ],
            'BOD' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'BOD harus diisi'
                ]
            ],
            'Debit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Debit harus diisi'
                ]
            ],
            'beban_pencemar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Beban pencemar harus diisi'
                ]
            ],
            'waktu_sampling' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu sampling harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/BODEksisting/create')->withInput();
        }
        $data = [

            'id' => $this->request->getPost('id'),
            'nama_sungai' => $this->request->getPost('nama_sungai'),
            'nama_titikPantau' => $this->request->getPost('nama_titikPantau'),
            'BOD' => $this->request->getPost('BOD'),
            'Debit' => $this->request->getPost('Debit'),
            'beban_pencemar' => $this->request->getPost('beban_pencemar'),
            'waktu_sampling' => $this->request->getPost('waktu_sampling'),
        ];
        //dd($data);
        $this->BodEksistingModel->bod_eksisting_post($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('/BODEksisting/listbod');
    }

    public function update_bod()
    {
        $bod = $this->request->getvar('id');
        $data = $this->request->getvar(['nama_sungai', 'nama_titikPantau', 'BOD', 'Debit', 'beban_pencemar', 'waktu_sampling']);

        //dd($data);
        $this->BodEksistingModel->update($bod, $data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('/BODEksisting/listbod');
    }

    public function delete_bod()
    {
        $data = $this->request->getvar('id');
        //dd($data);
        $this->BodEksistingModel->delete($data);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/BODEksisting/listbod');
    }

    public function update_list_bod($idbod)
    {
        $bod = $this->BodEksistingModel->bod($idbod);
        $data = [
            'title' => 'Update BOD Eksisting',
            'bod' => $bod
        ];
        //dd($bod);
        return view('pages/BODEksisting/update', $data);
    }


    public function delete_bod1($ID_BOD_Eksisting)
    {
        $bod = $this->BodEksistingModel->searchBy('ID_BOD_Eksisting', $ID_BOD_Eksisting);
        $this->BodEksistingModel->delete($bod);
        session()->setFlashdata('success', 'Data berhasil dihapus', $bod);
        return redirect()->to('/BODEksisting/listbod');
    }

    public function periode1()
    {
        $this->reader->setLoadSheetsOnly(["Tabel 29"]);
        $workSheet = $this->reader->load("exp/BODAktualCimahi.xlsx");

        $n = 1;
        $a = 1;
        $i = 1;
        $d = 5;
        while ($i <= 15) {
            while ($n <= 3) {
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
            if ($data[$i]['beban_pencemar'] == 0) {
                $data[$i]['beban_pencemar'] = "-";
            }

            //Filter Nama 
            if ($data[$i]['nama_sungai'] == null) {
                $data[$i]['nama_sungai'] = $simpan;
            } else {
                $simpan = $data[$i]['nama_sungai'];
            }

            $i++;
            $d++;
            $n = 1;
        }

        $i = 1;
        $prd = "PERIODE I";

        $data1 = [
            'data' => $data,
            'i' => $i,
            'prd' => $prd
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
        while ($i <= 15) {
            while ($n <= 3) {
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
            if ($data[$i]['beban_pencemar'] == 0) {
                $data[$i]['beban_pencemar'] = "-";
            }

            //Filter Nama 
            if ($data[$i]['nama_sungai'] == null) {
                $data[$i]['nama_sungai'] = $simpan;
            } else {
                $simpan = $data[$i]['nama_sungai'];
            }

            $i++;
            $d++;
            $n = 1;
        }

        $i = 1;
        $prd = "PERIODE II";

        $data1 = [
            'data' => $data,
            'i' => $i,
            'prd' => $prd
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
        while ($i <= 15) {
            while ($n <= 3) {
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
            if ($data[$i]['beban_pencemar'] == 0) {
                $data[$i]['beban_pencemar'] = "-";
            }

            //Filter Nama 
            if ($data[$i]['nama_sungai'] == null) {
                $data[$i]['nama_sungai'] = $simpan;
            } else {
                $simpan = $data[$i]['nama_sungai'];
            }

            $i++;
            $d++;
            $n = 1;
        }

        $i = 1;
        $prd = "PERIODE III";

        $data1 = [
            'data' => $data,
            'i' => $i,
            'prd' => $prd
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
    public function importexcel()
    {
        //validation
        if (!$this->validate([
            'file_excel' => [
                'rules' => 'uploaded[file_excel]|ext_in[file_excel,xlsx,xls]|max_size[file_excel,1024]',
                'errors' => [
                    'uploaded' => 'File harus di upload',
                    'ext_in' => 'Ekstensi file tidak di izinkan',
                    'max_size' => 'Ukuran file terlalu besar'
                ]
            ]
        ])) {
            return redirect()->to('/BODEksisting/listbod/')->withInput()->with('errors', $this->validator->getErrors());
        }
        $file = $this->request->getFile('file_excel');
        //d($file);
        $ext = $file->getClientExtension();

        if ($ext == 'xls') {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }


        $spreadsheet = $render->load($file);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        //date format phpspreadsheet


        foreach ($sheetData as $s => $excel) {
            //skip title row
            if ($s <= 11) {
                continue;
            }
            $data = [
                'nama_sungai' => $excel[1],
                'nama_titikPantau' => $excel[2],
                'waktu_sampling' => date("Y-m-d", strtotime($excel[5])),
                'BOD' => $excel[12],
                'debit' => $excel[41],
                'beban_pencemar' => ($excel[12] * $excel[41]) * 86.4
            ];
            //convert date format
            //$data['waktu_sampling'] = $data['waktu_sampling'][1] . '-' . $data['waktu_sampling'][2] . '-' . $data['waktu_sampling'][0];
            //dd($data);
            $this->BodEksistingModel->insertexceldata($data);
        }
        //dd($sheetData);
        session()->setFlashdata('pesan', 'Data berhasil di import');
        //redirect to listbod
        return redirect()->to('/BODEksisting/listbod/');
    }
}
