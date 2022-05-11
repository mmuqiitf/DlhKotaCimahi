<?php

namespace App\Models;

use CodeIgniter\Model;

class Statusmutuair extends Model
{
    protected $table = 'statusmutuair';
    protected $primaryKey = 'id_mutuair';
    protected $allowedFields = [
        'katagori',
        'jumlah',
        'warna',
    ];
    protected $useTimestamps = false;
}
