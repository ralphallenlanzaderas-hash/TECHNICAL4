<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'role'     => $this->request->getPost('role'),
        ];

        $model->insert($data);
        return redirect()->to('/users')->with('success', 'User created successfully.');
    }
}