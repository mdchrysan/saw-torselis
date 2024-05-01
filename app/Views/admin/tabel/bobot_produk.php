<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5 p-5 text-center">
    <h1 class="mb-3">Bobot Produk per Kriteria</h1>
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
                            <tr>
                                <td>AM1</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                            </tr>
                        </tbody>
                    </table>
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
                            <tr>
                                <td>AM1</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                                <td>x</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>