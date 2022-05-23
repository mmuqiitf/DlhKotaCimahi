<?php

namespace App\Controllers;

use App\Models\BODAktualModel;
use App\Models\TssEksistingModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class TSSAktual extends BaseController
{
    protected $BODAktual, $TssEksisting;
    public function __construct()
    {
        $this->BODAktual = new BODAktualModel();
        $this->TssEksisting = new TssEksistingModel();
    }
    public function index()
    {

        $pager = \Config\Services::pager();

        $data = array(
            'tss_eksisting' => $this->TssEksisting->getNorules(),
            'pager' => $this->TssEksisting->pager
        );
        return view('/pages/TSSAktual/indexTSS', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'nama_sungai' => 'required',
            'titik_pantau' => 'required',
            'tss' => 'required',
            'debit' => 'required',
            'hasil' => 'required',
            'waktu_sampling' => 'required',
        ])) {
            return redirect()->to('/TSSAktual/createTSS')->withInput();
        }
        $data = array(
            'nama_sungai' => $this->request->getPost('nama_sungai'),
            'titik_pantau' => $this->request->getPost('titik_pantau'),
            'data_tss' => $this->request->getPost('tss'),
            'debit_air' => $this->request->getPost('debit'),
            'beban_pencemar' => $this->request->getPost('hasil'),
            'waktu_sampling' => date("Y-m-d", strtotime($this->request->getPost('waktu_sampling'))),
        );
        $this->TssEksisting->save($data);
        echo '<script>
                alert("Sukses Mnambah Data");
                </script>';
        return redirect()->to('/TSSAktual');
    }

    public function createTSS()
    {
        $data['validation'] = \Config\Services::validation();
        $data['bod_aktual'] = $this->BODAktual->findAll();
        // dd($this->BODAktual->findAll());
        return view('/pages/TSSAktual/createTSS', $data);
    }

    public function deleteTSS($id)
    {
        $this->TssEksisting->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/TSSAktual');
    }

    public function export_excel()
    {
        $dataTSS = $this->TssEksisting->findAll();

        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'Nama Sungai')
            ->setCellValue('C1', 'Titik Pantau')
            ->setCellValue('D1', 'Data TSS')
            ->setCellValue('E1', 'Debit Air')
            ->setCellValue('F1', 'Beban Pencemar')
            ->setCellValue('G1', 'Waktu Sampling');

        $column = 2;
        // tulis data mobil ke cell
        foreach ($dataTSS as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['ID'])
                ->setCellValue('B' . $column, $data['nama_sungai'])
                ->setCellValue('C' . $column, $data['titik_pantau'])
                ->setCellValue('D' . $column, $data['data_tss'])
                ->setCellValue('E' . $column, $data['debit_air'])
                ->setCellValue('F' . $column, $data['beban_pencemar'])
                ->setCellValue('G' . $column, $data['waktu_sampling']);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data TSS Eksisting';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
