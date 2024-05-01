<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<!-- start banner Area -->
<section class="container banner">
    <div class="row d-flex">
        <div class="col-lg-7 align-items-center">
            <div class="container">
                <img class="img-fluid w-75" src="img/banner/motor-red.png" alt="">
            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="container" style="text-align: start;">
                <div class="banner-head">Berkendara <br>dengan Listrik</div>
                <div class="banner-subhead">Menghadirkan pilihan<br>motor & sepeda listrik<br>terbaik untuk Anda!</div>
            </div>
        </div>
    </div>
</section>
<!-- end banner Area -->

<!-- start About Area -->
<section class="features-area section_gap" id="tentang">
    <div class="container">
        <div class="row features-inner">
            <!-- about 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img style="height: 50px;" src="img/about/cursor.png" alt="">
                    </div>
                    <h6>Mendukung</h6>
                    <p>pemilihan motor & sepeda listrik</p>
                </div>
            </div>
            <!-- about 2 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img style="height: 50px;" src="img/about/scale.png" alt="">
                    </div>
                    <h6>Menggunakan</h6>
                    <p>kriteria yang dapat disesuaikan</p>
                </div>
            </div>
            <!-- about 3 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img style="height: 50px;" src="img/about/achievement.png" alt="">
                    </div>
                    <h6>Memberikan</h6>
                    <p>rekomendasi terbaik</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end About Area -->

<!-- start SAW Area -->
<section class="saw-area">
    <div class="container w-50">
        <div class="mb-3">
            <h6>1. Pilih jenis kendaraan yang Anda inginkan</h6>
            <h6>2. Tentukan pengaturan dari setiap kriteria pada kendaraan yang sesuai kebutuhan Anda</h6>
            <h6>3. Klik tombol "Dapatkan Hasil"</h6>
            <h6>4. Hasil rekomendasi terbaik akan langsung muncul di hadapan Anda</h6>
        </div>
        <div class="text-center mb-5">
            <a href="<?= base_url('/settings'); ?>" class="btn btn-warning" role="button">Mulai</a>
        </div>
    </div>
</section>
<!-- end SAW Area -->

<?= $this->endSection(); ?>