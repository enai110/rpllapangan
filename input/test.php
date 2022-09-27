<?php

include "../koneksi.php";

$insert = mysqli_query($koneksi, "INSERT INTO data_pendaftar (id, id_pendaftar, nama_pendaftar, nomor_hp, alamat, jenis_lapangan, jam_mulai, jam_selesai, jenis_pembayaran) VALUES (NULL, '123123', '', '', '', '', '', '', '')");

if ($insert) {
    # code...
    var_dump($insert);
}
else {
    var_dump($insert);
}
