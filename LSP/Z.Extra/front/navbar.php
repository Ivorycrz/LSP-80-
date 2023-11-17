<?php

session_start();


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <!-- End Font -->



    <!-- Feather Icons -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link href="style.css" rel="stylesheet">

    <title>Buku.ku</title>
</head>

<body>

    <!-- Navbar start -->
    Navbar start
    <nav class="navbar">
        <a href="#" class="navbar-logo">Buku<span>.Ku</span></a>
        <a class="soki" href="../index.php">Home</a>


        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="tatib.php">Tata Tertib & Panduan</a></li>
                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
            </ul>
        </div>

        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Aktivitas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
                <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                <li><a class="dropdown-item" href="pengumuman.php">Pengumuman</a></li>
            </ul>
        </div>
        </div>

        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Genre List
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="fiksi.php">Buku Fiksi</a></li>
                <li><a class="dropdown-item" href="pelajaran.php">Buku Pelajaran</a></li>
                <li><a class="dropdown-item" href="biologi.php">Buku Biologi</a></li>
            </ul>
        </div>
        </div>


        
        <?php if (in_array("admin", $_SESSION['admin_akses'])) { ?>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../BE-BUKU/">Update Buku</a></li>
                    <li><a class="dropdown-item" href="../user.php">Daftar Pengguna</a></li>
                    <li><a class="dropdown-item" href="../">Daftar Peminjaman</a></li>
                </ul>
            </div>
        <?php } ?>



        <div class="navbar-extra">
            <a href="./Z.Extra/index.php" id="users"><i data-feather="users"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

</body>


