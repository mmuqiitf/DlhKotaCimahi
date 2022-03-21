<?php

namespace App\Controllers;

class BODEksisting extends BaseController
{
    public function index()
    {
        return view('/pages/BODEksisting/index');
    }

    public function create()
    {
        return view('/pages/BODEksisting/create');
    }

  
}