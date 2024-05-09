<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<div class="bg-page" style="height: 100vh;">
    <div class="container mt-5 pt-3">
        <div class="card mt-5 p-3 mx-auto shadow">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 text-center">
                    <img src="/img/produk/<?= $produk['gambar']; ?>" class="img-detail" alt="Gambar Produk">
                </div>
                <div class="col-lg-6 col-md-12 px-3">
                    <div class="mb-4">
                        <h1 class="page-title"><?= $produk['nama']; ?></h1>
                        <p class="mb-0 fst-italic">Mulai dari</p>
                        <!-- format number with grouped thousand -->
                        <?php $harga = number_format($produk['harga']); ?>
                        <h3>Rp <?= $harga; ?></h3>
                    </div>
                    <div class="w-75">
                        <div class="row">
                            <div class="col-6">Baterai</div>
                            <div class="col-6"><?= $produk['kap_baterai']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-6">Power Dinamo</div>
                            <div class="col-6"><?= $produk['power']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-6">Kecepatan Max</div>
                            <div class="col-6"><?= $produk['kecepatan_max']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-6">Jarak Tempuh</div>
                            <div class="col-6"><?= $produk['jarak_tempuh']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-6">Daya Angkut</div>
                            <div class="col-6"><?= $produk['daya_angkut']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-6">Warna</div>
                            <div class="col-6"><?= $produk['warna']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-6">Sistem Rem</div>
                            <div class="col-6"><?= $produk['sistem_rem']; ?></div>
                        </div>
                    </div>
                    <div class="mt-5"><a class="details-back text-italic" href="/products">
                            < Kembali ke Daftar Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>