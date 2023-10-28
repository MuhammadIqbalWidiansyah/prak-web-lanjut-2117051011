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
                  <li><a class="dropdown-item active" href="<?= base_url('/class') ?>"><i class="fa fa-bars"></i> Daftar Kelas</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/class/create') ?>"><i class="fa fa-plus"></i> Tambah Kelas</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="container-list">
        <div class="table-responsive mt-4">
            <h1>Daftar Kelas</h1>
            <table class="table align-middle table-dark text-center">
              <a href="<?= base_url('/class/create') ?>">
                <button class="btn-add" >Tambah Kelas</button>
              </a>
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nextId = 1;
                        foreach($class as $kelas) {
                    ?>
                    <tr>
                        <td><?= $nextId++ ?></td>
                        <td><?= $kelas['nama_kelas'] ?></td>
                        <td>
                            <a href="<?= base_url('class/' . $kelas['id'] . '/edit') ?>">
                                <button class="btn btn-warning"><i class="fa fa-pen" style="color: white;"></i></button>
                            </a>
                            <form action="<?= base_url('class/' . $kelas['id']) ?>" method="post" style="display: inline-block">
                                <input type="hidden" name="_method" value="delete">
                                <?= csrf_field() ?>
                                <a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete();"><i class="fa fa-trash"></i></button>
                                </a>
                            </form>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete() {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if (konfirmasi) {
                alert("Data telah dihapus.");
                return true;
            } else {
                alert("Penghapusan dibatalkan.");
                return false;
            }
        }
    </script>
<?= $this->endSection() ?>