<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
        height: 400px;
        width: 600px;
        background: white;
        border-radius: 5px;
        /*meletakkan form ke tengah*/
        margin: 300px auto;
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
            background:  #40A2E3;
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
        <p class="tulisan_login">Silahkan login</p>
        <form action="proses_login.php" method="post">
        <form>
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username .. ">
        
        <label>Password</label>
        <input type="text" name="password" class="form_login" placeholder="Password ..">
        
        <input type="submit" class="tombol_login" value="Login">
        
        <br/>
        <br/>
        <b class='register'>Apakah anda sudah register: <a href="register.php">register !</a></b>
        
        </form>
        <p class="kembali"><a href="index.php">Kembali</a></p>
        
        </div>
    

   
</body>
</html>
 <!-- <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"  placeholder="password"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table> -->

        <!-- <br>
    <form action="proses_login.php" method="post">

    <form>
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username">
        
        <label>Password</label>
        <input type="text" name="password" class="form_login" placeholder="Password">
        
        <input type="submit" class="tombol_login" value="LOGIN">  
       
    </form>
    </div>
    <br>
    <div class="container2">
               <img src="image/gedung.gif" alt="foto rusak">
    </div>
    </div> -->