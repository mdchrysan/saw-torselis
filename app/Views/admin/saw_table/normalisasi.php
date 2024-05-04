<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5 text-center">
    <h1 class="mb-3 page-title">Tabel Normalisasi</h1>
    <div class="row">
        <!-- Molis -->
        <div class="col-lg-6 my-3">
            <div class="card shadow border-warning">
                <div class="card-header text-start">Nilai Normalisasi Motor Listrik</div>
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
                                    <th scope="row"><?= ($m['jenis_kendaraan'] = '1') ? "AM" : "AS"; ?><?= $m['id']; ?></th>
                                    <!-- show r_m to 4 decimal places -->
                                    <td><?= number_format($m['r_m1'], 4, '.', ''); ?></td>
                                    <td><?= number_format($m['r_m2'], 4, '.', ''); ?></td>
                                    <td><?= number_format($m['r_m3'], 4, '.', ''); ?></td>
                                    <td><?= number_format($m['r_m4'], 4, '.', ''); ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Selis -->
        <div class="col-lg-6 my-3">
            <div class="card shadow border-warning">
                <div class="card-header text-start">Nilai Normalisasi Sepeda Listrik</div>
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
                                    <th scope="row"><?= ($s['jenis_kendaraan'] = '2') ? "AS" : "AM"; ?><?= $s['id']; ?></th>
                                    <!-- show r_s to 4 decimal places -->
                                    <td><?= number_format($s['r_s1'], 4, '.', ''); ?></td>
                                    <td><?= number_format($s['r_s2'], 4, '.', ''); ?></td>
                                    <td><?= number_format($s['r_s3'], 4, '.', ''); ?></td>
                                    <td><?= number_format($s['r_s4'], 4, '.', ''); ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>