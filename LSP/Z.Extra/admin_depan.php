<?php
include("header.php");

$nama = $_SESSION['admin_username'];

?>

<h1>Halaman Depan</h1>
<?php echo "Hai $nama Selamat Datang Dihalaman Depan"; ?>

<?php
include("footer.php");
?>