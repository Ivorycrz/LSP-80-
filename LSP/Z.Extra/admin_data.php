<?php
session_start();




if (!in_array("crud", $_SESSION['admin_akses'])) {
    echo "Kamu Tidak Punya Akses";
    include("footer.php");
    exit();
}


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