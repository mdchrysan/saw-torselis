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
                                <th>Harga (Rp)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>> 20jt</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>15 - 20jt</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>10 - 15jt</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>
                                    <= 10jt</td>
                                <td>5</td>
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
                                <th>Power (watt)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <= 1000</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>1000 - 1500</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>1500 - 2200</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>> 2200</td>
                                <td>5</td>
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
                                <th>Kec. (km/h)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <= 55</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>55 - 60</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>65 - 70</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>> 70</td>
                                <td>5</td>
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
                                <th>Jarak Tempuh (km)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <= 60</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>60 - 65</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>65 - 80</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>> 80</td>
                                <td>5</td>
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
                                <th>Harga (Rp)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>x - y</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>y - z</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>z</td>
                                <td>5</td>
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
                                <th>Power (watt)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>x - y</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>y - z</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>z</td>
                                <td>5</td>
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
                                <th>Kec. (km/h)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>x - y</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>y - z</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>z</td>
                                <td>5</td>
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
                                <th>Jarak Tempuh (km)</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>x - y</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>y - z</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>z</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>