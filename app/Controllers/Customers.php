<?php

namespace App\Controllers;

class Customers extends BaseController
{
    protected $helpers = ['url'];

    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email'     => 'juan.delacruz@example.com',
                'phone'     => '09123456789',
            ],
            [
                'full_name' => 'Maria Santos',
                'email'     => 'maria.santos@example.com',
                'phone'     => '09187654321',
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email'     => 'carlo.reyes@example.com',
                'phone'     => '09234567891',
            ],
            [
                'full_name' => 'Angela Garcia',
                'email'     => 'angela.garcia@example.com',
                'phone'     => '09345678912',
            ],
            [
                'full_name' => 'Miguel Mendoza',
                'email'     => 'miguel.mendoza@example.com',
                'phone'     => '09456789123',
            ],
        ];

        return view('customers', [
            'customers' => $customers,
        ]);
    }
}