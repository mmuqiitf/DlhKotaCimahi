<?php

namespace App\Models;

use CodeIgniter\Model;

class Titikpantau extends Model
{
    protected $table = 'titikpantau';
    protected $allowedFields =['Param_1','Param_2','Param_3','Param_4','Param_5','Param_6','Param_7','status_mutu','Nilai_pij'];
}