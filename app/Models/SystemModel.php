<?php

namespace App\Models;

use CodeIgniter\Model;

class systemModel extends Model
{
    protected $table = 'file_system';
    protected $primaryKey = 'id_file';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'value'
    ];
    // ...

    public function searchBy($by, $content)
    {
        $data = $this->where([$by => $content])->first();
        return $data;
    }
}
