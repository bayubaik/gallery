<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Album</title>
    <style>
         body{
            background-image: url(image/hutanswis.jpg);
            background-size: cover;
            font-family: arial;
            color: white;
            /* margin-bottom: 2000px */
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 1px;
            overflow: hidden;
            background-image: linear-gradient(to left,  #2E4C6D, #00FFFF, #2E4C6D);; */
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0;
            border-radius: 5px;
            
            
        }

        li {
        float: left;
        margin: 2px;
        padding: 3px;
        }

        li a {
        font-weight: bold;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        margin-right: 20px;
        margin-top: 20px;
        padding: 10px;
       
        }

        li a:hover:not(.active) {
        background-color: blue;
        border-radius: 5px;
       
        }

        .active {
        background-color: #40A2E3;
        padding: 10px;
        margin-right: 50px;
        margin-top: 20px;
        border-radius: 5px;
    }
    .web{
            margin-left: 25px;
            margin-right: 20px;
            padding: 5px;
            color:white;
            font-size: 20px;
            background-image: linear-gradient(to left,  #2E4C6D, #00FFFF, #2E4C6D);
            font-weight: bold;
            border-radius: 2px;
        }
        .container{
            display: flex;
            /* background-color: orange; */
            justify-content: center;
            
        }
        .container > div {

            margin: 10px;
            padding: 20px;

            /* font-size: 30px; */
            }
        .table{
            background-color: grey;
        }
        .colomalbum{
            
            width: 50px
            padding: 50px
        }
        
        /* .colomtable{
            background-color: blue;
        } */

    </style>
</head>
<body>
<ul>
            <li><p class="web">Web Galeri Foto</p></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Foto</a></li>
            
            <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
            
    </ul>
    <h1>Halaman Album</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    
    <div class="container">
        <div class="colomalbum">
    <form action="tambah_album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    </div>
    <div class="colomtable">
    <table border="1" cellpadding=5 cellspacing=0 class="table" >
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                        <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                        <a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    </div>
    </div>
    
</body>
</html>