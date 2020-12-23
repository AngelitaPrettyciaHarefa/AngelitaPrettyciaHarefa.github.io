<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>List Karyawan Perusahaan</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">TAS Pemrograman Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a  class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=homePerusahaan">Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=homeKaryawan">Karyawan</a>
                </li>
            </ul>
        </div>
    </nav>
    <p></p>

    <?php
    
    $page = $_GET['page'] ?? ''; 
    $halaman = 'View/home.php';
    switch ($page){
        case 'homePerusahaan':
            $halaman = 'View/perusahaan/home.php';
        break;
        case 'registerPerusahaan':
            $halaman = 'View/perusahaan/formTambah.php';
        break;
        case 'editPerusahaan':
            $halaman = 'View/perusahaan/formUbah.php';
        break;
        case 'deletePerusahaan':
            $halaman = 'View/perusahaan/konfirmasiHapus.php';
        break;
        case 'homeKaryawan':
            $halaman = 'View/karyawan/home.php';
        break;
        case 'registerKaryawan':
            $halaman = 'View/karyawan/formTambah.php';
        break;
        case 'editKaryawan':
            $halaman = 'View/karyawan/formUbah.php';
        break;
        case 'deleteKaryawan':
            $halaman = 'View/karyawan/konfirmasiHapus.php';
        break;
    }
    include($halaman);
    ?>
    
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>