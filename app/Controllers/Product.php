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

    public function indexMolis(): string
    {
        $data = [
            'title' => 'Motor Listrik | Torselis',
            'produk' => $this->produkModel->getMolis()
        ];
        return view('product/index', $data);
    }

    public function indexSelis(): string
    {
        $data = [
            'title' => 'Sepeda Listrik | Torselis',
            'produk' => $this->produkModel->getSelis()
        ];
        return view('product/index', $data);
    }

    public function details($slug)
    {
        $data = [
            'title' => 'Produk | Torselis',
            'produk' => $this->produkModel->getAllProduk($slug)
        ];

        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk tidak ditemukan.');
        }

        return view('product/details', $data);
    }
}
