<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('auth');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('user_name');
        $password = $this->request->getVar('password');
        $data = $model->where('user_name', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'user_name'       => $data['user_name'],
                    'password'     => $data['password'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('Home/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login/Index');
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login/auth');
    }
}
