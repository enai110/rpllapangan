<?php

include "../koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lapangan</title>
    <style>
    .daftar{
        background-color: #C2E7DA;
        padding: 20px;
        border-radius: 1px;
    }
    body{
        margin: 0;
        padding: 0;
    }
    input, textarea, select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    button{
        width: 100%;
        background-color:#1A1B41;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        color:azure;
    }
    .judul{
        width: 100;
        padding: 1px 20px;
        background-color: #C2E7DA;
    }
    .menu{
        list-style-type: none;
        margin: 0;
        padding: 15px;
        background-color:#1A1B41;
        overflow:hidden;
    }
    .menu-list a{
        display: block;
        color: white;
        padding: 10px 10px;
        text-decoration: none;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"> <a href="welcome.php">Back To Home</a> </li>
    </ul>
    <div class="judul"> <h1>Silahkan isi data lapangan</h1> </div>
    <form class="daftar" action= "../input/input_data_lapangan.php" method="post">

        <label for="">ID Lapangan</label><br>
        <input type="text" name="id_lapangan" id="" value="<?= rand(0000, 9999)?>" readonly>
        <br><br>
        <label for="">Jenis Lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="A">Lapangan A (Matras)</option>
            <option value="B">Lapangan B (Sintetis)</option>
            <option value="C">Lapangan C (vinyl)</option>
        </select>
        <br><br>
        <label for="">Type Lapangan</label><br>
        <select name="type_lapangan" id="">
            <option value="matras">Matras</option>
            <option value="sintetis">Sintetis</option>
            <option value="vinyl">Vinyl</option>
        </select>
        <br><br>

        <button type="submit">KIRIM</button>

    </form>

</body>
</html>