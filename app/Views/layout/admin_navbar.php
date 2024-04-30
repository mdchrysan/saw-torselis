<nav class="navbar shadow bg-warning fixed-top navbar-expand-lg">
    <div class="container-fluid mx-5">
        <a class="navbar-brand mb-0 h1" href="#"><i>T O R S E L I S</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- menu produk -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('/molis-list'); ?>">Motor Listrik</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/selis-list'); ?>">Sepeda Listrik</a></li>
                        </ul>
                    </li>
                    <!-- menu tabel -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tabel
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('/kriteria'); ?>">Kriteria & Bobot Subkriteria</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/bobot-produk'); ?>">Bobot Produk</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/nilai-normalisasi'); ?>">Nilai Normalisasi</a></li>
                        </ul>
                    </li>
                    <!-- menu logout -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>