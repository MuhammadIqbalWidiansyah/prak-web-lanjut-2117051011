<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <div class="table-responsive mt-4">
        <h1>Daftar Pengguna</h1>
        <table class="table align-middle table-dark">
            <a href="<?= base_url('/user/create') ?>" role="button" class="btn btn-primary">Tambah Data</a>
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nextId = 1;
                    foreach($users as $user) {
                ?>
                <tr>
                    <td><?= $nextId++ ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <a href="<?= base_url('user/' . $user['id']) ?>" class="button">Detail</a>
                        <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <?= csrf_field() ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection() ?>