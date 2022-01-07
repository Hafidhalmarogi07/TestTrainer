<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodoModel;

class TodoController extends BaseController
{
    protected $todo;
 
    function __construct()
    {
        $this->todo = new TodoModel();
    }
    public function index()
    {
        $data['todo'] = $this->todo->findAll();
        return view('layout/index', $data);
    }
    
    public function create()
    {
        $this->todo->insert([
            'description' => $this->request->getPost('description'),
        ]);
		return redirect('/')->with('success', 'Data Added Successfully');	
    }

    public function edit($id)
    {
        $this->todo->update($id, [
                'description' => $this->request->getPost('description')
            ]);

            return redirect('/')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $this->todo->delete($id);
        session()->setFlashdata('message', 'Delete Data Berhasil');
        return redirect()->to('/');
    }
}
