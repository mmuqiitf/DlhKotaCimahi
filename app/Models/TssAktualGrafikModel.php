<?php

namespace App\Models;

use CodeIgniter\Model;

class TssAktualGrafikModel extends Model
{
    protected $table = 'tss_aktual';
    protected $primaryKey = 'id_tss';
    protected $allowedFields = [
        'titik_pantau',
        'tss_aktual',
    ];
}
