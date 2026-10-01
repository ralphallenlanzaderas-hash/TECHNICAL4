<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function login()
    {
        // Redirect to customers page if session is active
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/customers');
        }

        return view('auth/login');
    }

    public function processLogin()
    {
        $session  = session();
        $model    = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            // Verify hashed password
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'id'         => $user['id'],
                    'username'   => $user['username'],
                    'role'       => $user['role'] ?? 'staff',
                    'isLoggedIn' => true,
                ];
                $session->set($sessionData);

                return redirect()->to('/customers')->with('success', 'Logged in successfully.');
            }
        }

        return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'You have been logged out.');
    }
}