<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="form-container" id="login-form">
            <h1>Data Diri</h1>
            <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put">
                <?= csrf_field() ?>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= $user['nama'] ?>" placeholder="Masukkan Nama">
                <?php if (isset($validation) && $validation->hasError('nama')): ?>
                    <p class="error"><?= $validation->getError('nama') ?></p>
                <?php endif; ?>
                <label for="npm">NPM</label>
                <input type="text" id="npm" name="npm" value="<?= $user['npm'] ?>" placeholder="Masukkan NPM">
                <?php if (isset($validation) && $validation->hasError('npm')): ?>
                    <p class="error"><?= $validation->getError('npm') ?></p>
                <?php endif; ?>
                <label for="id_kelas">Kelas</label>
                <select id="id_kelas" name="kelas">
                    <?php
                        foreach ($kelas as $item) {
                            ?>
                                <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                                    <?= $item['nama_kelas'] ?>
                                </option>
                            <?php
                        }
                    ?>
                </select>
                <label for="foto">Foto</label>
                <img src="<?= $user['foto'] ?? base_url('/assets/img/default_img.png') ?>" alt="" style="width: 250px;">
                <input type="file" id="foto" name="foto">
                <?php if (isset($validation) && $validation->hasError('kelas')): ?>
                    <p class="error"><?= $validation->getError('kelas') ?></p>
                <?php endif; ?>
                <button type="submit">Perbarui</button>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>