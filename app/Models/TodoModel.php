<?php

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ujian_ci';
    protected $primaryKey       = 'id_todo';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_todo', 'todo'];
}
