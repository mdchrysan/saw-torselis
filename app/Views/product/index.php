<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-3 text-center">
    <h1 class="mb-3">Daftar Produk</h1>
    <div class="btn-group" role="group" aria-label="Button Jenis Produk">
        <a href="/products/motor-listrik" class="btn btn-warning">Motor Listrik</a>
        <a href="/products/sepeda-listrik" class="btn btn-warning">Sepeda Listrik</a>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 p-4">
        <?php $i = 1; ?>
        <?php foreach ($produk as $p) : ?>
            <!-- start console test -->
            <script>
                var i = "<?php echo $i ?>"
                var p = "<?php echo $p['nama']; ?>"
                console.log("P" + i + ": " + p);
                <?php echo $i++ ?>
            </script>
            <!-- end console test -->
            <div class="col mb-3">
                <div class="card mx-auto" style="width: 15rem;">
                    <img src="/img/produk/<?= $p['gambar']; ?>" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body">
                        <h5 class="card-title"><?= $p['nama']; ?></h5>
                        <a href="/products/<?= $p['slug']; ?>" class="btn btn-outline-warning">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>