<?php

namespace App\Controllers;

class CustomerController extends BaseController
{
    public function index()
    {
        // Load the view for the customers page
        return view('customers/index');
    }

    // Add other methods (create, store, edit, update, delete) from TFA3 here later
}