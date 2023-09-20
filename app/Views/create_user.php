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
                <input type="text" id="nama" name="nama" required>
                <label for="npm">NPM</label>
                <input type="text" id="npm" name="npm" required>
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" required>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>