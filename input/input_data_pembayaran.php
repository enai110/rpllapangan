<?php

include "../koneksi.php";

$id_pendaftar = $_POST['id_pendaftar'];
$id_pembayaran = $_POST['id_pembayaran'];
$jenis_lapangan = $_POST['jenis_lapangan'];
$nominal_pembayaran = $_POST['nominal_pembayaran'];
$status_pembayaran = $_POST['status_pembayaran'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];

$insert = mysqli_query($koneksi, "INSERT INTO data_pembayaran SET id_pendaftar='$id_pendaftar', id_pembayaran='$id_pembayaran',  jenis_lapangan='$jenis_lapangan', metode_pembayaran='$jenis_pembayaran', nominal_pembayaran='$nominal_pembayaran', status_pembayaran='$status_pembayaran'");

if ($insert == true) {
    $message ='Pesanan Anda Berhasil.';
    echo "<SCRIPT> //not showing me this 
    alert('$message')
    window.location.replace('../admin/welcome.php');
    </SCRIPT>";
} else {
    echo "<script>
    alert('Gagal input data pembayaran') 
    window.location.replace('../admin/welcome.php')</script>";
}

// $data = [
    
//     $id_pembayaran = $_POST['id_pembayaran'],
//     $id_pendaftar = $_POST['id_pendaftar'],
//     $jenis_lapangan = $_POST['jenis_lapangan'],
//     $nominal_pembayaran = $_POST['nominal_pembayaran'],
//     $status_pembayaran = $_POST['status_pembayaran'],
//     $jenis_pembayaran = $_POST['jenis_pembayaran']
//     ];
    
//     var_dump($data);

?>