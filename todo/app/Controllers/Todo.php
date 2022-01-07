<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodoModel;

class Todo extends BaseController
{
    protected $todoModel;
    public function __construct()
    {
        $this->todoModel = new TodoModel();
    }

    public function index()
    {

        $todo = $this->todoModel->findAll();
        // dd($todo);

        $data = [
            'title' => 'Todo Application',
            'todo' => $todo,
            'validation' => \Config\Services::validation()
        ];

        return view('todo/index', $data);
    }

    public function create()
    {
        // session();

        $data = [
            'title' => 'Add Data',
            'validation' => \Config\Services::validation()
        ];


        return view('task/create', $data);
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id
        $todo = $this->todoModel->find($id);
        // hapus gambar

        dd($todo);
        $this->todoModel->delete($id);

        session()->setFlashdata('message', 'data was deleted');
        return redirect()->to(base_url());
    }

    public function edit($slug)
    {
        // session();

        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'comic' => $this->comicModel->getComic($slug)
        ];


        return view('comics/edit', $data);
    }

    public function update($id)
    {

        // cek judul
        $oldComic = $this->comicModel->getComic($this->request->getVar('slug'));
        if ($oldComic['title'] == $this->request->getVar('title')) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[comic.title]';
        }

        // validasi
        if (!$this->validate([
            'title' => $rule_title,
            'author' => 'required',
            'publisher' => 'required'
        ])) {

            $validation = \Config\Services::validation();

            // dd($validation);
            return redirect()->to(base_url('/comic/edit/' . $this->request->getVar('slug')))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->comicModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'author' => $this->request->getVar('author'),
            'publisher' => $this->request->getVar('publisher'),
            // 'cover' => $this->request->getVar('cover')
        ]);

        session()->setFlashdata('message', 'data was updated');

        return redirect()->to(base_url('/comic'));
    }

    public function save()
    {
        // validasi
        if (!$this->validate([

            'title' => 'required|is_unique[comic.title]',
            'author' => 'required',
            'publisher' => 'required',
            'cover' => 'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]'
        ])) {

            // $validation = \Config\Services::validation();

            // dd($validation);
            // return redirect()->to(base_url('/comic/create'))->withInput()->with('validation', $validation);

            $validation = \Config\Services::validation();
            return redirect()->to(base_url(''))->withInput();
        }

        // ambil gambar

        $fileCover = $this->request->getFile('cover');

        // default image
        if ($fileCover->getError() == 4) {

            $coverName = 'default.jpg';
        } else {
            // generate random name
            $coverName = $fileCover->getRandomName();
            // pindahkan file ke assets/img
            $fileCover->move('assets/img', $coverName);
        }

        // ambil nama file
        // $coverName = $fileCover->getName();

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->comicModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'author' => $this->request->getVar('author'),
            'publisher' => $this->request->getVar('publisher'),
            'cover' => $coverName
        ]);

        session()->setFlashdata('message', 'data was added');

        return redirect()->to(base_url('/comic'));
    }
}
