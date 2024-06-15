<?php

namespace App\Controllers\ProjectControllers;

use App\Models\User;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function register()
    {
        return view('ProjectViews/Auth/register');
    }

    public function store()
    {
        $userModel = new User();

        $data = [
            'username' => $this->request->getVar('username'),
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        $userModel->save($data);

        return redirect()->to('project/login');
    }

    public function login()
    {
        return view('ProjectViews/Auth/login');
    }

    public function authenticate()
    {
        $session = session();
        $userModel = new User();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if ($user) {
            $pass = $user['password'];
            $auth = password_verify($password, $pass);
            if ($auth) {
                $ses_data = [
                    'id'       => $user['id'],
                    'username' => $user['username'],
                    'email'    => $user['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('project/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('project/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('project/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('project/login');
    }
}
