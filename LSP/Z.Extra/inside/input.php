<?php

include("../koneksi.php");

if (!in_array("crud", $_SESSION['admin_akses'])) {
    echo "Kamu Tidak Punya Akses";
    include("../footer.php");
    exit();
}

$username   = "";
$password   = "";
$gender     = "";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</head>

<body>



    <div class="pembungkus">

        <div class="login">
            <h2>Tambah Pengguna</h2>
        </div>
        <form action="" method="post" class="bakuga">
            <div class="form-group">
                <p>Username</p>
                <input type="text" value="<?php echo $username ?>" placeholder="Isikan Username..." name="username" class="form-control ">
            </div>

            <div class="form-group">
                <p>Password</p>
                <input type="password" value="<?php echo $password ?>" placeholder="Isikan Password" name="password" class="form-control">
            </div>

            <label for="gender" class="form-group mt-2">Gender:</label>

            <select id="gender" class="form-control">
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="Laki-Laki" <?php if ($gender == "Laki-Laki") echo "selected" ?>>Laki-Laki</option>
                <option value="Perempuan" <?php if ($gender == "Perempuan") echo "selected" ?>>Perempuan</option>
            </select>

            <div class="button"> <br>
                <button class="btn btn-primary" type="submit" value="Masuk Ke Sistem" name="login">Daftarkan</button>
            </div>

            <div class="text teks">
                <p>Kembali ke Daftar Pengguna <a href="../user.php"> <span>Kembali</span></a></p>
            </div>
        </form>

    </div>



</body>

</html>