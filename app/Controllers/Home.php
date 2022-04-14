<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\IkaModel;
use App\Models\IpaModel;
use App\Models\GrafikModel;
use \App\Models\ThreadModel;
use \App\Models\SungaiModel;
use App\Models\BODPotensial;
use App\Models\BodEksisting;
use App\Models\TssAktualGrafikModel;

class Home extends BaseController
{
    public function index()
    {
        $modelUser = new Users();
        $modelIka = new IkaModel();
        $modelBodEksisting = new BodEksisting();

        $modelSungai = new SungaiModel();
        $modelThread = new ThreadModel();
        $modelBODPotensial = new BODPotensial();
        $modelTssAktualgrafik = new TssAktualGrafikModel();
        $jumlah_user = $modelUser->countAllResults();
        $jumlah_Sungai = $modelSungai->countAllResults();
        $tahun_lahir_user = $modelUser->select('YEAR(tanggal) AS tahun_lahir, COUNT(id_user) AS jumlah')
            ->groupBy('YEAR(tanggal)')
            ->get();

        $jumlah_thread = $modelThread->countAllResults();
        $jumlah_user = $modelUser->countAllResults();

        // $thread_per_sungai = $modelThread->select('COUNT(thread.id) AS jumlah, sungai.nama_sungai AS sungai,thread.Nilai_pij AS Nilai_pij')
        //     ->join('sungai', 'thread.id_sungai=sungai.id_sungai')
        //     ->groupBy('thread.id_sungai')
        //     ->groupBy('thread.Nilai_pij')
        //     ->get();
        // ==START IKA===
        // NILAI IKA
        $nilaiIKA =  $modelIka->select('COUNT(ika.id_ika) AS nilai_ika, ika.tahun_ika AS tahun_ika ,ika.nilai_ika AS nilai_ika')
            ->groupBy('ika.tahun_ika')
            ->groupBy('ika.nilai_ika')
            ->get();
        // END NILAI IKA
        // JUMLAH IKA
        $jumlahIKA =  $modelIka->select('COUNT(ika.id_ika) AS jumlah_ika, ika.tahun_ika AS tahun_ika ,ika.jumlah_ika AS jumlah_ika')
            ->groupBy('ika.tahun_ika')
            ->groupBy('ika.jumlah_ika')
            ->get();
        // END JUMLAH IKA
        // ===END START IKA===


        // START BOD
        // BOD EKSISTING
        $bodEKSISTING =  $modelBodEksisting->select('COUNT(bod_eksisting.ID_BOD_Eksisting) AS beban_pencemar, bod_eksisting.nama_sungai AS nama_sungai ,bod_eksisting.titik_pantau AS titik_pantau,bod_eksisting.beban_pencemar AS beban_pencemar')
            ->groupBy('bod_eksisting.nama_sungai')
            ->groupBy('bod_eksisting.titik_pantau')
            ->groupBy('bod_eksisting.beban_pencemar')
            ->get();
        // END BOD EKSISTING

        // BOD POTENSIAL
        $BodPOTENSIAL =  $modelBODPotensial->select('COUNT(bod_potensial.id_potensial) AS Nilai_domestik, bod_potensial.Tahun_domestik AS Tahun_domestik  ,bod_potensial.Nilai_domestik AS Nilai_domestik')
            ->groupBy('bod_potensial.Tahun_domestik')
            ->groupBy('bod_potensial.Nilai_domestik')
            ->get();

        // END POTENSIAL
        // END START BOD
        $thread_per_sungai = $modelThread->select('COUNT(thread.id) AS jumlah, sungai.nama_sungai AS sungai,thread.Nilai_pij AS Nilai_pij')
            ->join('sungai', 'thread.id_sungai=sungai.id_sungai')
            ->groupBy('thread.id_sungai')
            ->groupBy('thread.Nilai_pij')
            ->get();

        $Status_Mutu_Air = $modelThread->select('COUNT(thread.id) AS Status_Mutu_Air, sungai.nama_sungai AS sungai,thread.Status_Mutu_Air AS Status_Mutu_Air')
            ->join('sungai', 'thread.id_sungai=sungai.id_sungai')
            ->groupBy('thread.id_sungai')
            ->groupBy('thread.Status_Mutu_Air')
            ->get();

        $Index_Pencemaran_air = $modelThread->select('COUNT(thread.id) AS Nilai_ipa,katagori_pencemaran.katagori AS katagori_pencemaran, thread.Nilai_ipa AS Nilai_ipa')
            ->join('katagori_pencemaran', 'thread.id_ipa=katagori_pencemaran.id_ipa')
            ->groupBy('thread.id_ipa')
            ->groupBy('thread.Nilai_ipa')
            ->get();

        $Jumlah_Pencemaran_air = $modelThread->select('COUNT(thread.id) AS Jumlah_ipa,katagori_pencemaran.katagori AS katagori_pencemaran, thread.Jumlah_ipa AS Jumlah_ipa')
            ->join('katagori_pencemaran', 'thread.id_ipa=katagori_pencemaran.id_ipa')
            ->groupBy('thread.id_ipa')
            ->groupBy('thread.Jumlah_ipa')
            ->get();

        $thread_per_periode = $modelThread->select('COUNT(thread.id) AS jumlah, sungai.periode AS sungai,thread.Nilai_pij AS Nilai_pij')
            ->join('sungai', 'thread.id_sungai=sungai.id_sungai')
            ->groupBy('thread.id_sungai')
            ->groupBy('thread.Nilai_pij')
            ->get();

        // $Bodgraf =  $modelBodgrafik->select('COUNT(bod_potensial.id_potensial) AS Nilai_domestik, bod_potensial.Tahun_domestik AS bod_potensial ,bod_potensial.Nilai_domestik AS Nilai_domestik')
        //     ->groupBy('bod_potensial.Tahun_domestik')
        //     ->groupBy('bod_potensial.Nilai_domestik')
        //     ->get();

        // $modelBodAktualgrafik =  $modelBodAktualgrafik->select('COUNT(bod_aktual.id_bodaktual) AS Nilai_BodAktual, bod_aktual.titik_pantau AS bod_aktual ,bod_aktual.Bod_aktual AS Bod_aktual')
        //     ->groupBy('bod_aktual.titik_pantau')
        //     ->groupBy('bod_aktual.Bod_aktual')
        //     ->get();

        $modelTssAktualgrafik =  $modelTssAktualgrafik->select('COUNT(tss_aktual.id_tss) AS Nilai_tssAktual, tss_aktual.titik_pantau AS titik_pantau ,tss_aktual.tss_aktual AS tss_aktual')
            ->groupBy('tss_aktual.titik_pantau')
            ->groupBy('tss_aktual.tss_aktual')
            ->get();




        // $bulan = $this->request->getGet('bulan');
        // $bulan = $bulan ? $bulan : Date("m");
        // $bulantss = $this->request->getGet('bulan');
        // $bulantss = $bulantss ? $bulantss : Date("m");
        return view('/pages/home', [
            'jumlah_user' => $jumlah_user,
            'nilaiIKA' => $nilaiIKA,
            'jumlahIKA' => $jumlahIKA,
            'bodEKSISTING' => $bodEKSISTING,
            'BodPOTENSIAL' => $BodPOTENSIAL,




            'jumlah_Sungai' => $jumlah_Sungai,
            'tahun_lahir_user' => $tahun_lahir_user,
            'jumlah_thread' => $jumlah_thread,
            'Index_Pencemaran_air' => $Index_Pencemaran_air,
            'Jumlah_Pencemaran_air' => $Jumlah_Pencemaran_air,
            // 'jumlah_isi' => $jumlah_isi,
            'thread_per_sungai' => $thread_per_sungai,
            'Status_Mutu_Air' => $Status_Mutu_Air,
            'thread_per_periode' => $thread_per_periode,
            // 'Bodgraf' => $Bodgraf,
            // 'modelBodAktualgrafik' => $modelBodAktualgrafik,
            'modelTssAktualgrafik' => $modelTssAktualgrafik,
        ]);
    }



