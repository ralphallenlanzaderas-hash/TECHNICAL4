<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $helpers = ['url'];

    public function index(): string
    {
        return view('landing');
    }

    public function about(): string
    {
        return view('about');
    }
}