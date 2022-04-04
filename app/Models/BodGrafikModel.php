<?php

namespace App\Models;

use CodeIgniter\Model;

class BodGrafikModel extends Model
{
    protected $table = 'bod_potensial';
    protected $primaryKey = 'id_potensial';
    protected $allowedFields = [
        'Tahun_domestik',
        'Nilai_domestik',
    ];
}
