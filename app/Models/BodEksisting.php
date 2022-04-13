<?php

namespace App\Models;

use CodeIgniter\Model;

class BodEksisting extends Model
{
    protected $table = 'bod_eksisting';
    protected $primaryKey = 'ID_BOD_Eksisting';
    protected $allowedFields = [
        'nama_sungai',
        'titik_pantau',
        'beban_pencemar',
    ];
}
