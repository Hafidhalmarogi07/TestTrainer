<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodoModel;

class HomeController extends BaseController
{
    protected $todoModel;

    function __construct()
    {
        $this->todoModel = new todoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Todo Monitor',
            'datas' => $this->todoModel->orderBy('id_todo', 'DESC')->findAll()
        ];

        return view('pages/home', $data);
    }

    public function addData(){
        $this->todoModel->save([
            'todo' => $this->request->getVar('input_task')
        ]);

        return redirect()->to('HomeController/index');
    }

    public function updateForm($id_todo){
        // dd($this->request->getVar());
        
        $data = [
            'title' => 'Edit Data',
            'datas' => $this->todoModel->where('id_todo', $id_todo)->first()
        ];    

        return view('pages/updateForm', $data);
    }

    public function update($id_todo){
        // dd($this->request->getVar());
        $this->todoModel->save([
            'id_todo' => $id_todo,
            'todo' => $this->request->getVar('input_task')
        ]);

        return redirect()->to('HomeController/index');
    }

    public function delete($id_todo){
        $this->todoModel->delete($id_todo);

        return redirect()->to('HomeController/index');
    }
}
