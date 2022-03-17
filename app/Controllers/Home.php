<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('main/dashboard');
        echo view('layout/footer');
    }

     public function indexair()
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('main/indeksair');
        echo view('layout/footer');
    }

    public function statusair()
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('main/mutuair');
        echo view('layout/footer');
    }
}
