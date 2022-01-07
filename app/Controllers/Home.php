<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    protected $dataNote;

    public function __construct()
    {
        $this->dataNote = new HomeModel();
    }

    public function index()
    {
        $note = $this->dataNote->findAll();

        $data = [
            'title' => 'App List | Halaman Utama',
            'note' => $note
        ];

        return view('index', $data);
    }

    public function editView($input)
    {
        $note = $this->dataNote->where(['id' => $input])->first();

        $data = [
            'title' => 'App List | Halaman Utama',
            'note' => $note
        ];

        return view('edit-view', $data);
    }

    public function add()
    {
        $input = $this->request->getVar('input');

        $note = $this->dataNote->save([
            'isi' => $input
        ]);

        return redirect()->to(base_url());
    }

    public function save($id)
    {
        $input = $this->request->getVar('input');

        $note = $this->dataNote->save([
            'id' => $id,
            'isi' => $input
        ]);

        return redirect()->to(base_url());
    }

    public function delete($id)
    {
        $note = $this->dataNote->delete([
            'id' => $id
        ]);

        return redirect()->to(base_url());
    }
}
