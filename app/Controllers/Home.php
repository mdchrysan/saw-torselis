<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Beranda | Torselis'
        ];
        return view('home/index', $data);
    }

    public function setWeight()
    {
        $data = [
            'title' => 'Torselis',
            'validation' => \Config\Services::validation()
        ];
        return view('home/saw_settings', $data);
    }
}
