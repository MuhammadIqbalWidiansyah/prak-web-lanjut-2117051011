<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
    <form action="<?=base_url('/user/store')?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nama">NPM:</label>
        <input type="text" id="npm" name="npm" required><br>

        <label for="nama">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>