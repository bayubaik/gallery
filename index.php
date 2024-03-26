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
            /* margin-bottom: 2000px */
        }
        th{
            color: white;
        }
        td{
            color: white;
            text-align: center;
        }
        
        .navbar{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            
            background-image: linear-gradient(to left,  #50727B, #00FFFF, #50727B);
            position: sticky; Safari
            position: sticky;
            top: 0;
            /* box-shadow: 1px 2px; */
            border-radius: 2px;
            

            /* justify-content: space-around; */
        }
        .navbar2 a{
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            float: left;
            font-size: 24px
            
        }
        .navbar3 a{
            float: right;
            color: white;
            display: block;
            text-decoration: none;
            text-align: center;
            margin: 10px 40px;
            padding-top: 4spx;
            font-size: 24px;
        }
        .navbar3 a:hover{
            color: blue;
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
          <ul class="navbar">
        <li class="navbar2"><a class="active" href="index.php"><b>Web Galeri Foto</b></a></li>
        <li class="navbar3"><a href="register.php">Register</a></li>
        <li class="navbar3"><a href="login.php">Login</a></li>
    </ul>  
    <?php
        }else{
    ?>   
      
     
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
                
            </tr>
        <?php
            }
        ?>
    </table>
    
</body>
</html>