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
        $type = $this->request->getVar('type');
        $w_c1 = $this->request->getVar('w_c1');
        $w_c2 = $this->request->getVar('w_c2');
        $w_c3 = $this->request->getVar('w_c3');
        $w_c4 = $this->request->getVar('w_c4');

        // if ($type == '1') $produk = "Motor Listrik";
        // elseif ($type == '2') $produk = "Sepeda Listrik";

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

        $data = [
            'title' => 'Hasil Rekomendasi | Torselis',
            // 'preferensi' => $preferensi
        ];

        // return view('home/result', $data);
        return view('home/preferensi', $data);
    }

    public function getNormalisasiMolis()
    {
        // get products
        $molis = $this->produkModel->getMolis();

        //  get min max
        //  cost-min: harga, benefit-max: power, kec, jarak
        $min_c1 = min(array_column($molis, 'harga'));
        $max_c2 = max(array_column($molis, 'power'));
        $max_c3 = max(array_column($molis, 'kecepatan_max'));
        $max_c4 = max(array_column($molis, 'jarak_tempuh'));

        // count r
        $r = [];
        foreach ($molis as $m) {
            $m['r_m1'] = $min_c1 / $m['harga'];
            $m['r_m2'] = $m['power'] / $max_c2;
            $m['r_m3'] = $m['kecepatan_max'] / $max_c3;
            $m['r_m4'] = $m['jarak_tempuh'] / $max_c4;
            $r[] = $m;
        }

        return $r;
    }

    public function getNormalisasiSelis()
    {
        // get products
        $selis = $this->produkModel->getSelis();

        //  get min max
        //  cost-min: harga, benefit-max: power, kec, jarak
        $min_c1 = min(array_column($selis, 'harga'));
        $max_c2 = max(array_column($selis, 'power'));
        $max_c3 = max(array_column($selis, 'kecepatan_max'));
        $max_c4 = max(array_column($selis, 'jarak_tempuh'));

        // count r
        $r = [];
        foreach ($selis as $s) {
            $s['r_s1'] = $min_c1 / $s['harga'];
            $s['r_s2'] = $s['power'] / $max_c2;
            $s['r_s3'] = $s['kecepatan_max'] / $max_c3;
            $s['r_s4'] = $s['jarak_tempuh'] / $max_c4;
            $r[] = $s;
        }

        return $r;
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

    public function indexPreferensi()
    {
        $p = 0;

        $data = [
            'title' => 'Preferensi | Torselis',
            'produk' => $p
        ];
        return view('admin/saw_table/normalisasi', $data);
    }
}
