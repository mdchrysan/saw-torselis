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
        $data = [
            'title' => 'Hasil Rekomendasi | Torselis',
            // 'preferensi' => $preferensi
        ];
        return view('home/result', $data);

        // validation
        # code ...

        // get product type & weight
        $type = $this->request->getVar('type');
        $w_c1 = $this->request->getVar('w_c1');
        $w_c2 = $this->request->getVar('w_c2');
        $w_c3 = $this->request->getVar('w_c3');
        $w_c4 = $this->request->getVar('w_c4');

        if ($type == '1') $produk = "Motor Listrik";
        elseif ($type == '2') $produk = "Sepeda Listrik";

        // normalize weight
        $sum_w = $w_c1 + $w_c2 + $w_c3 + $w_c4;
        // $text1 = "Jenis kendaraan: " . $produk;
        // $text2 = "w_c1=" . $w_c1 . ", w_c2=" . $w_c2 . ", w_c3=" . $w_c3 . ", w_c4=" . $w_c4 . ", sum_w=" . $sum_w;
        $w_c1 = $w_c1 / $sum_w;
        $w_c2 = $w_c2 / $sum_w;
        $w_c3 = $w_c3 / $sum_w;
        $w_c4 = $w_c4 / $sum_w;
        $sum_w = $w_c1 + $w_c2 + $w_c3 + $w_c4;
        // $text3 = "w_c1=" . $w_c1 . ", w_c2=" . $w_c2 . ", w_c3=" . $w_c3 . ", w_c4=" . $w_c4 . ", sum_w=" . $sum_w;

        # debug
        // $w = array($text1, $text2, $text3);
        // dd($w);

        // call function getPreferensi
        // return array($type, $w_c1, $w_c2, $w_c3, $w_c4);

        // function getPreferensi return $preferensi contains array of V1,V2,V3

        // return view
    }

    public function getNormalisasiMolis()
    {
        // get all key value from settings() and set to var
        $value = $this->getWeight();
        dd($value);

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
        return view('admin/saw_table/kriteria', $data);
    }

    public function indexBobotProduk(): string
    {
        # experiment
        // $p = $this->produkModel->getTorselis();
        // $produk = [
        //     'molis' => $p[0],
        //     'selis' => $p[1]
        // ];
        # same output
        // dd($p);
        // dd($produk);

        list($molis, $selis) = $this->produkModel->getTorselis();

        $data = [
            'title' => 'Bobot Produk | Torselis',
            'molis' => $molis,
            'selis' => $selis
        ];
        return view('admin/saw_table/bobot_produk', $data);
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
        return view('admin/saw_table/normalisasi', $data);
    }
}
