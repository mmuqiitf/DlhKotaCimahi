<?php

namespace App\Models;

use CodeIgniter\Model;

class BODAktualModel extends Model
{
    protected $table = 'bod_aktual';
    protected $primaryKey = 'ID_BOD_Eksisting';
    protected $allowedFields = [
        'id_bodaktual',
        'titik_pantau',
        'Bod_aktual',
    ];
}
