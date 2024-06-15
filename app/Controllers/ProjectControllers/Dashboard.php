<?php

namespace App\Controllers\ProjectControllers;

use App\Models\User;
use CodeIgniter\Controller;

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

    public function editProfile()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $userModel = new User();
        $user = $userModel->find($session->get('id'));

        return view('ProjectViews/Dashboard/edit_profile', ['user' => $user]);
    }

    public function updateProfile()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $userModel = new User();
        $id = $session->get('id');

        $data = [
            'username' => $this->request->getVar('username'),
            'email'    => $this->request->getVar('email'),
        ];

        $userModel->update($id, $data);

        $session->setFlashdata('success', 'Profile updated successfully');
        return redirect()->to('project/profile');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('project/login');
    }
}
