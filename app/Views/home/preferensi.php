<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5 text-center">
    <h1 class="mb-3 page-title">Tabel Preferensi</h1>
    <table class="table table-sm table-borderless">
        <thead class="table-warning">
            <tr>
                <th>Nama</th>
                <th>V1</th>
                <th>V2</th>
                <th>V3</th>
                <th>V4</th>
                <th>V</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($preferensi as $Vr) : ?>
                <tr>
                    <th scope="row"><?= $Vr['nama']; ?></th>
                    <td><?= number_format($Vr['V1'], 5, '.', ''); ?></td>
                    <td><?= number_format($Vr['V2'], 5, '.', ''); ?></td>
                    <td><?= number_format($Vr['V3'], 5, '.', ''); ?></td>
                    <td><?= number_format($Vr['V4'], 5, '.', ''); ?></td>
                    <td><?= number_format($Vr['Vt'], 5, '.', ''); ?></td>
                    <td><?= $Vr['rank']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?= $this->endSection(); ?>