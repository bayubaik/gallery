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
    <title>Halaman Foto</title>
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
        .table{
            background-color: grey;

        }
        .tablecontainer{
            /* justify-content: center; */
            margin-top: 50px;
            margin-left: 500px;
            
            
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
    
    <h1 clas>Halaman Foto</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    
   

    <form action="tambah_foto.php" method="post" enctype="multipart/form-data" >
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judulfoto"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsifoto"></td>
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
                        include "koneksi.php";
                        $userid=$_SESSION['userid'];
                        $sql=mysqli_query($conn,"select * from album where userid='$userid'");
                        while($data=mysqli_fetch_array($sql)){
                    ?>
                            <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    
    <div class="tablecontainer">
    <table border="1" cellpadding=5 cellspacing=0 class="table">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal Unggah</th>
            <th>Lokasi File</th>
            <th>Album</th>
            <th>Disukai</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from foto,album where foto.userid='$userid' and foto.albumid=album.albumid");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['fotoid']?></td>
                    <td><?=$data['judulfoto']?></td>
                    <td><?=$data['deskripsifoto']?></td>
                    <td><?=$data['tanggalunggah']?></td>
                    <td>
                        <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                    </td>
                    <td><?=$data['namaalbum']?></td>
                    <td>
                        <?php
                            $fotoid=$data['fotoid'];
                            $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                            echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="hapus_foto.php?fotoid=<?=$data['fotoid']?>">Hapus</a>
                        <a href="edit_foto.php?fotoid=<?=$data['fotoid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    </div>
</body>
</html>