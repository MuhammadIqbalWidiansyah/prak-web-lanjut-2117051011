<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
    <div class="container">
        <div class="form-container" id="login-form">
            <h1>Data Diri</h1>
            <form action="<?=base_url('/user/store')?>" method="post">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
                <?php if (isset($validation) && $validation->hasError('nama')): ?>
                    <p class="error"><?= $validation->getError('nama') ?></p>
                <?php endif; ?>
                <label for="npm">NPM</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM">
                <?php if (isset($validation) && $validation->hasError('npm')): ?>
                    <p class="error"><?= $validation->getError('npm') ?></p>
                <?php endif; ?>
                <label for="id_kelas">Kelas</label>
                <select id="id_kelas" name="id_kelas">
                    <option value="" hidden>Pilih Kelas</option>
                    <?php
                        foreach ($kelas as $item) {
                            ?>
                                <option value="<?= $item['id'] ?>">
                                    <?= $item['nama_kelas'] ?>
                                </option>
                            <?php
                        }
                    ?>
                </select>
                <?php if (isset($validation) && $validation->hasError('id_kelas')): ?>
                    <p class="error"><?= $validation->getError('id_kelas') ?></p>
                <?php endif; ?>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>