<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Admin_tabel extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function indexKriteria(): string
    {
        $data = [
            'title' => 'Kriteria | Torselis'
        ];
        return view('admin/tabel/kriteria', $data);
    }

    public function indexBobotProduk(): string
    {
        $data = [
            'title' => 'Bobot Produk | Torselis',
            'molis' => $this->produkModel->getMolis(),
            'selis' => $this->produkModel->getSelis()
        ];
        return view('admin/tabel/bobot_produk', $data);
    }

    public function indexNormalisasi(): string
    {
        $data = [
            'title' => 'Normalisasi | Torselis'
        ];
        return view('admin/tabel/normalisasi', $data);
    }
}
