<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5 text-center">
    <!-- return array 2d as one string to check jenis_kendaraan value -->
    <?php $value = array_column($produk, 'jenis_kendaraan')['1'] ?>
    <!-- conditional title -->
    <h1 class="mb-3 page-title">Daftar Produk <?= ($value == '1') ? "Motor" : "Sepeda"; ?> Listrik</h1>
    <a class="btn btn-warning mb-3" href="<?= base_url('/create-product'); ?>" role="button">Tambah Produk</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="table-responsive mb-3" style="border-radius: 5px;">
        <table class="table table-hover mb-0">
            <thead class="table-warning">
                <!-- 12 cols -->
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Baterai</th>
                    <th scope="col">Power Dinamo</th>
                    <th scope="col">Kecepatan Max</th>
                    <th scope="col">Jarak Tempuh</th>
                    <th scope="col">Daya Angkut</th>
                    <th scope="col" style="min-width: 200px;">Warna</th>
                    <th scope="col">Sistem Rem</th>
                    <th scope="col" style="min-width: 115px;">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                <?php foreach ($produk as $p) : ?>
                    <?php $pharga = number_format($p['harga']); ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <th scope="row">AM<?= $p['id']; ?></th>
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
                            <a role="button" class="btn bg-transparent" href="#"><i class="fa-solid fa-pen-to-square" style="color: black;"></i></a>
                            <!-- delete trigger -->
                            <a type="button" class="btn bg-transparent" href="#"><i class="fa-regular fa-trash-can" style="color: black;"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <?= $pager->links('produk', 'admin_pagination') ?>
</div>

<?= $this->endSection(); ?>