<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login | Torselis'
        ];
        return view('login/login', $data);
    }
}
