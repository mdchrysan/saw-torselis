<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Produk | Torselis'
        ];
        return view('product/index', $data);
    }
}
