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
    <title>Halaman Edit Foto</title>
    <style>
         body{
            background-image: url(image/hutanswis.jpg);
            background-size: cover;
            font-family: arial;
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
    <h1>Halaman Edit Foto</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    

    <form action="update_foto.php" method="post" enctype="multipart/form-data">
        <!-- ini Digunakan untuk id supaya id keluar secara otomatis  -->
        <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
    
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judulfoto" value="<?=$data['judulfoto']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsifoto" value="<?=$data['deskripsifoto']?>"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>
                    <select name="albumid">
                    <?php
                        $userid=$_SESSION['userid'];
                        $sql2=mysqli_query($conn,"select * from album where userid='$userid'");
                        while($data2=mysqli_fetch_array($sql2)){
                    ?>
                            <option value="<?=$data2['albumid']?>" <?php if($data2['albumid']==$data['albumid']){echo 'selected';}?>><?=$data2['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
           
        ?>
    </form>

    
</body>
</html>