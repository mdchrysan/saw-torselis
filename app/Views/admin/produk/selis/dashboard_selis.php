<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-3 text-center">
    <h1 class="mb-3">Daftar Produk Sepeda Listrik</h1>
    <a class="btn btn-warning mb-3" href="<?= base_url('/create-produk'); ?>" role="button">Tambah Produk</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-warning">
                <!-- 12 cols -->
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Baterai</th>
                    <th scope="col">Power Dinamo</th>
                    <th scope="col">Kecepatan Max</th>
                    <th scope="col">Jarak Tempuh</th>
                    <th scope="col">Daya Angkut</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Sistem Rem</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produk as $p) : ?>
                    <?php $pharga = number_format($p['harga']); ?>
                    <tr>
                        <th scope="row">AS<?= $p['id']; ?></th>
                        <td><img src="/img/produk/<?= $p['gambar']; ?>" alt="Gambar Kendaraan" style="width: 50px;"></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $pharga; ?></td>
                        <td><?= $p['kap_baterai']; ?></td>
                        <td><?= $p['power']; ?></td>
                        <td><?= $p['kecepatan_max']; ?></td>
                        <td><?= $p['jarak_tempuh']; ?></td>
                        <td><?= $p['daya_angkut']; ?></td>
                        <td><?= $p['warna']; ?></td>
                        <td><?= $p['sistem_rem']; ?></td>
                        <td>
                            <!-- edit button -->
                            <a role="button" class="btn bg-transparent" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                            <!-- delete trigger -->
                            <button type="button" class="btn bg-transparent"><i class="fa-regular fa-trash-can"></i></button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>