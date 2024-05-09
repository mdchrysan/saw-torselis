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
        $w1 = $this->request->getVar('w_c1');
        $w2 = $this->request->getVar('w_c2');
        $w3 = $this->request->getVar('w_c3');
        $w4 = $this->request->getVar('w_c4');

        // if ($type == '1') $produk = "Motor Listrik";
        // elseif ($type == '2') $produk = "Sepeda Listrik";

        // normalize weight
        $sum_w = $w1 + $w2 + $w3 + $w4;
        // $text1 = "Jenis kendaraan: " . $produk;
        // $text2 = "w_c1=" . $w1 . ", w_c2=" . $w2 . ", w_c3=" . $w3 . ", w_c4=" . $w4 . ", sum_w=" . $sum_w;
        $w1 = $w1 / $sum_w;
        $w2 = $w2 / $sum_w;
        $w3 = $w3 / $sum_w;
        $w4 = $w4 / $sum_w;
        $sum_w = $w1 + $w2 + $w3 + $w4;
        // $text3 = "w_c1=" . $w1 . ", w_c2=" . $w2 . ", w_c3=" . $w3 . ", w_c4=" . $w4 . ", sum_w=" . $sum_w;

        # debug
        // $w = array($text1, $text2, $text3);
        // dd($w);

        // call function getPreferensi
        // send var thru param
        $V = $this->getPreferensi($type, $w1, $w2, $w3, $w4);

        // function getPreferensi return $V[] contains V1,V2,V3,Vt

        // call function rank
        $Vr = $this->getRank($V);

        // filter Vr to third highest rank
        $Vr_result = [];
        foreach ($Vr as $Vr) {
            if (in_array($Vr['rank'], [1, 2, 3]))
                $Vr_result[] = $Vr;
        }

        // sort result based on rank
        usort($Vr_result, function ($a, $b) {
            return $a['rank'] - $b['rank'];
        });

        $data = [
            'title' => 'Hasil Rekomendasi | Torselis',
            'preferensi' => $Vr_result
        ];

        return view('home/result', $data);

        // show preference table with rank value
        // return view('home/preferensi', $data);
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

    public function getPreferensi($type, $w1, $w2, $w3, $w4)
    {
        // get r
        // and set new var name
        if ($type == '1') {
            $r = $this->getNormalisasiMolis();
            $r1 = array_column($r, 'r_m1');
            $r2 = array_column($r, 'r_m2');
            $r3 = array_column($r, 'r_m3');
            $r4 = array_column($r, 'r_m4');
        } elseif ($type == '2') {
            $r = $this->getNormalisasiSelis();
            $r1 = array_column($r, 'r_s1');
            $r2 = array_column($r, 'r_s2');
            $r3 = array_column($r, 'r_s3');
            $r4 = array_column($r, 'r_s4');
        }

        // count v = sum(w*r)1
        $V = [];
        $i = 0;
        foreach ($r as $r) {
            $r['V1'] = $w1 * $r1[$i];
            $r['V2'] = $w2 * $r2[$i];
            $r['V3'] = $w3 * $r3[$i];
            $r['V4'] = $w4 * $r4[$i];
            $r['Vt'] = $r['V1'] + $r['V2'] + $r['V3'] + $r['V4'];
            $V[] = $r;
            $i++;
        }

        return $V;
    }

    public function getRank($V)
    {
        $Vt = array_column($V, 'Vt');
        arsort($Vt);

        $Vr = [];
        $rank = 1;
        foreach ($Vt as $vt) {
            $i = array_search($vt, $Vt);
            $V[$i]['rank'] = $rank++;
            $Vr = $V;
        }
        return $Vr;
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
        $molis = $this->produkModel->where(['jenis_kendaraan' => '1'])->paginate(10, 'molis');
        $selis = $this->produkModel->where(['jenis_kendaraan' => '2'])->paginate(10, 'selis');
        $pager1 = $this->produkModel->where(['jenis_kendaraan' => '1'])->pager;
        $pager2 = $this->produkModel->where(['jenis_kendaraan' => '2'])->pager;
        $currentPage = $this->request->getVar('page_produk') ? $this->request->getVar('page_produk') : 1;

        // list($molis, $selis) = $this->produkModel->getTorselis();

        $data = [
            'title' => 'Bobot Produk | Torselis',
            'molis' => $molis,
            'selis' => $selis,
            'pager1' => $pager1,
            'pager2' => $pager2,
            'currentPage' => $currentPage
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
