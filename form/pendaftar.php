<?php
include "../koneksi.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form pendaftaran</title>
</head>

<body>
    <a href="../welcome.php">Back To Home</a>
    <h1>Silahkan isi bidang di bawah ini</h1>
    <form action="input_data_pendaftar.php" method="post">
        
    <label for="">Id Pendaftar</label><br>
    <input type="text" name="id_pendaftar" id=""value="<?= rand(0000, 9999)?>" readonly>
    <br><br>
    <label for="">Nama Pendaftar</label><br>
    <input type="text" name="nama_pendaftar" id="">
    <br><br>
    <label for="">Nomor hp</label><br>
    <input type="text" name="nomor_hp" id="">
    <br><br>
    <label for="">Alamat</label><br>
    <textarea name="alamat" id="" cols="50" rows="10"></textarea>
    <br><br>
    <label for="">Jenis Lapangan</label><br>
    <select name="jenis_lapangan" id="">
        <option value="A">Lapangan A (Matras)</option>
        <option value="B">Lapangan B (Sintetis)</option>
        <option value="C">Lapangan C (Vinyl)</option>
    </select>
    <br><br>
    <label for="">Jam Mulai</label><br>
    <input type="time" name="jam_mulai" id="">
    <br><br>
    <label for="">jam Selesai</label><br>
    <input type="time" name="jam_selesai" id="">
    <br><br>
    <label for="">jenis Pembayaran</label><br>
    <select name="jenis_pembayaran" id="">
        <option value="cash">Cash</option>
        <option value="transfer">Transfer</option>
    </select>

    <button type="submit">KIRIM</button>

</form>
</body>

</html>