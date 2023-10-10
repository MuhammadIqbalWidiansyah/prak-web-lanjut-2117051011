<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <style>
        .rounded-image {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            /* margin-bottom: 50px; */
        }
        .container {
            /* margin-top: 50px; */
            align-items: center;
            justify-content: center;
            display: grid;
        }
        /* .btn {
            margin-bottom: 25px;
        } */
    </style>
</head>
<body>
    <div class="container">
        <img src="<?= $user['foto'] ?? base_url('/assets/img/default_img.png') ?>" class="rounded-image">
        <button type="button" class="btn btn-secondary"><?=$user['nama']?></button>
        <button type="button" class="btn btn-secondary"><?=$user['npm']?></button>
        <button type="button" class="btn btn-secondary"><?=$user['nama_kelas']?></button>
    </div>
</body>
<?= $this->endSection() ?>