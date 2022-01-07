<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Todo;
use App\Models\Todolist;

class TodoController extends BaseController
{

    protected $todo;
    public function __construct()
    {
        $this->todomodel = new Todolist();
    }
    public function index()
    {
        $data['todo'] = $this->todomodel->findAll();
        $data['controller'] = $this;
        return view('Todo', $data);
    }
    public function createdata()
    {
        $this->todomodel->insert([
            'nama' => $this->request->getPost('nama'),
        ]);

        return redirect('TodoApp')->with('success', 'Data Deleted Successfully');
    }

    public function deleteTodo($id)
    {
        $this->todomodel->delete($id);
        return redirect('TodoApp')->with('success', 'Data Deleted Successfully');
    }


    public function updateTodo($id)
    {
        $this->todomodel->update($id, [
            'nama' => $this->request->getPost('nama'),

        ]);
        return redirect('TodoApp')->with('success', 'Data Updated Successfully');
    }
}
