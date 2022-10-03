<?php
include "../koneksi.php";

$id_lapangan =$_POST['id_lapangan'];
$jenis_lapangan =$_POST['jenis_lapangan'];
$type_lapangan =$_POST['type_lapangan'];

$insert = mysqli_query($koneksi, "INSERT INTO data_lapangan SET id_lapangan='$id_lapangan',
jenis_lapangan='$jenis_lapangan', type_lapangan='$type_lapangan'");

if ($insert == true) {
    $message ='Pesanan Anda Sudah Masuk.';
    echo "<SCRIPT> //not showing me this 
    alert('$message')
    window.location.replace('../admin/welcome.php');
    </SCRIPT>";
} else {
    echo "<script>alert('Gagal input data lapangan')</script>";
}