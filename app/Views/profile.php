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
                    <a class="nav-link active dropdown-toggle" href="<?= base_url('/user') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> Pengguna
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="<?= base_url('/user') ?>"><i class="fa fa-bars"></i> Daftar Pengguna</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/user/create') ?>"><i class="fa fa-plus"></i> Tambah Pengguna</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('/class') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-chalkboard"></i> Kelas
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="<?= base_url('/class') ?>"><i class="fa fa-bars"></i> Daftar Kelas</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/class/create') ?>"><i class="fa fa-plus"></i> Tambah Kelas</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>

</head>
<body>
    <div class="container-profile">
        <div class="form-profile">
            <aside class="profile-card">
                <header>
                    <img src="<?= $user['foto'] ?? base_url('/assets/img/default_img.png') ?>" class="rounded-image">
                    </a>

                    <h1>
                        <?=$user['nama']?>
                    </h1>

                    <h2>
                        <?=$user['npm']?>
                    </h2>

                    <h2>
                        <?=$user['nama_kelas']?>
                    </h2>
                </header>

                <div class="profile-bio">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ipsum libero, fermentum in eleifend porttitor, consectetur ut lectus. Ut in bibendum dolor. Nulla pharetra, ante.
                    </p>
                </div>

                <ul class="profile-social-links">
                    <li>
                    <a target="_blank" href="https://www.facebook.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://twitter.com">
                        <i class="fab fa-instagram"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://github.com">
                        <i class="fab fa-github"></i>
                    </a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
</body>
<?= $this->endSection() ?>