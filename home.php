<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
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
        th{
            color: white;
        }
        td{
            color: white;
            text-align: center;
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
            
    </style>
</head>
<body>
   
   
    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
    
    <?php
        }else{
    ?>   
            
        <ul>
            <li><p class="web">Web Galeri Foto</p></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Foto</a></li>
            
            <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
            
        </ul>
        <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    <?php
        }
    ?>
    <br>
    <br>

    <table width="100%" border="1" cellpadding="5" cellspacing="0" align="center" class="table">
        <tr>
            <th>ID</th>
            <th>Uploader</th>
            <th>Foto</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Jumlah Like</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['fotoid']?></td>
                <td><?=$data['namalengkap']?></td>
                
                <td>
                    <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td><?=$data['judulfoto']?></td>
                <td><?=$data['deskripsifoto']?></td>
                <td>
                    <?php
                        $fotoid=$data['fotoid'];
                        $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                    ?>
                </td>
                <td>
                    <a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a>
                    <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    
</body>
</html>