<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
    <!-- link ke css -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
    background-color: #333; /* Dark background */
    color: #fff; /* Light text color */
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  
  .utama {
    background-color: #222;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  }
  
  .header {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  .inputan {
    text-align: center;
  }
  
  .log {
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
  }
    </style>
</head>
<body>
    <div class="utama">
        <div class="header">
            halaman login
        </div>
        <div class="inputan">
            <form action="" method="post">
                <div class="">
                    <input type="text" name="username" placeholder="username" class="log">
                </div>
                <div class="" style="margin-top: 10px;">
                    <input type="password" name="password" placeholder="password" class="log">
                </div>
                <div class="" style="margin-top: 10px;">
                    <input type="submit" name="login" value="login" class="log">
                </div>
            </div>
            </form>
            <?php
            if(isset($_POST["login"])) {
             $user = $_POST["username"];
             $pass =  $_POST["password"];
             $query  = mysqli_prepare($koneksi, "SELECT * FROM tabel_login WHERE username='$user' AND password ='$pass'");
             mysqli_stmt_execute($query);
             $cek  = mysqli_stmt_get_result($query);

             if ( mysqli_num_rows($cek) === 1) {
                $_SESSION["username"] = $user;
                header ("location: index.php");
                exit;
                } else {
                    ?><script type="text/javascript">alert ("username atau password salah");</script><?php
                    }
                }
            ?>
    </div>
</body>
</html>
