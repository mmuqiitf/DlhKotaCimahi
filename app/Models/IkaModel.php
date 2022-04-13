<?php

namespace App\Models;

use CodeIgniter\Model;

class IkaModel extends Model
{
    protected $table = 'ika';
    protected $primaryKey = 'id_ika';
    protected $allowedFields = [
        'jumlah_ika',
        'nilai_ika',
        'tahun_ika',
    ];
    protected $useTimestamps = false;
}
