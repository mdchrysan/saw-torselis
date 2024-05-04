<?php

namespace App\Controllers;

use CodeIgniter\Log\Logger;
use Config\Logger as ConfigLogger;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login | Torselis'
        ];
        return view('login/login', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
