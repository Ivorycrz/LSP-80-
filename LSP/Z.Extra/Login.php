<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:index.php");
}
include("koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == '' or $password  == '') {
        $err    .= "<li>Silahkan masukan username dan password</li>";
    }
    if (empty($err)) {
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != ($password)) {
            $err .= "<li>Akun Tidak Ditemukan </li>";
        }
    }

    if (empty($err)) {
        $role = $r1['role'];
        $sql1 = "select * from admin where role = '$role'";
        $q1 = mysqli_query($koneksi, $sql1);
        while ($r1 = mysqli_fetch_array($q1)) {
            $akses[] = $r1['role']; // table role
        }
        if (empty($akses)) {
            $err .= "<li> Kamu Belum Punya Akses Apapun!</li>";
        }
    }

    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_akses'] = $akses;

        header("location: login.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</head>

<body>

    <?php
    if ($err) {
        echo "<ul>$err</ul>";
    }
    ?>

    <div class="pembungkus">

        <div class="login">
            <h2>Login</h2>
        </div>
        <form action="" method="post" class="bakuga">
            <div class="form-group">
                <p>Username</p>
                <input type="text" value="" placeholder="Isikan Username..." name="username" class=" input bakuga form-control ">
            </div>
            <div class="form-group">
                <p>Password</p>
                <input type="password" placeholder="Isikan Password" name="password" class="form-control">
            </div>

            <div class="button"> <br>
                <button class="btn btn-primary" type="submit" value="Masuk Ke Sistem" name="login">Sign-In</button>
            </div>
            <p>Belum Punya akun?<a href="register.php">Daftar Disini</a></p>

        </form>

    </div>



</body>

</html>