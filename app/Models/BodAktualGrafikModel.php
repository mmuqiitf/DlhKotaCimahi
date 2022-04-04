<?php

namespace App\Models;

use CodeIgniter\Model;

class BodAktualGrafikModel extends Model
{
    protected $table = 'bod_aktual';
    protected $primaryKey = 'id_bodaktual';
    protected $allowedFields = [
        'titik_pantau',
        'bod_aktual',
    ];
}
