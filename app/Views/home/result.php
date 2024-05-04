<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<div class="bg-page">
    <div class="container mt-5 p-3 text-center">
        <h1 class="mb-3 page-title">Hasil Rekomendasi</h1>
        <div class="row">
            <!-- <--?php foreach ($preferensi as $p) : ?>
                <div class="col mb-3">
                    <div class="card mx-auto shadow" style="width: 15rem;">
                        <img src="/img/produk/<--?= $p['gambar']; ?>" class="card-img-top" alt="Gambar Produk">
                        <div class="card-body">
                            <h5 class="card-title"><--?= $p['nama']; ?></h5>
                            <a href="/products/<--?= $p['slug']; ?>" class="btn btn-outline-warning">Detail</a>
                        </div>
                    </div>
                </div>
            <--?php endforeach; ?> -->

            <!-- V1 -->
            <div class="col col-lg-4 col-sm-12 mb-3">
                <div class="card mx-auto shadow" style="height: 70vh; width: 18rem;">
                    <img src="/img/produk/dummy-landscape.jpg" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body">
                        <h4 class="card-title">Ofero Stareer 2 Pro</h4>
                        <div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Harga</p>
                                <p class="col-6 mb-0 text-left">Rp <?= number_format('8799000'); ?></p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Power Dinamo</p>
                                <p class="col-6 mb-0 text-left">1200 watt</p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Kecepatan Max</p>
                                <p class="col-6 mb-0 text-left">55 km/h</p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Jarak Tempuh</p>
                                <p class="col-6 mb-0 text-left">80 km</p>
                            </div>
                        </div>
                        <a href="/products/slug" class="btn btn-sm w-100 btn-outline-warning mt-3">Detail</a>
                    </div>
                </div>
            </div>
            <!-- V2 -->
            <div class="col col-lg-4 col-sm-12 mb-3">
                <div class="card mx-auto shadow" style="height: 70vh; width: 18rem;">
                    <img src="/img/produk/dummy-landscape.jpg" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body">
                        <h4 class="card-title">Ofero Stareer 2 Pro</h4>
                        <div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Harga</p>
                                <p class="col-6 mb-0 text-left">Rp <?= number_format('8799000'); ?></p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Power Dinamo</p>
                                <p class="col-6 mb-0 text-left">1200 watt</p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Kecepatan Max</p>
                                <p class="col-6 mb-0 text-left">55 km/h</p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Jarak Tempuh</p>
                                <p class="col-6 mb-0 text-left">80 km</p>
                            </div>
                        </div>
                        <a href="/products/slug" class="btn btn-sm w-100 btn-outline-warning mt-3">Detail</a>
                    </div>
                </div>
            </div>
            <!-- V3 -->
            <div class="col col-lg-4 col-sm-12 mb-3">
                <div class="card mx-auto shadow" style="height: 70vh; width: 18rem;">
                    <img src="/img/produk/dummy-landscape.jpg" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body">
                        <h4 class="card-title">Ofero Stareer 2 Pro</h4>
                        <div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Harga</p>
                                <p class="col-6 mb-0 text-left">Rp <?= number_format('8799000'); ?></p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Power Dinamo</p>
                                <p class="col-6 mb-0 text-left">1200 watt</p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Kecepatan Max</p>
                                <p class="col-6 mb-0 text-left">55 km/h</p>
                            </div>
                            <div class="row card-text">
                                <p class="col-6 mb-0 text-right">Jarak Tempuh</p>
                                <p class="col-6 mb-0 text-left">80 km</p>
                            </div>
                        </div>
                        <a href="/products/slug" class="btn btn-sm w-100 btn-outline-warning mt-3">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>