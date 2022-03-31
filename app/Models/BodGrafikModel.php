<?php

namespace App\Models;

use CodeIgniter\Model;

class BodGrafikModel extends Model
{
    protected $table = 'bod_eksisting';
    protected $primaryKey = 'ID_BOD_Eksisting';
    protected $allowedFields = [
        'nama_sungai',
        'titik_pantau',
        'BOD',
        'Debit',
        'beban_pencemar',
        'waktu_sampling'
    ];
}
