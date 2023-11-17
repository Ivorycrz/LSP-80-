<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .faq {
    width: 80%;
    margin: 0 auto;
}

.question {
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
}

.question h3 {
    font-size: 18px;
}

.question p {
    font-size: 16px;
}
</style>
<body>

<nav>
<?php 
    require "navbar.php";
    ?>
</nav>

<br>
<br>
<br>
<br>


<div class="faq">
<h2 style="font-weight: bold;">Frequently Asked Questions</h2>

    <div class="question">
        <h3 style="font-weight: bold;">Apakah Web Buku.ku</h3>
        <p style="font-weight: 300;">Website perpustakaan adalah platform digital yang memungkinkan pengguna untuk mengakses berbagai sumber daya dan layanan yang tersedia di perpustakaan</p>
    </div>
    <div class="question">
        <h3 style="font-weight: bold;">Bagaimana Kita Tau Informasi Buku Ini</h3>
        <p style="font-weight: 300;">Website ini menyediakan informasi tentang koleksi buku, jadwal acara, peminjaman buku, pencarian, dan banyak</p>
    </div>    <div class="question">
        <h3 style="font-weight: bold;">Kenapa Website Ini Dibuat</h3>
        <p style="font-weight: 300;">Dengan website perpustakaan, pengguna dapat dengan mudah mengakses informasi yang dibutuhkan, memesan buku, dan melakukan peminjaman secara online.</p>
    </div>
    <!-- tambahkan lebih banyak pertanyaan jika diperlukan -->
</div>

    
</body>
</html>