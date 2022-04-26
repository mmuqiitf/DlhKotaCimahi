<?php

namespace App\Models;

use CodeIgniter\Model;

class BODPotensialModel extends Model
{
    protected $table = 'bod_potensial_domestik';
    protected $primaryKey = 'ID_BOD_Potensial_Domestik';
    protected $allowedFields = [
        'Kecamatan',
        'Tahun',
        'Jumlah_Penduduk', 
        'Rasio_Ekivalen',
        'Alfa',
        'Faktor_Emisi_Penduduk',
        'BOD_Potensial_Domestik'
    ];
    public function delete_bod($idbod)
    {
        $data = $this->where([
            'ID_BOD_Potensial_Domestik' => $idbod
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
            'ID_BOD_Potensial_Domestik' => $idbod
        ])->first();
        return $data;
    }
    public function dataBODPotensialDomestik()
    {
        $query = $this->db->table('bod_potensial_domestik')
            ->select('*')
            ->get();
        return $query->getResultArray();
    }

    public function BOD_Potensial_Domestik_post($data)
    {
        return $this->db->table('bod_potensial_domestik')->insert($data);
    }

    public function search($keyword)
    {
        return $this->table('bod_potensial_domestik')->like('Kecamatan', $keyword)->findAll();
    }
    public function insertexceldata($data)
    {
        $this->db->table('bod_potensial_domestik')->insert($data);
    }
}
