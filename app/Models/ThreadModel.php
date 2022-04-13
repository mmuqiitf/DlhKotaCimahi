<?php

namespace App\Models;

use CodeIgniter\Model;

class ThreadModel extends Model
{
    protected $table = 'thread';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'Nilai_pij',
        'Nilai_ipa',
        'id_sungai',
        'id_ipa',
        'Status_Mutu_Air',
        'Jumlah_ipa',
    ];
    protected $useTimestamps = false;
}
