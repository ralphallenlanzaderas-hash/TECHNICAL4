<?php

namespace App\Controllers;

class Users extends BaseController
{
    protected $helpers = ['url'];

    public function index(): string
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Ralph Allen Lanzaderas',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Sofia Ramirez',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Daniel Flores',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Patricia Torres',
                'role'      => 'Store Manager',
            ],
            [
                'username'  => 'inventory01',
                'full_name' => 'Nathan Villanueva',
                'role'      => 'Inventory Staff',
            ],
        ];

        return view('users', [
            'users' => $users,
        ]);
    }
}