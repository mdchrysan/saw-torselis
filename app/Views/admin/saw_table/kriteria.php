<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5 text-center">
    <h1 class="mb-3 page-title">Kriteria & Bobot Subkriteria</h1>
    <div class="card shadow border-warning w-25 mx-auto">
        <!-- <div class="card-body"> -->
        <table class="table table-sm table-borderless">
            <thead class="table-warning">
                <tr>
                    <th>Kode</th>
                    <th>Nama Kriteria</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>C1</td>
                    <td>Harga</td>
                    <td>Cost</td>
                </tr>
                <tr>
                    <td>C2</td>
                    <td>Power</td>
                    <td>Benefit</td>
                </tr>
                <tr>
                    <td>C3</td>
                    <td>Kecepatan Max</td>
                    <td>Benefit</td>
                </tr>
                <tr>
                    <td>C4</td>
                    <td>Jarak Tempuh</td>
                    <td>Benefit</td>
                </tr>
            </tbody>
        </table>
        <!-- </div> -->
    </div>
    <!-- Molis -->
    <div class="my-3">
        <h5 class="text-start">Bobot Subkriteria Motor Listrik</h5>
        <div class="row">
            <!-- Sub 1 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Harga (C1)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Murah</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Sedang</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Cukup Mahal</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Mahal</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Sub 2 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Power (C1)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kecil</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Sedang</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Besar</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Sangat Besar</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Sub 3 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Kecepatan Max (C3)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rendah</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Biasa</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Cukup Tinggi</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Tinggi</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Sub 4 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Jarak Tempuh (C4)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dekat</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Sedang</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Cukup Jauh</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Jauh</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Selis -->
    <div class="my-3">
        <h5 class="text-start">Bobot Subkriteria Sepeda Listrik</h5>
        <div class="row">
            <!-- Sub 1 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Harga (C1)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Murah</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Sedang</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Cukup Mahal</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Mahal</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Sub 2 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Power (C1)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kecil</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Sedang</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Besar</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Sangat Besar</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Sub 3 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Kecepatan Max (C3)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rendah</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Biasa</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Cukup Tinggi</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Tinggi</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Sub 4 -->
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow border-warning">
                    <table class="table table-sm table-borderless">
                        <thead class="table-warning">
                            <tr>
                                <th>Jarak Tempuh (C4)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dekat</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Sedang</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Cukup Jauh</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Jauh</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>