<?php

namespace App\Models;

use CodeIgniter\Model;

class Titikpantau extends Model
{
    // protected $allowedFields = ['Param_1', 'Param_2', 'Param_3', 'Param_4', 'Param_5', 'Param_6', 'Param_7', 'status_mutu', 'Nilai_pij'];

    protected $table = 'titikpantau';
    protected $primaryKey = 'id_tikpan';
    protected $allowedFields =['Param_1','Param_2','Param_3','Param_4','Param_5','Param_6','Param_7','status_mutu','Nilai_pij','periode_pantau','tanggal_pantau','id_sungai'];
  

    public function gettestimonial($id)
    {
        return $this->where(['id_tikpan' => $id])->first();
    }

    public function tss($idtss)
    {
        $data = $this->where([
            'id_tikpan' => $idtss
        ])->first();
        return $data;
    }

    public function datatss()
    {
        $query = $this->db->table('titikpantau')
            ->select('*')
            ->get();
        return $query->getResultArray();
        
    }

    public function tss_post($data)
    {
        return $this->db->table('titikpantau')->insert($data);
    }

    

    public function getta9()
    {
        $builder = $this->db->table('titikpantau');
        $builder->select('*');
        return $builder->get();
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_tikpan" => $id])->row();
    }
}
    protected $allowedFields = ['koord_tikpan', 'periode_pantau'];

    public function getPantau($id)
    {
        return $this->where(['id_tikpan' => $id])->first();
    }
}
