<?php

namespace App\Controllers;

use App\Models\LoginModel;
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

    public function auth()
    {
        $loginModel = new LoginModel();
        $uname = $this->request->getPost('username');
        $upass = $this->request->getPost('password');

        // check user availability
        $checkUser = $loginModel->where('username', $uname)->first();
        if ($checkUser == null) {
            return redirect()->to('/login');
        } else {
            // check password
            $password = $checkUser['password'];
            if ($upass == $password) {
                // password correct
                // save role & id user to session 
                $save_session = [
                    'id' => $checkUser['id'],
                    'username' => $checkUser['username']
                ];
                session()->set($save_session);
                return redirect()->to('/molis-list');
            } else {
                // password wrong
                return redirect()->to('/login');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
