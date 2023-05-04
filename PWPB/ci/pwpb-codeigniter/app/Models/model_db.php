<?php

namespace App\Models;

use CodeIgniter\Model;

class model_db extends Model{
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields =['nama', 'password', 'email', 'hobi'];
}