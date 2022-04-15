<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $metaContent; ?> - SMA Negeri 29 Banyuasin">
    <meta name="author" content="Samsul Bari - Operator Sekolah">
    <title><?php echo $title; ?> - SMA Negeri 29 Banyuasin</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Begin of Navigations -->
    <nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('home') ?>">SMAN 29 Banyuasin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('#home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('#profil'); ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('#akademik') ?>">Akademik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('#kontak'); ?>">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tas'); ?>">TU/TAS App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pengumuman'); ?>">Pengumuman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navigations -->
    <!-- Begin of Content -->
    <?= $this->renderSection('content'); ?>
    <!-- End of Content -->
    <!-- Footer Debug Information + Copyrights -->
    <footer class="text-muted text-center">
        <div class="container">
            <p class="mb-1">
                &copy; Copyright <?= date('Y') ?> SMAN 1 Sumber Marga Telang | Develop by
                <a href="https://instagram.com/ariewhitehat" class="text-reset"><span class="text-danger"><i class="bi bi-instagram"></i></span> Samsul Bari</a>
            </p>
            <ul class="list-inline no-margin">
                <li class="list-inline-item">
                    <a href="https://my.idcloudhost.com/aff.php?aff=4257" class="text-reset"><i class="bi bi-hdd-rack text-primary"></i> Server</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://opsekolah.com" class="text-reset"><i class="bi bi-megaphone text-warning"></i> Support</a>
                </li>
                <li class="list-inline-item">
                    <a href="mailto:contact.samsulbari@gmail.com" class="text-reset"><i class="bi bi-bug text-danger"></i> Report Bug</a>
                </li>
                <li class="list-inline-item">
                    <p>Page rendered in {elapsed_time} seconds</p>
                </li>
                <li class="list-inline-item">
                    <p>Environment: <?= ENVIRONMENT ?></p>
                </li>
            </ul>
        </div>
    </footer>
    <!-- End of Footer-->
    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>
<!-- Jayalah Indonesiaku  -->