<?php

namespace App\Models;

use CodeIgniter\Model;

class Titikpantau extends Model
{
    // protected $allowedFields = ['Param_1', 'Param_2', 'Param_3', 'Param_4', 'Param_5', 'Param_6', 'Param_7', 'status_mutu', 'Nilai_pij'];

    protected $table = 'titikpantau';
    protected $primaryKey = 'id_tikpan';
    protected $allowedFields =['Param_1','Param_2','Param_3','Param_4','Param_5','Param_6','Param_7','status_mutu','Nilai_pij','periode_pantau','tanggal_pantau','id_sungai','Nama_sungai'];
    protected $useTimeStamps =TRUE;


    // public function update($id,$data)
    // {
    //     $post = $this->input->post();
    //     // $this->id_tikpan = $post["id_tikpan"];
    //     $this->Param_1 = $post["coltss"];
    //     $this->Param_2 = $post["colbod"];
    //     $this->Param_3=  $post["colfosfat"];
    //     return $this->db->update($this->_table, $this, array('id_tikpan' => $post['id']));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("id_tikpan" => $id));
    // }

    //    'Param_1' => $this->request->getVar('coltss'),
    //         'Param_2' => $this->request->getVar('colbod'),
    //         'Param_3' => $this->request->getVar('colcod'),
    //         'Param_4' => $this->request->getVar('colfosfat'),
    //         'Param_5' => $this->request->getVar('colcoliform'),
    //         'Param_6' => $this->request->getVar('colferal'),
    //         'Param_7' => $this->request->getVar('coldo'),
    //         'Nama_sungai' => $this->request->getVar('collist'),
    //         'periode_pantau' => $this->request->getVar('periode'),
    //         'tanggal_pantau' => $this->request->getVar('inputtanggal'),
    //         'status_mutu' => $this->request->getVar('colstatus'),
    //         'Nilai_pij' => $this->request->getVar('colpij'),


    
    public function delete_tss($id)
    {
        $data = $this->where([
            'id_tikpan' => $id
        ])->first();
        return $data;
    }

    public function searchBy($by, $content)
    {
        $data = $this->where([
            $by => $content
        ])->first();
        return $data;
    }

    
    public function tss($id)
    {
        $data = $this->where([
            'id_tikpan' => $id
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



    public function getPantau($id)
    {
        return $this->where(['id_tikpan' => $id])->first();
    }
}
