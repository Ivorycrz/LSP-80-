<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:index.php");
}
include("koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['role'];
    $gender = $_POST['gender'];


    $select = " select * from admin where username = '$username' && password = '$password'";

    $result = mysqli_query($koneksi, $select);

    if(mysqli_num_rows($result) > 0){
        $error [] = 'user already exsist';
    }

    else {
        if ($password != $password){
        $error [] = 'password not match';
            
        }
        else{
            $insert = "insert into admin(username, password, gender, role) values ('$username', '$password', '$gender', '$user_type')";
            mysqli_query($koneksi, $insert);
            header("location:login.php");
        }
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
            <h2>Register</h2>
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

            <select name="role" id="">
        <option >Role</option>
        <option value="user">Guru</option>
        <option value="user">Siswa</option>
    </select>

    
    <select name="gender" id="">
        <option >Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

            <div class="button"> <br>
                <button class="btn btn-primary" type="submit" value="Masuk Ke Sistem" name="submit">Register</button>
            </div>

        </form>

    </div>



</body>

</html>