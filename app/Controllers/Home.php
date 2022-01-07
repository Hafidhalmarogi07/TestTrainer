<?php

namespace App\Controllers;

use App\Models\Todo;

class Home extends BaseController
{
    protected $Todo;

    function __construct()
    {
        $this->todo = new Todo();
        $this->session = session();
    }

    public function index()
    {
        $data['todos'] = $this->todo->findAll();
        return view('index', $data);
    }

    public function create()
    {
        $this->todo->insert([
            'note' => $this->request->getPost('note'),
        ]);

		return redirect('/')
        // ->with('success', 'Data Added Successfully')
        ;	
    }

    public function delete($id){
        $this->todo->delete($id);

        return redirect('/')
        // ->with('success', 'Data Deleted Successfully')
        ;
    }
    
    public function editform($id){
        $edit_note = $this -> todo ->where('id', $id)->first();
        // dd($edit_note["note"]);
        return view('form')
        // ->with('success', 'Data Deleted Successfully')
        ;
    }

    public function edit($id){
        $this->todo->update($id, [
            'note' => $this->request->getPost('note'),
            ]);        
            return view('form')
        // ->with('success', 'Data Deleted Successfully')
        ;
    }

}
