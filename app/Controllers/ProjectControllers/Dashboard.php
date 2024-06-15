<?php

namespace App\Controllers\ProjectControllers;

use CodeIgniter\Controller;
use App\Models\User;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $data = [
            'username' => $session->get('username'),
            'email'    => $session->get('email'),
        ];

        return view('ProjectViews/Dashboard/index', $data);
    }

    public function profile()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $userModel = new User();
        $user = $userModel->find($session->get('id'));

        return view('ProjectViews/Dashboard/profile', ['user' => $user]);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('project/login');
    }
}
