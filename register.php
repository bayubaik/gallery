<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
         body{
            background-image: url(image/pinus.jpg);
            background-size: cover;
            font-family: arial;
            

        } 
        h1{
        text-align: center;
        /*ketebalan font*/
        font-weight: 300;
        }
        
        .tulisan_login{
        text-align: center;
        font-size: 26px;
        font-weight: bold;
        /*membuat semua huruf menjadi kapital*/
        text-transform: uppercase;
        }
        
        .kotak_login{
        height: 700px;
        width: 500px;
        background: white;
        border-radius: 5px;
        /*meletakkan form ke tengah*/
        margin: 100px auto;
        padding: 30px 20px;
        }
        
        label{
        font-size: 12pt;
        font-weight: bold;
        }
        
        .form_login{
        /*membuat lebar form penuh*/
        box-sizing : border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 20px;
        
        }
        
        .tombol_login{
        background: #40A2E3;
        color: white;
        font-size: 11pt;
        width: 100%;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
        }
        
        .link{
        color: #232323;
        text-decoration: none;
        font-size: 10pt;
        }
        .kembali{
            width:60px;
            padding: 20px;
            height: 15px;
            margin: 20px;
            background: #40A2E3;
            font-weight: bold;
            border-radius: 5px;
          
            
        }
        a{
            text-decoration: none;
            color: blue;
        }
        .kembali a:hover{
            color: white;
            

        }
    </style>
</head>
<body>
   
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Register</p>
         <form action="proses_register.php" method="post">
        <form>
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username ..">
        
        <label>Password</label>
        <input type="text" name="password" class="form_login" placeholder="Password ..">
        
        <label>Email</label>
        <input type="text" name="email" class="form_login" placeholder="Email ..">
       
        <label>Nama Lengkap</label>
        <input type="text" name="namalengkap" class="form_login" placeholder="Nama Lengkap ..">
        
        <label>Alamat</label>
        <input type="text" name="alamat" class="form_login" placeholder="Alamat ..">
        
        <input type="submit" class="tombol_login" value="Register">
        
        <br/>
        <br/>
       
        
        </form>
        <p class="kembali"><a href="index.php">Kembali</a></p>
        
        </div>
    
</body>
</html>
<!-- <form action="proses_register.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form> -->