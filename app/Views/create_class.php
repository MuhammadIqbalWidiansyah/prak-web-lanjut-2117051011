<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <nav class="navbar navbar-dark fixed-top" style="background-color:#8c5fb2;">
        <div class="container-fluid">
            <a class="navbar-brand">UTP Web Lanjut</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><i class="fa fa-home"></i> Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('/user') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> Pengguna
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="<?= base_url('/user') ?>"><i class="fa fa-bars"></i> Daftar Pengguna</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/user/create') ?>"><i class="fa fa-plus"></i> Tambah Pengguna</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="<?= base_url('/class') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-chalkboard"></i> Kelas
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item " href="<?= base_url('/class') ?>"><i class="fa fa-bars"></i> Daftar Kelas</a></li>
                    <li><a class="dropdown-item active" href="<?= base_url('/class/create') ?>"><i class="fa fa-plus"></i> Tambah Kelas</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>

    <div class="container-create">
        <div class="form-container" id="login-form">
            <h1>Data Kelas</h1>
            <form action="<?=base_url('/class/store')?>" method="post" enctype="multipart/form-data">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas">
                <?php if (isset($validation) && $validation->hasError('nama_kelas')): ?>
                    <p class="error"><?= $validation->getError('nama_kelas') ?></p>
                <?php endif; ?>
                <button class="btn-submit" type="submit">Tambah</button>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>