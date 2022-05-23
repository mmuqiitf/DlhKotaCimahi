<?php

namespace App\Models;

use CodeIgniter\Model;

class TssEksistingModel extends Model
{
    protected $table = 'tss_eksisting';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'nama_sungai',
        'titik_pantau',
        'data_tss',
        'debit_air',
        'beban_pencemar',
        'waktu_sampling',
    ];
    protected $useTimestamps = false;

    public function getNorules($id = false)
    {     
        if ($id == false) {            
            return $this->findAll();
        }  
        return $this->where(['ID' => $id])->first();
    }

    public function saveTss($data)
    {
        $data = $this->db->table($this->table);
        return $data->insert($data);
    }
}