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
        // create slug from nama to be saved
        $slug = url_title($this->request->getVar('nama'), '-', true);

        // manage photo
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'dummy-mo1.png';
        } else {
            // generate random filename
            $namaGambar = $fileGambar->getRandomName();
            // move it
            $fileGambar->move('img/produk', $namaGambar);
        }

        $this->produkModel->save([
            'nama'              => $this->request->getVar('nama'),
            'slug'              => $slug,
            'kap_baterai'       => $this->request->getVar('baterai'),
            'harga'             => $this->request->getVar('harga'),
            'daya_angkut'       => $this->request->getVar('daya_angkut'),
            'power'             => $this->request->getVar('power'),
            'warna'             => $this->request->getVar('warna'),
            'kecepatan_max'     => $this->request->getVar('kecepatan'),
            'sistem_rem'        => $this->request->getVar('rem'),
            'jarak_tempuh'      => $this->request->getVar('jarak'),
            'jenis_kendaraan'   => $this->request->getVar('jenis'),
            'gambar'            => $namaGambar,
        ]);
        return redirect()->to('/molis-list')->with('pesan', 'Data berhasil ditambahkan.');
    }
}
