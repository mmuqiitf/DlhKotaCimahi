<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['user_email', 'user_password', 'user_name', 'tanggal'];
}
