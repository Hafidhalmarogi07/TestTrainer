<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;



class LoginController extends BaseController
{
    protected $user;
    public function __contstruct()
    {

        $this->user = new UserModel();
    }
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
    public function saveUser()
    {
        $rule = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
        if ($this->validate($rule)) {
            $this->user->insert([
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('kategori'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
