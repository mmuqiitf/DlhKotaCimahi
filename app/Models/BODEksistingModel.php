<?php

namespace App\Models;

use CodeIgniter\Model;

class BODEksistingModel extends Model
{
    protected $table = 'tbltitikpantau';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_sungai',
        'titik_pantau',
        'BOD',
        'Debit',
        'beban_pencemar',
        'waktu_sampling'
    ];
    public function delete_bod($idbod)
    {
        $data = $this->where([
            'id' => $idbod
        ])->first();
        return $data;
    }
    //searchBy
    public function searchBy($by, $content)
    {
        $data = $this->where([
            $by => $content
        ])->first();
        return $data;
    }

    public function bod($idbod)
    {
        $data = $this->where([
            'id' => $idbod
        ])->first();
        return $data;
    }
    public function dataBODEksisting()
    {
        $query = $this->db->table('tbltitikpantau')
            ->select('*')
            ->get();
        return $query->getResultArray();
    }

    public function bod_eksisting_post($data)
    {
        return $this->db->table('tbltitikpantau')->insert($data);
    }

    public function search($keyword)
    {
        return $this->table('tbltitikpantau')->like('nama_sungai', $keyword)->orLike('nama_titikPantau', $keyword)->findAll();
    }
    public function insertexceldata($data)
    {
        $this->db->table('tbltitikpantau')->insert($data);
    }
}
