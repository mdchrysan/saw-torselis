<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-3 text-center">
    <h1 class="mb-3">Daftar Produk Motor Listrik</h1>
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
                <tr>
                    <th scope="row">AM1</th>
                    <td><img src="/img/dummy-img.jpg" alt="Gambar Kendaraan" style="width: 50px;"></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>
                        <!-- edit button -->
                        <a role="button" class="btn bg-transparent" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- delete trigger -->
                        <button type="button" class="btn bg-transparent"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">AM2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                    <td>
                        <!-- edit button -->
                        <a role="button" class="btn bg-transparent" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- delete trigger -->
                        <button type="button" class="btn bg-transparent"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">AM3</th>
                    <td>Larry</td>
                    <td>Siput</td>
                    <td>@sbsp</td>
                    <td>Larry</td>
                    <td>Siput</td>
                    <td>@sbsp</td>
                    <td>Larry</td>
                    <td>Siput</td>
                    <td>@sbsp</td>
                    <td>Larry</td>
                    <td>
                        <!-- edit button -->
                        <a role="button" class="btn bg-transparent" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- delete trigger -->
                        <button type="button" class="btn bg-transparent"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>