<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<!-- start banner Area -->
<section class="banner">
    <div class="row m-5">
        <div class="col-lg-6 col-md-5 col-sm-12 banner-fig">
            <div class="container pt-5">
                <img class="banner-img" src="img/banner/motor-red.png" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-7 col-sm-12 banner-text">
            <div class="container">
                <div class="banner-head">Berkendara <br>dengan Listrik</div>
                <div class="banner-subhead">Menghadirkan pilihan<br>motor & sepeda listrik<br>terbaik untuk Anda!</div>
            </div>
        </div>
    </div>
</section>
<!-- end banner Area -->

<!-- start About Area -->
<section id="tentang">
    <div class="container my-5">
        <h1 class="text-center page-title">Tentang Torselis</h1>
        <div class="row p-5">
            <div class="col-md-4 col-sm-12 mb-3 card-about">
                <div class="card border-warning h-100" style="width: 18rem;">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <h5 class="card-title"><i class="fa-solid fa-arrow-pointer fa-2x"></i></h5>
                        <p class="card-text">Mendukung<br>pemilihan<br>motor & sepeda<br>listrik</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3 card-about">
                <div class="card border-warning h-100" style="width: 18rem;">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <h5 class="card-title"><i class="fa-solid fa-scale-balanced fa-2x"></i></h5>
                        <p class="card-text">Menggunakan<br>kriteria<br>yang dapat<br>disesuaikan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3 card-about">
                <div class="card border-warning h-100" style="width: 18rem;">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <h5 class="card-title"><i class="fa-solid fa-trophy fa-2x"></i></h5>
                        <p class="card-text">Memberikan<br>3 rekomendasi<br>pilihan terbaik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end About Area -->

<!-- start SAW Area -->
<section id="sawSteps">
    <div class="container my-5 d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center page-title">Bingung mau pilih kendaraan listrik yang mana?</h3>
        <h5 class="text-center">Ikuti langkah di bawah ini!</h5>
        <div class="steps p-5">
            <div class="step-body">
                <div class="step-number">1</div>
                <h6 class="step-text">Pilih jenis kendaraan yang Anda inginkan</h6>
            </div>
            <div class="step-body">
                <div class="step-number">2</div>
                <h6 class="step-text">Tentukan pengaturan dari setiap kriteria pada kendaraan yang sesuai kebutuhan Anda</h6>
            </div>
            <div class="step-body">
                <div class="step-number">3</div>
                <h6 class="step-text">Klik tombol "Dapatkan Hasil"</h6>
            </div>
            <div class="step-body">
                <div class="step-number">4</div>
                <h6 class="step-text">Hasil rekomendasi terbaik akan langsung muncul di hadapan Anda</h6>
            </div>
        </div>
        <div class="text-center mb-5" style="background-color: #ffc107;">
            <a href="<?= base_url('/settings'); ?>" class="btn btn-warning btn-outline-dark" style="width:200px" role="button">Mulai</a>
        </div>
    </div>
</section>
<!-- end SAW Area -->

<?= $this->endSection(); ?>