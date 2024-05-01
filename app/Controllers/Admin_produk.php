<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Admin_produk extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function indexMolis(): string
    {
        $data = [
            'title' => 'Produk Molis | Torselis',
            'produk' => $this->produkModel->getMolis()
        ];
        return view('admin/produk/molis/dashboard_molis', $data);
    }

    public function indexSelis(): string
    {
        $data = [
            'title' => 'Produk Selis | Torselis',
            'produk' => $this->produkModel->getSelis()
        ];
        return view('admin/produk/selis/dashboard_selis', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Produk | Torselis',
            'validation' => \Config\Services::validation()
        ];
        // if 1 > molis
        // if 2 > selis
        return view('admin/produk/molis/create_molis', $data);
        // return view('admin/produk/molis/create_selis', $data);
    }

    public function save()
    {
        return redirect()->to('/molis-list')->with('pesan', 'Data berhasil ditambahkan.');
    }
}
