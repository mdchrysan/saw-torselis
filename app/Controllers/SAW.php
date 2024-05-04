<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class SAW extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function getWeight()
    {
        // validation
        # code ...

        // get product type & weight
        $value = $this->request->getVar('value');
        $w_c1 = $this->request->getVar('w_c1');
        $w_c2 = $this->request->getVar('w_c2');
        $w_c3 = $this->request->getVar('w_c3');
        $w_c4 = $this->request->getVar('w_c4');

        return array($value, $w_c1, $w_c2, $w_c3, $w_c4);
    }

    public function getNormalisasiMolis()
    {
        // get all key value from settings() and set to var
        # code ...

        // get product
        $molis = $this->produkModel->getMolis();

        // create temp var
        // $temp_harga = [];
        // $temp_power = [];
        // $temp_kecepatan = [];
        // $temp_jarak = [];

        // save products to temp 
        // foreach ($molis as $key => $value) {
        //     // $temp_harga = ;
        //     // $temp_power = ;
        //     // $temp_kecepatan = ;
        //     // $temp_jarak = ;
        // }

        // count r
        // min = harga, max = power, kec, jarak
        // foreach ($molis as $key => $value) {
        //     $r_harga = min($temp_harga)/$xharga;
        //     $r_power = $xpower/max($temp_power);
        //     $r_kecepatan = $xkecepatan/max($temp_kecepatan);
        //     $r_jarak = $xjarak/max($temp_jarak);
        // }

        return $molis;
    }

    public function getNormalisasiSelis()
    {
        # code ...

        // get product
        $selis = $this->produkModel->getSelis();

        # code ...

        return $selis;
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
        list($molis, $selis) = $this->produkModel->getTorselis();

        $data = [
            'title' => 'Bobot Produk | Torselis',
            'molis' => $molis,
            'selis' => $selis
        ];
        return view('admin/tabel/bobot_produk', $data);
    }

    public function indexNormalisasi(): string
    {
        $molis = $this->getNormalisasiMolis();
        $selis = $this->getNormalisasiSelis();

        $data = [
            'title' => 'Normalisasi | Torselis',
            'molis' => $molis,
            'selis' => $selis
        ];
        return view('admin/tabel/normalisasi', $data);
    }
}
