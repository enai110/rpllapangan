<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .body{
        margin: 0;
        padding: 0;
        }
    .menu{
        list-style-type: none;
        margin: 10px;
        padding: 5px;
        background-color: #1A1B41;
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
        font-size: 23px;
    }
    table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:  black;
    }
    table th {
    background:#C2E7DA;
    color:#1A1B41;
    font-size:14px;
    }
    table th, table td {
    vertical-align:top;
    padding:5px 15px;
    border:1px solid black;
    }
    table tr {
    background:#F1FFE7;
    }
    table tr:nth-child(even) {
    background:#F1FFE7;
    }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"> <a href="../admin/welcome.php">Back to home</a></li>
    </ul>
    <table border="1" align="center" cellpadding = "10" cellspacing ="1">
        <tr>
            <th align="center">id</th>
            <th align="center">id pendaftar</th>
            <th align="center">id pembayaran</th>
            <th align="center">jenis lapangan</th>
            <th align="center">metode lapangan</th>
            <th align="center">nominal pembayaran</th>
            <th align="center">status pembayaran</th>
        </tr>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM data_pembayaran");
            while($data = mysqli_fetch_array($query)){ ?>
            <tr>
                <td align="center"><?= $data['id'];?></td>
                <td align="center"><?= $data['id_pendaftar'];?></td>
                <td align="center"><?= $data['id_pembayaran'];?></td>
                <td align="center"><?= $data['jenis_lapangan'];?></td>
                <td align="center"><?= $data['metode_pembayaran'];?></td>
                <td align="center"><?= $data['nominal_pembayaran'];?></td>
                <td align="center"><?= $data['status_pembayaran'];?></td>
            </tr>
        <?php }
    ?>
        </table>
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>