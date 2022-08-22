<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "rpllapangan";

    $koneksi = mysqli_connect($host, $user, $pass, $database);
    if (!$koneksi) {
        echo "koneksi gagal";
    } 
?>