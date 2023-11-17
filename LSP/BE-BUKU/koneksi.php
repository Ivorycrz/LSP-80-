<?php

$koneksi = mysqli_connect("localhost", "root", "", "multiuser");

if (!$koneksi) {
    die("Koneksi Gagal");
}

$select = mysqli_query($koneksi, "SELECT * FROM user");

$buku = mysqli_query($koneksi, "SELECT * FROM buku");

$lihat = mysqli_query($koneksi, "SELECT * FROM users");





function add(){
    global $koneksi;

    $name = $_POST["name"];
    $filename = $_FILES["file"]["name"];
    $kategori = $_POST["kategori"];
    $deskripsi = $_POST["deskripsi"];

    
    $tmpName = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file($tmpName, 'uploads/' . $newfilename);
    $query = "insert into users values('', '$name', '$newfilename', '$kategori', '$deskripsi')";
    mysqli_query($koneksi, $query);
    echo
    "
    
    <script> alert('Buku berhasil ditambahkan'); document.location.href = 'show.php'; </script>
    
    ";


}

function edit(){
    global $koneksi;

    $id = $_POST["id"];
    $name = $_POST["name"];
    $filename = $_FILES["file"]["name"];
    $kategori = $_POST["kategori"];
    $deskripsi = $_POST["deskripsi"];

    
    $tmpName = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file($tmpName, 'uploads/' . $newfilename);
    $query = "update users set name = '$name', image ='$filename', kategori = '$kategori', deskripsi = '$deskripsi' where id='$id'";
    mysqli_query($koneksi, $query);
    echo
    "
    
    <script> alert('Buku berhasil ditambahkan'); document.location.href = 'show.php'; </script>
    
    ";
    header("location:show.php");
}

function delete(){
    
}