<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Lapangan</title>
</head>
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
<body>
<ul class="menu">
        <li class="menu-list"><a href="../admin/welcome.php">Back To Home</a></li>
    </ul>

    <table class="table" border="1" align="center">
<tr>
            <th style="text-align:center">Id pendaftar</th>
            <th style="text-align:center">Jenis lapangan</th>
            <th style="text-align:center">Jam mulai</th>
            <th style="text-align:center">Jam akhir</th>
            <th style="text-align:center">Action</th>
        </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM data_pendaftar");
    while ($data=mysqli_fetch_array($query)){?>
        <tr>
            <td style="text-align:center"><?php echo $data['id_pendaftar'] ?></td>
            <td style="text-align:center"><?php echo $data['jenis_lapangan'] ?></td>
            <td style="text-align:center"><?php echo $data['jam_mulai'] ?></td>
            <td style="text-align:center"><?php echo $data['jam_selesai'] ?></td>
            <td style="text-align:center">
                <a href="edit.php?id=<?php echo $data['id_pendaftar']?>">Edit</a>
                <a class="delete" href="delete.php?id=<?php echo $data['id']?>">Delete</a>
            </td> 
        </tr>
    <?php }
    ?>

</table> </td>
</tr>
</table> </body>
</html>