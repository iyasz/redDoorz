<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/img/logo/redicon.webp">
    <title>RedDoorz - <?= isset($title) ? $title : 'Hotel Murah Mulai Dari 99rb Hanya di RedDoorz!' ?></title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
</head>

<body>
    <style>
        .navbar {
            z-index: 3;
        }
    </style>
    <div class=" position-absolute top-0 start-0 end-0 navbar navbar-expand-lg text-white bg-transparent shadow-sm">
        <div class="container ">
            <a class="navbar-brand" href="index.php?page=home"><img class="img-fluid" src="assets/img/logo/reddoorz.png" width="135px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link rounded-pill fw-600 px-4 text-white py-2" href="index.php?page=register">Gabung | Daftar</a>
                </div>
            </div>
        </div>
    </div>