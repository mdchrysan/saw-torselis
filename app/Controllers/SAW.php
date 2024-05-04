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

        $data = [
            'title' => 'Hasil Rekomendasi | Torselis',
            // 'preferensi' => $preferensi
        ];
        return view('home/result', $data);
    }

    public function getNormalisasiMolis()
    {
        // get product
        $m = $this->produkModel->getMolis();

        // find min x_c1 (cost)
        $molis = array_column($m, 'harga');
        $min = min($molis);

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
        // get product
        $s = $this->produkModel->getSelis();

        // find min x_c1 (cost)
        $molis = array_column($s, 'harga');
        $min = min($molis);
        dd($min);

        # code ...

        return 0;
    }

    public function getNormalisasi()
    {
        // get products
        list($molis, $selis) = $this->produkModel->getTorselis();

        //  get min max
        # find min of x_c1 (cost)
        $min_m1 = min(array_column($molis, 'harga'));
        $min_s1 = min(array_column($selis, 'harga'));

        # find max of x_c2 (benefit)
        $max_m2 = max(array_column($molis, 'power'));
        $max_s2 = max(array_column($selis, 'power'));

        # find max of x_c3 (benefit)
        $max_m3 = max(array_column($molis, 'kecepatan_max'));
        $max_s3 = max(array_column($selis, 'kecepatan_max'));

        # find max of x_c4 (benefit)
        $max_m4 = max(array_column($molis, 'jarak_tempuh'));
        $max_s4 = max(array_column($selis, 'jarak_tempuh'));

        // count r
        # molis
        $r_molis = [];
        foreach ($molis as $m) {
            $m['r_m1'] = $min_m1 / $m['harga'];
            $m['r_m2'] = $m['power'] / $max_m2;
            $m['r_m3'] = $m['kecepatan_max'] / $max_m3;
            $m['r_m4'] = $m['jarak_tempuh'] / $max_m4;
            $r_molis[] = $m;
        }

        #selis
        $r_selis = [];
        foreach ($selis as $s) {
            $s['r_s1'] = $min_s1 / $s['harga'];
            $s['r_s2'] = $s['power'] / $max_s2;
            $s['r_s3'] = $s['kecepatan_max'] / $max_s3;
            $s['r_s4'] = $s['jarak_tempuh'] / $max_s4;
            $r_selis[] = $s;
        }

        return array($r_molis, $r_selis);
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
        list($molis, $selis) = $this->getNormalisasi();

        $data = [
            'title' => 'Normalisasi | Torselis',
            'molis' => $molis,
            'selis' => $selis
        ];
        return view('admin/saw_table/normalisasi', $data);
    }
}
