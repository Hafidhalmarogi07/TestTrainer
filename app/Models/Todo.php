<?php

namespace App\Models;

use CodeIgniter\Model;

class Todo extends Model
{
    protected $table                = 'todos';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['note'];
}