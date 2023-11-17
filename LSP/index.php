<?php
require "./regisform/koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="./outer/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Buku.ku</title>
</head>

<body>

    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Buku<span>.Ku</span></a>
        <a class="soki" href="#home">Home</a>


        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="#">Tata Tertib & Panduan</a></li>
                <li><a class="dropdown-item" href="#">FAQ</a></li>
            </ul>
        </div>

        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Aktivitas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Galeri</a></li>
                <li><a class="dropdown-item" href="#">Berita</a></li>
                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
            </ul>
        </div>
        </div>

        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Genre List
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Buku Fiksi</a></li>
                <li><a class="dropdown-item" href="#">Buku Pelajaran</a></li>
                <li><a class="dropdown-item" href="#">Buku Biologi</a></li>
            </ul>
        </div>
        </div>



        <div class="navbar-extra">
            <a href="./Z.Extra/index.php" id="users"><i data-feather="users"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero section start -->
    <!-- Hero section end -->

    <!-- About section start -->
    <!-- About section end -->

    <!-- carousel img start -->



    <div class="product" id="product">

        <div class="product-card">
            <div class="product-image">
                <a href="./Aset novel/Comedy/rababi.pdf">
                    <img src="./LSP/makis.jpg" class="product-thumb" alt="">
                </a>
                <div class="product-info">
                    <h2 class="product-brand">Your Name</h2>
                    <h2 class="product-brand">Manga</h2>
                    <h2 class="product-brand">By Makoto Shinkai</h2>
                    <a href="./Z.Extra/Login.php">
                        <button class="Tombol" type="button">Pinjam Buku</button>
                    </a>
                </div>
            </div>

        </div>


        <div class="product-card">
            <div class="product-image">
                <a href="./Aset novel/Comedy/rabronto.pdf">
                    <img src="LSP/suzuu.jpg" class="product-thumb" alt="">
                </a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Suzume</h2>
                <h2 class="product-brand">Novel</h2>
                <h2 class="product-brand">By Makoto Shinkai</h2>
                <a href="./Z.Extra/index.php">
                    <button class="Tombol" type="button">Pinjam Buku</button>
                </a>
            </div>
        </div>


        <div class="product-card">
            <div class="product-image">
                <a href="./Aset novel/Comedy/radikus.pdf">
                    <img src="LSP/Untitled.jpg" class="product-thumb" alt="">
                </a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Your Name</h2>
                <h2 class="product-brand">Novel</h2>
                <h2 class="product-brand">By Makoto Shinkai</h2>
                <a href="./Z.Extra/index.php">
                    <button class="Tombol" type="button">Pinjam Buku</button>
                </a>

            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <a href="./Aset novel/Comedy/rakambing.pdf">
                    <img src="LSP/cuki.jpg" class="product-thumb" alt="">
                </a>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Weathering With You</h2>
                <h2 class="product-brand">Manga</h2>
                <h2 class="product-brand">By Makoto Shinkai</h2>
                <a href="./Z.Extra/index.php">
                    <button class="Tombol" type="button">Pinjam Buku</button>
                </a>
            </div>
        </div>





    </div>


    <!-- carousel img end  -->




    <!-- Footer start -->
    <footer id="footer">
        <div class="socials">
            <a href="https://www.instagram.com/mhmmdynnsthr/"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="send"></i></a>
            <a href="https://www.facebook.com/yannas.tihar.35"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#kategori">Kategori</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Yannas Tihar</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer end -->





    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>

</html>