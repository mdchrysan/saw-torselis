<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center m-auto">
    <form action="" method="get">
        <div class="m-5">
            <h3>1. Pilih Jenis Kendaraan</h3>
            <div class="container w-50">
                <div class="row mb-3">
                    <!-- setting 1 -->
                    <div class="col-lg-6 col-md-12">
                        <input type="radio" class="btn-check" name="options-outlined" id="btnMotor" autocomplete="off" value="1">
                        <label class="btn btn-outline-warning" for="btnMotor">
                            <img src="img/icons/motorcycle.png" alt="">
                            Motor Listrik
                        </label>
                    </div>
                    <!-- setting 2 -->
                    <div class="col-lg-6 col-md-12">
                        <input type="radio" class="btn-check" name="options-outlined" id="btnSepeda" autocomplete="off" value="2">
                        <label class="btn btn-outline-warning" for="btnSepeda">
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
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <p>Harga</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <select class="form-select">
                            <option selected>Pilih kriteria</option>
                            <option value="1">Murah</option>
                            <option value="2">Sedang</option>
                            <option value="3">Mahal</option>
                        </select>
                    </div>
                </div>
                <!-- setting 2 -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <p>Power</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <select class="form-select">
                            <option selected>Pilih kriteria</option>
                            <option value="1">Rendah</option>
                            <option value="2">Sedang</option>
                            <option value="3">Tinggi</option>
                        </select>
                    </div>
                </div>
                <!-- setting 3 -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <p>Kecepatan Max</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <select class="form-select">
                            <option selected>Pilih kriteria</option>
                            <option value="1">Lambat</option>
                            <option value="2">Sedang</option>
                            <option value="3">Cepat</option>
                        </select>
                    </div>
                </div>
                <!-- setting 4 -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12">
                        <p>Jarak Tempuh</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <select class="form-select">
                            <option selected>Pilih kriteria</option>
                            <option value="1">Dekat</option>
                            <option value="2">Sedang</option>
                            <option value="3">Jauh</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-5">
            <h3>3. Klik Tombol</h3>
            <button type="submit" class="btn btn-warning">Dapatkan Hasil</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>