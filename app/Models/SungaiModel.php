<?php

namespace App\Models;

use CodeIgniter\Model;

class SungaiModel extends Model
{
    protected $table = 'sungai';
    protected $primaryKey = 'id_sungai';
    protected $allowedFields = [
        'nama_sungai',
        'periode',
    ];
    protected $useTimestamps = false;
}
