<?php

namespace App\Controllers;

use App\Models\TodoModel;
use phpDocumentor\Reflection\Types\Null_;

class Home extends BaseController
{

    protected $todoModel;
    public function __construct()
    {
        $this->todoModel = new TodoModel();
    }

    public function index()
    {

        $todo = $this->todoModel->orderBy('id', 'desc')->findAll();
        // dd($todo);

        $data = [
            'title' => 'Todo Application',
            'todo' => $todo,
            'task' => null,
            'validation' => \Config\Services::validation()
        ];

        return view('todo/index', $data);
    }

    public function edit($id)
    {
        // session();

        $todo = $this->todoModel->findAll();

        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'task' => $this->todoModel->getTodo($id),
            'todo' => $todo
        ];

        // dd($data);

        return view('todo/edit', $data);
    }


    public function delete($id)
    {
        // cari gambar berdasarkan id
        $todo = $this->todoModel->find($id);
        // hapus gambar


        $this->todoModel->delete($id);

        session()->setFlashdata('message', 'data was deleted');
        return redirect()->to(base_url());
    }


    public function save()
    {
        // dd($this->request->getVar('input'));
        if (!$this->request->getVar('input')) {
            return redirect()->to(base_url());
        }
        $this->todoModel->save([
            'task' => $this->request->getVar('input'),
        ]);

        session()->setFlashdata('message', 'data was added');

        return redirect()->to(base_url());
    }



    public function update($id)
    {
        // dd($this->request->getVar('input'));

        if (!$this->request->getVar('input')) {
            return redirect()->to(base_url());
        }

        $this->todoModel->save([
            'id' => $id,
            'task' => $this->request->getVar('input')
        ]);

        session()->setFlashdata('message', 'data was updated');

        return redirect()->to(base_url());
    }
}
