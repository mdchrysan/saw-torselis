<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top shadow">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="#"><i>T O R S E L I S</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAdmin" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="d-flex justify-content-end"></div> -->
        <div class="collapse navbar-collapse" id="navbarAdmin">
            <ul class="navbar-nav ml-auto">
                <!-- menu produk -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarProdukAdmin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produk
                    </a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="navbarProdukAdmin">
                        <a class="dropdown-item" href="<?= base_url('/molis-list'); ?>">Motor Listrik</a>
                        <a class="dropdown-item" href="<?= base_url('/selis-list'); ?>">Sepeda Listrik</a>
                    </div>
                </li>
                <!-- menu tabel -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarTabelAdmin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tabel
                    </a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="navbarTabelAdmin">
                        <a class="dropdown-item" href="<?= base_url('/kriteria'); ?>">Kriteria & Bobot Subkriteria</a>
                        <a class="dropdown-item" href="<?= base_url('/bobot-produk'); ?>">Bobot Produk</a>
                        <a class="dropdown-item" href="<?= base_url('/nilai-normalisasi'); ?>">Nilai Normalisasi</a>
                    </div>
                </li>
                <!-- menu logout -->
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/logout'); ?>">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>