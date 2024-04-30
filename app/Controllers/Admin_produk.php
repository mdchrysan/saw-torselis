<?php

namespace App\Controllers;

class Admin_produk extends BaseController
{
    public function indexMolis(): string
    {
        $data = [
            'title' => 'Produk Molis | Torselis'
        ];
        return view('admin/produk/molis/dashboard_molis', $data);
    }

    public function indexSelis(): string
    {
        $data = [
            'title' => 'Produk Selis | Torselis'
        ];
        return view('admin/produk/molis/dashboard_selis', $data);
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
