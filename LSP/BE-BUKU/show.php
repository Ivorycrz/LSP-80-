<?php

include ("koneksi.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- Navbar -->
<?php 
require "navbar.php";
?>

<style>

table, td, th {
  border: 1px solid;
}

table {
  width: 100% !important;
  border-collapse: collapse;
}


</style>

<!-- Navbar End -->


<section>
    <div class="container">
      <div class="heading">
        <h3>Daftar Buku</h3>
      </div>


      <button class='button button2 blue'>
        <a href="upload.php">Tambah Pengguna</a>
    </button>

    </div>
  </section>



<table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Gambar</th>
            <th scope="col">Kategori</th>
            <th scope="col">Deskripsi</th>

            <th scope="col">Opsi</th>
          

        <?php
        $i = 1;
        
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $delete = mysqli_query($koneksi, "DELETE FROM `users` WHERE `id`='$id'");
        }


      foreach($lihat as $user) :
        ?>
        <tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $user["name"]; ?> </td>
            <td> <img src="uploads/<?php echo $user["image"]; ?>" alt="" width="100"> </td>
            <td> <?php echo $user["kategori"]; ?> </td>
            <td> <?php echo $user["deskripsi"]; ?> </td>

            <td>
            <a href="edituser.php?id=<?php echo $user['id']; ?>">Edit</a>
            
            <a href="show.php?id=<?php echo $user['id']; ?>">Delete</a>


        <!-- <form action="" class="" method="post">
            <button type="submit" name="submit" value = <?php echo $user['id'] ?> >Delete</button>
        </form> -->
        </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
      </table>



</body>
</html>