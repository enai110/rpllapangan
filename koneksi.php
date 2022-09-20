<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "rpllapangan";
    $port = "3307";

    $koneksi = mysqli_connect($host, $user, $pass, $database, $port);
    if (!$koneksi) {
        echo "koneksi gagal";
    } 
?>