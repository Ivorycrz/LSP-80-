<?php

include ("../koneksi.php");

function pinjam(){
    global $koneksi;

    $name = $_POST["name"];
    $judul = $_POST["judul"];
    $status = $_POST["status"];

    $pengembalian = $_POST["pengembalian"];

    $query = "insert into buku (nama_peminjam, judul_buku,status, pengembalian) values('$name', '$judul', '$status')";
    mysqli_query($koneksi, $query);
    echo
    "
    
    <script> alert('Buku berhasil ditambahkan'); document.location.href = 'index.php'; </script>
    
    ";


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>

<?php

if(isset($_POST["submit"])){
    if($_POST["submit"] == "pinjam"){
        pinjam();
    }
}


?>


    
    <form class="" method="post" action="" enctype="multipart/form-data">
     Nama Peminjam
    <input type="text" name="name" required> <br>
    Judul
    <input type="text" name="name" required> <br>

    Status
    <select name="status" id="">
        <option value="user">Status</option>
        <option value="Siswa">Siswa</option>
        <option value="Guru">Guru</option>
    </select> <br>

    Pengembalian
    <input type="date" name="pengembalian" required> <br>
    <button type="submit" name="submit" value="pinjam">Pinjam Buku</button>
    </form>
    <br>
    <a href="show.php">Output</a>
</body>
</html>