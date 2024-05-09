<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5 text-center">
    <h1 class="mb-3 page-title">Bobot Produk per Kriteria</h1>
    <div class="row">
        <!-- Molis -->
        <div class="col-lg-6 my-3">
            <div class="card shadow border-warning">
                <div class="card-header text-start">Nilai Alternatif Motor Listrik</div>
                <div class="card-body">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Kode</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($molis as $m) : ?>
                                <tr>
                                    <th scope="row">AM<?= $m['id']; ?></th>
                                    <td><?= $m['harga']; ?></td>
                                    <td><?= $m['power']; ?></td>
                                    <td><?= $m['kecepatan_max']; ?></td>
                                    <td><?= $m['jarak_tempuh']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <?= $pager1->links('molis', 'admin_pagination') ?>
                </div>
            </div>
        </div>
        <!-- Selis -->
        <div class="col-lg-6 my-3">
            <div class="card shadow border-warning">
                <div class="card-header text-start">Nilai Alternatif Sepeda Listrik</div>
                <div class="card-body">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Kode</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($selis as $s) : ?>
                                <tr>
                                    <th scope="row">AS<?= $s['id']; ?></th>
                                    <td><?= $s['harga']; ?></td>
                                    <td><?= $s['power']; ?></td>
                                    <td><?= $s['kecepatan_max']; ?></td>
                                    <td><?= $s['jarak_tempuh']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <?= $pager2->links('selis', 'admin_pagination') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>