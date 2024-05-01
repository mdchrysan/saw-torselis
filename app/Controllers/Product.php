<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Product extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index(): string
    {
        $produk = $this->produkModel->findAll();

        $data = [
            'title' => 'Produk | Torselis',
            'produk' => $produk
        ];
        return view('product/index', $data);
    }

    public function details($slug)
    {
        $data = [
            'title' => 'Produk | Torselis',
            'produk' => $this->produkModel->getProduk($slug)
        ];

        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk tidak ditemukan.');
        }

        return view('product/details', $data);
    }
}
