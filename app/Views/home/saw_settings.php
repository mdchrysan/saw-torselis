<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<div class="bg-page">
    <div class="container p-5 text-center">
        <form action="/result" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="m-5">
                <h3>1. Pilih Jenis Kendaraan</h3>
                <div class="container w-50">
                    <div class="row mb-3">
                        <!-- setting 1 -->
                        <div class="col-lg-6 col-md-12">
                            <input type="radio" class="btn-check" name="type" id="btnMotor" autocomplete="off" value="1">
                            <label class="btn btn-lg btn-warning btn-outline-dark shadow" for="btnMotor">
                                <img src="img/icons/motorcycle.png" alt="">
                                Motor Listrik
                            </label>
                        </div>
                        <!-- setting 2 -->
                        <div class="col-lg-6 col-md-12">
                            <input type="radio" class="btn-check" name="type" id="btnSepeda" autocomplete="off" value="2">
                            <label class="btn btn-lg btn-warning btn-outline-dark shadow" for="btnSepeda">
                                <img src="img/icons/bicycle.png" alt="">
                                Sepeda Listrik
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-5">
                <h3>2. Tentukan Pengaturan Tiap Kriteria</h3>
                <div class="container w-50">
                    <!-- setting 1 -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <h6>Harga</h6>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <select class="form-select shadow" name="w_c1">
                                <option selected>Pilih kriteria</option>
                                <option value="4">Murah</option>
                                <option value="3">Sedang</option>
                                <option value="2">Cukup Mahal</option>
                                <option value="1">Mahal</option>
                            </select>
                        </div>
                    </div>
                    <!-- setting 2 -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <h6>Power</h6>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <select class="form-select shadow" name="w_c2">
                                <option selected>Pilih kriteria</option>
                                <option value="1">Kecil</option>
                                <option value="2">Sedang</option>
                                <option value="3">Besar</option>
                                <option value="4">Sangat Besar</option>
                            </select>
                        </div>
                    </div>
                    <!-- setting 3 -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <h6>Kecepatan Max</h6>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <select class="form-select shadow" name="w_c3">
                                <option selected>Pilih kriteria</option>
                                <option value="1">Lambat</option>
                                <option value="2">Biasa</option>
                                <option value="3">Cukup Cepat</option>
                                <option value="3">Cepat</option>
                            </select>
                        </div>
                    </div>
                    <!-- setting 4 -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <h6>Jarak Tempuh</h6>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <select class="form-select shadow" name="w_c4">
                                <option selected>Pilih kriteria</option>
                                <option value="1">Rendah</option>
                                <option value="2">Sedang</option>
                                <option value="3">Cukup Tinggi</option>
                                <option value="4">Tinggi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-5">
                <h3>3. Klik Tombol</h3>
                <button type="submit" class="btn btn-lg btn-warning shadow">Dapatkan Hasil</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>