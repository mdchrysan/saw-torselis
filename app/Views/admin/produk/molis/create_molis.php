<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5">
    <h1 class="mb-3 text-center">Form Tambah Produk</h1>
    <form class="w-50 mx-auto" action="/save-produk" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <!-- row 1: nama & baterai -->
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12">
                <label for="namaProduk" class="form-label">Nama</label>
                <input type="text" class="form-control form-input" id="namaProduk" name="nama" value="" autofocus>
            </div>
            <div class="col-lg-6 col-md-12">
                <label for="bateraiProduk" class="form-label">Baterai</label>
                <input type="text" class="form-control form-input" id="bateraiProduk" name="baterai" value="">
            </div>
        </div>
        <!-- row 2: harga & daya angkut -->
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12">
                <label for="hargaProduk" class="form-label">Harga (Rp)</label>
                <input type="number" class="form-control form-input" id="hargaProduk" name="harga" value="">
            </div>
            <div class="col-lg-6 col-md-12">
                <label for="angkutProduk" class="form-label">Daya Angkut (kg)</label>
                <input type="number" class="form-control form-input" id="angkutProduk" name="dayaangkut" value="">
            </div>
        </div>
        <!-- row 3: power & warna -->
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12">
                <label for="powerProduk" class="form-label">Power (watt)</label>
                <input type="number" class="form-control form-input" id="powerProduk" name="power" value="">
            </div>
            <div class="col-lg-6 col-md-12">
                <label for="warnaProduk" class="form-label">Warna</label>
                <input type="text" class="form-control form-input" id="warnaProduk" name="warna" value="">
            </div>
        </div>
        <!-- row 4: kecepatan & rem -->
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12">
                <label for="kecepatanProduk" class="form-label">Kecepatan Max (km/h)</label>
                <input type="number" class="form-control form-input" id="kecepatanProduk" name="kecepatan" value="">
            </div>
            <div class="col-lg-6 col-md-12">
                <label for="remProduk" class="form-label">Sistem Rem</label>
                <input type="text" class="form-control form-input" id="remProduk" name="rem" value="">
            </div>
        </div>
        <!-- row 5: jarak & jenis -->
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12">
                <label for="jarakProduk" class="form-label">Jarak Tempuh (km)</label>
                <input type="number" class="form-control form-input" id="jarakProduk" name="jarak" value="">
            </div>
            <div class="col-lg-6 col-md-12">
                <label for="jenisProduk" class="form-label">Jenis Kendaraan</label>
                <select class="form-select" id="jenisProduk" name="jenis" aria-label="Jenis kendaraan">
                    <option value="1" selected>Motor Listrik</option>
                    <option value="2">Sepeda Listrik</option>
                </select>
            </div>
        </div>
        <!-- row 6: gambar & preview -->
        <div class="row mb-3">
            <div class="col-lg-6 col-md-12">
                <label for="gambarProduk" class="form-label">Gambar</label>
                <input type="file" class="form-control form-input" id="gambarProduk" name="gambar" value="">
            </div>
            <div class="col-lg-6 col-md-12">
                <label for="previewProduk" class="form-label">Gambar</label>
                <!-- <img src="/img/default.png" alt="Gambar Produk" class="img-thumbnail img-preview" id="previewProduk"> -->
                <div style="background-color: orange;" id="previewProduk">Preview disini</div>
            </div>
        </div>
        <div class="row mb-3 text-center">
            <div class="col-12">
                <button type="submit" class="btn btn-warning">Tambah Produk</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>