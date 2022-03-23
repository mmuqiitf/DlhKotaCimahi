<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class BODEksistingModel extends Model
{
    protected $table = 'bod_eksisting';
    protected $allowedFields = [
        'ID_BOD_Eksisting',
        'nama_sungai' ,
        'titik_pantau',
        'BOD',
        'Debit',
        'beban_pencemar',
        'waktu_sampling'
    ];

    public function dataBODEksisting()
    {
        $query = $this->db->table('bod_eksisting')
        ->select('*')
        ->get();
        return $query->getResultArray();
    }

}
