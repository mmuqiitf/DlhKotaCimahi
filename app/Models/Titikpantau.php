<?php

namespace App\Models;

use CodeIgniter\Model;

class Titikpantau extends Model
{
    // protected $allowedFields = ['Param_1', 'Param_2', 'Param_3', 'Param_4', 'Param_5', 'Param_6', 'Param_7', 'status_mutu', 'Nilai_pij'];

    protected $table = 'titikpantau';
    protected $primaryKey = 'id_tikpan';
    protected $allowedFields = ['koord_tikpan', 'periode_pantau'];

    public function getPantau($id)
    {
        return $this->where(['id_tikpan' => $id])->first();
    }
}
