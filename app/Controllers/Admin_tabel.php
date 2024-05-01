<?php

namespace App\Controllers;

class Admin_tabel extends BaseController
{
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
            'title' => 'Bobot Produk | Torselis'
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
