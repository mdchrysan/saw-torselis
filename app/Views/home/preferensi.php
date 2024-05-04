<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5 text-center">
    <h1 class="mb-3 page-title">Tabel Preferensi</h1>
    <table class="table table-sm table-borderless">
        <thead class="table-warning">
            <tr>
                <th>Kode</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
            </tr>
        </thead>
        <tbody>
            <!-- <--?php foreach ($produk as $p) : ?>
                <tr>
                    <td><--?= ($p['jenis_kendaraan'] = '1') ? "AM" : "AS"; ?><--?= $p['id']; ?></td> -->
            <!-- show r_m to 5 decimal places -->
            <!-- <td><-?= number_format($p['v1'], 5, '.', ''); ?-></td>
                    <td><-?= number_format($p['v2'], 5, '.', ''); ?-></td>
                    <td><-?= number_format($p['v3'], 5, '.', ''); ?-></td>
                    <td><-?= number_format($p['v4'], 5, '.', ''); ?-></td>
                    <td><-?= number_format($p['vt'], 5, '.', ''); ?-></td> -->
            <!-- </tr>
            <--?php endforeach ?> -->
            <?php for ($i = 1; $i < 21; $i++) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>halo</td>
                    <td>halo</td>
                    <td>bdg</td>
                    <td>ibkt</td>
                    <td>prgn</td>
                </tr>
            <?php endfor ?>
        </tbody>
    </table>

    <?= $this->endSection(); ?>