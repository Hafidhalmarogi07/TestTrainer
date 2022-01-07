<?php

namespace App\Models;

use CodeIgniter\Model;
use PDO;

class TodoModel extends Model
{
    protected $table      = 'activity';
    protected $primaryKey = 'id';

    public function getActivity()
    {
        return $this->orderBy('id', 'desc')->findAll();
    }

    public function getDataActivity($id)
    {
        return $this->getWhere(['id' => $id]);
    }

    public function tambahData($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function hapusData($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }

    public function getDetail($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function editData($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }
}
