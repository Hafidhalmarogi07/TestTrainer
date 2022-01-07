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



    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if ($data) {
            $pass = $data['user_password'];

            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
}
