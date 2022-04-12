<?php

namespace App\Models;

use CodeIgniter\Model;

class BODEksistingModel extends Model
{
    protected $table = 'bod_eksisting';
    protected $primaryKey = 'ID_BOD_Eksisting';
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
            'ID_BOD_Eksisting' => $idbod
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
            'ID_BOD_Eksisting' => $idbod
        ])->first();
        return $data;
    }
    public function dataBODEksisting()
    {
        $query = $this->db->table('bod_eksisting')
            ->select('*')
            ->get();
        return $query->getResultArray();
    }

    public function bod_eksisting_post($data)
    {
        return $this->db->table('bod_eksisting')->insert($data);
    }

    public function search($keyword)
    {
        return $this->table('bod_eksisting')->like('nama_sungai', $keyword)->orLike('titik_pantau', $keyword)->findAll();
    }
    public function insertexceldata($data)
    {
        $this->db->table('bod_eksisting')->insert($data);
    }
}
