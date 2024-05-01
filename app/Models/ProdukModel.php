<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis_kendaraan', 'nama', 'slug', 'harga', 'power', 'kecepatan_max', 'jarak_tempuh', 'kap_baterai', 'daya_angkut', 'warna', 'sistem_rem', 'gambar'];

    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function getProduk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function getMolis()
    {
        return $this->where(['jenis_kendaraan' => '1'])->findAll();
    }

    public function getSelis()
    {
        return $this->where(['jenis_kendaraan' => '2'])->findAll();
    }
}