    // INDEX PENCEMARAN AIR
    function tampilGrafikIPA()
    {
        $ModelIpaModel = new IpaModel();
        $bulan = $this->request->getPost('bulan');

        $db = \Config\Database::connect();

        $query = $db->query("SELECT periode AS tgl,Titik_pantau,Nilai_pij FROM ipa WHERE DATE_FORMAT(periode,'%Y-%m') = '$bulan' ORDER BY periode ASC")->getResult();
        // $query = $db->query("SELECT tglfaktur AS tgl,nama,totalharga FROM barangmasuk WHERE DATE_FORMAT(tglfaktur,'%Y-%m') = '$bulan' ORDER BY tglfaktur ASC")->getResult();



        $data = [
            'grafik' => $query
        ];

        $chartData = [
            'data' => view('pages/Grafik/GrafikBebanPencemaran', $data)
        ];

        echo json_encode($chartData);
    }

    // END INDEX PENCEMARAN AIR

    public function indexair()
    {
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('main/indeksair');
        // echo view('layout/footer');
        return view('/main/indeksair');
    }

    public function statusair()
    {
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('main/mutuair');
        // echo view('layout/footer');
        return view('/main/mutuair');
    }

    public function buattss()
    {
        return view('/main/createtss');
    }

    public function update()
    {
        return view('/main/update');
    }


    public function bnpencemaran()
    {
        // echo view('layout/header');
        // echo view('layout/sidebar');
        // echo view('main/mutuair');
        // echo view('layout/footer');

        return view('/main/bebanpencemaran');
    }

    public function BODEksisting()
    {
        return view('/pages/BODEksisting/index');
    }
    public function BODPotensial()
    {
        return view('/pages/BODPotensial');
    }

    public function apiData($bulan)
    {
        $grafik = new GrafikModel();
        $grafik->where('tgl >=', "2020-{$bulan}-01");
        $grafik->where('tgl <=', "2020-{$bulan}-31");
        $grafik->orderBy('tgl', 'asc');

        echo json_encode($grafik->get()->getResult());
    }
}
