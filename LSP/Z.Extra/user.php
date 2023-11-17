<?php
session_start();

include("koneksi.php");


//--------------------------------------- INI UNTUK SESSION 1 WEB-------------------------
if (!in_array("admin", $_SESSION['admin_akses'])) {

    echo "Kamu Tidak Punya Akses";

    include("footer.php");
    exit();
}

//--------------------------------------------------------------------------------------------

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM `admin` WHERE `login_id`='$id'");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<style>
    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: 0.5em 0 0.75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: 0.35em;
        color: black;
    }

    table th,
    table td {
        padding: 0.625em;
        text-align: center;
    }

    table th {
        font-size: 0.85em;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
        color: #f8f8f8;
        text-decoration: none;
    }

    .button a {
        color: #f8f8f8;
        text-decoration: none;
    }


    .button:hover {
        background-color: darkgreen;
    }

    .warn {
        background-color: red !important;
    }

    .warn:hover {
        background-color: darkred !important;
    }

    .blue {
        background-color: blue !important;
        color: #f8f8f8;
    }

    .blue:hover {
        background-color: darkblue !important;
    }

    .button1 {
        font-size: 10px;
    }

    .button2 {
        font-size: 10px;
        margin-top: 5px;
        float: right;
    }


    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: 0.625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: 0.8em;
            text-align: right;
        }

        table td::before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
    }

    h4 {
        text-align: center;
    }

    /* general styling */
</style>

<body>

    <?php
    require "navbar_admin.php";
    ?>

    <br>
    <br>
    <br>
    <br>

    <h4>Daftar Pengguna</h4>
    <table>
        <thead>
            <tr>
                <th scope="col">Login_id</th>
                <th scope="col">Username</th>
                <th scope="col">Gender</th>
                <th scope="col">Password</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>




            <?php





            $panggil_db = mysqli_query($koneksi, "select * from admin");

            $i = 1;
            while ($row = mysqli_fetch_assoc($panggil_db,)) {
                echo " 
                <tr>
                    <td> $i</td>
                    <td>" . $row['username'] . "</td>
                    <td>" . $row['gender'] . "</td>
                    <td>" . $row['password'] . "</td>

                <td> 
                

                    <a href='user.php?id=" . $row['login_id'] . "'
                        class='button button1 warn'>Delete</a>
                </td>
            </tr>
            ";

                $i++;
            }





            ?>



        </tbody>
    </table>


    <button class='button button2 blue'>
        <a href="inside/input.php">Tambah Pengguna</a>
    </button>




</body>

</html>