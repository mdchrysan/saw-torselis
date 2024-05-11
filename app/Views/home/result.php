<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<div class="bg-page">
    <div class="container mt-5 p-3 text-center">
        <h1 class="mb-3 mt-5 page-title">Hasil Rekomendasi</h1>
        <div class="row">
            <?php foreach ($preferensi as $p) : ?>
                <div class="col col-lg-4 col-sm-12 mb-3">
                    <h3 class="page-title">#<?= $p['rank']; ?></h3>
                    <div class="card mx-auto shadow" style="height: 70vh; width: 18rem;">
                        <img src="/img/produk/<?= $p['gambar']; ?>" class="card-img-top result-img" alt="Gambar Produk">
                        <div class="card-body">
                            <h4 class="card-title"><?= $p['nama']; ?></h4>
                            <div>
                                <div class="row card-text">
                                    <p class="col-6 mb-0 text-right">Harga</p>
                                    <p class="col-6 mb-0 text-left">Rp <?= number_format($p['harga']); ?></p>
                                </div>
                                <div class="row card-text">
                                    <p class="col-6 mb-0 text-right">Power Dinamo</p>
                                    <p class="col-6 mb-0 text-left"><?= $p['power']; ?> watt</p>
                                </div>
                                <div class="row card-text">
                                    <p class="col-6 mb-0 text-right">Kecepatan Max</p>
                                    <p class="col-6 mb-0 text-left"><?= $p['kecepatan_max']; ?> km/h</p>
                                </div>
                                <div class="row card-text">
                                    <p class="col-6 mb-0 text-right">Jarak Tempuh</p>
                                    <p class="col-6 mb-0 text-left"><?= $p['jarak_tempuh']; ?> km</p>
                                </div>
                            </div>
                            <a href="/products/<?= $p['slug']; ?>" class="btn btn-sm w-100 btn-outline-warning mt-3">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>