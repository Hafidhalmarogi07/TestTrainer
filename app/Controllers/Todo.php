<?php

namespace App\Controllers;

use App\Models\TodoModel;

class Todo extends BaseController
{
    public function index()
    {
        $model = new TodoModel();
        $data['title'] = 'Todo List';
        $data['getActivity'] = $model->getActivity();
        return view('todo', $data);
    }

    public function process_add()
    {
        $model = new TodoModel();
        $nama = $this->request->getPost('nama');
        if (empty($nama)) {
            echo '<script>
                alert("Tidak dapat menambahkan data kosong!")
                window.location="' . base_url('todo/') . '"
            </script>';
        } else {
            $data = array(
                'nama' => $nama
            );
            $model->tambahData($data);
            echo '<script>
                    window.location="' . base_url('todo/') . '"
                </script>';
        }
    }

    public function process_delete($id)
    {
        $model = new TodoModel();
        $model->hapusData($id);
        echo '<script>
                window.location="' . base_url('todo/') . '"
            </script>';
    }

    public function edit($id)
    {
        $model = new TodoModel();
        $process = $model->getDetail($id)->getRow();
        if (isset($process)) {
            $data['info'] = $process;
            return view('todo_edit', $data);
        } else {
            echo '<script>
                alert("Gagal Memproses Data!")
                window.location="' . base_url('todo/') . '"
            </script>';
        }
    }

    public function process_edit()
    {
        $model = new TodoModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->editData($data, $id);
        echo '<script>
                alert("Sukses Mengubah Data")
                window.location="' . base_url('todo/') . '"
            </script>';
    }
}
