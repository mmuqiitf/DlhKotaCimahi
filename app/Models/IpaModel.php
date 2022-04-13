<?php

namespace App\Models;

use CodeIgniter\Model;

class IpaModel extends Model
{
    protected $table = 'ipa';
    protected $primaryKey = 'id_ipa';
    protected $allowedFields = [
        'Titik_pantau',
        'Periode',
        'Nilai_pij',
    ];
    protected $useTimestamps = false;
}
