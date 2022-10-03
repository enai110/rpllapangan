<?php
    require '../function/function_register.php';

    if(isset($_POST["register"])){

        if(registerasi($_POST) > 0){
            header("location: ../index.php");
            echo"<script>alert('user di tambahkan')</script>";
        }else{
            echo mysqli_error($koneksi);
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
    <style>
        body {
            font-family:sans-serif;
            background-image: url("../aset/img/hoola.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login {
            width: 350px;
            background-color: #C2E7DA;
            margin: 20px auto;
            padding: 14px 16px;
            border-radius: 10px;
        }
        .input_form {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 10pt;
            margin-bottom: 20px;
            border-color: #6290C3;
            border-radius: 10px;      
        }
        .judul {
            font-size: 16pt;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold; 
        }
        .kotak_login p{
            text-align: center;
        }
        .submit{
            background-color: #94c890;
            color: #068217;
            font-size: 14pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .link{
            color: #068217; 
            text-decoration: none;
            font-size: 14pt;
        }
        .text{
            text-align: center;
        }
    </style>
<body>
 
    <form class="kotak_login" action="" method="post">
    <p class="judul">SILAHKAN ISI REGISTER</p>
       
                <input class="input_form" type="text" placeholder="Username" name="username" required><br>
                <br>
                <input class="input_form" type="password" placeholder="Password" name="password" required><br>
                <br>
                <input class="input_form" type="password" placeholder="konfirmasi password" name="password2" required><br>
                <br>

                <button class="submit" name="register">register</button>
        <p><a href="../index.php">sudah memiliki akun</a></p>
 
    </form>
  
</body>
</html>