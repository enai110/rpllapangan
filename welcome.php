<?php
    session_start();
    if (empty($_SESSION['hak_akses'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
    <style>
    .body{
        margin: 0;
        padding: 0;
        }
    .menu{
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color:#6290c3;
        overflow:hidden;
    }
    .menu-list{
        float: left;
    }
    .menu-list a{
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 25px;
    }
    .menu-list a:hover {
        background-color:#1A1B41;
    }
    .jumbotron{
        padding: 30px;
    }
    .container{
        margin: 0 auto;
        padding: 30px;
        border-radius: 10px;
    }
    .jumbotron .container{
        max-width: 100%;
        background-color:#BAFF29;
    }
    .jumbotron h1{
        text-align: left;
        color:black;
        font-family:'roleway', helvetica, arial, sans-serif;
        font-weight: 600;
        font-size: 50px;
        text-transform: uppercase;
    }
    .jumbotron p{
        text-align: left;
        color:black;
        font-family:'roleway', helvetica, arial, sans-serif;
        font-weight: 600;
        font-size: 40px;
        text-transform: uppercase;
    }

    </style> 
</head>

<body>
   <ul class="menu">
    <li class="menu-list"> <a href="form/pendaftar.php">Daftar</a> </li>
    <li class="menu-list"> <a href="logout.php">Logout</a> </li>
   </ul>
  <div class="jumbotron">
    <div class="container">
    <h1>Selamat Datang <?php echo strtoupper($_SESSION['username']) ?> di futsalap</h1>
    <p>klik tombol daftar untuk membooking lapangan futsal</p>
    </div>
  </div> 

</body>

</html>