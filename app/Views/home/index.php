<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Berkendara <br>dengan Listrik</h1>
                                <p>Menghadirkan pilihan motor & sepeda listrik terbaik untuk Anda!</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

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
        <div class="text-center mb-3">
            <a href="<?= base_url('/settings'); ?>" class="btn btn-warning" role="button">Mulai</a>
        </div>
    </div>
</section>
<!-- end SAW Area -->

<?= $this->endSection(); ?>