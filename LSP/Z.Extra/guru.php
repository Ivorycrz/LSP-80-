<?php
session_start();
$nama = $_SESSION['admin_username'];

if (!in_array("guru", $_SESSION['admin_akses'])) {
    echo "Kamu Tidak Punya Akses";
    include("footer.php");
    exit();
}
?>

<h1>Halaman Guru</h1>
<?php echo "Hai $nama Selamat Datang Dihalaman Depan"; ?>


<?php


include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php
    require "navbar_admin.php";
    ?>



    <h1 class="Warng">Page ini masih dalam konstruksi 👷⚒️</h1>

    <img src="../LSP/loli.gif" alt="">

    <h2> <a href="./Logout.php">Logout</a></h2>











</body>

</html>