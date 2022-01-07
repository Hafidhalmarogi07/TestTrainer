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

    public function add()
    {
    }
}
