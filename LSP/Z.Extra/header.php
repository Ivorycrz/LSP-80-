<?php
session_start();
include("koneksi.php");
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div id="app">
        <nav>
            <ul>
                <li><a href="admin_depan.php">Halaman Depan</a></li>

                <?php if (in_array("user", $_SESSION['admin_akses'])) { ?>
                    <li><a href="guru.php">Halaman Guru</a></li>
                <?php } ?>

                <?php if (in_array("admin", $_SESSION['admin_akses'])) { ?>
                    <li><a href="siswa.php">Halaman Siswa</a></li>
                <?php } ?>

                <?php if (in_array("admin", $_SESSION['admin_akses'])) { ?>
                    <li><a href="admin_data.php">Admin Panel</a></li>
                <?php } ?>

                <li><a href="Logout.php">Logout</a></li>



            </ul>
        </nav>