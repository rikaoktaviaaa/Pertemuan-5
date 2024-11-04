<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>data penjualanan</title>
</head>
<body>
    <table border="1">
        <caption>
            Data Stok Barang
        <form action="" method="get">
                <select name="filter">
                    <?php
                    $q_Kategori="SELECT Kategori FROM barang group by Kategori";
                    $result_Kategori=$mysqli->query($q_Kategori);
                    while($r_Kategori = $result_Kategori->fetch_assoc()){
                        ?>
                         <option value="<?=$r_Kategori['Kategori'];?>"><?=$r_Kategori['Kategori'];?></option>
                        <?php
                    }

                    ?>
                </select>
                    <input type="submit" value="Filter"/>
                </form>
                </caption>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
    <?php
    if(isset($_GET['filter'])){
        $query="SELECT * FROM barang where Kategori='$_GET[filter]'";
    }else{
        $query="SELECT * FROM barang";
    }
    $result=$mysqli->query($query);
    $no=0;
    while($row = $result->fetch_assoc()){
        $no++;
        ?>
        <tr>
            <td><?=$no;?></td>
            <td><?=$row['Nama_Barang'];?></td>
            <td><?=FormatRupiah($row['Harga']);?></td>
            <td><?=$row['Stok_Barang'];?></td>
            <td><?=$row['Kategori'];?></td>
            <td>
                <a href="<?='form-edit.php?id='.$row['id'];?>">Edit</a>
                <a href="<?='hapus-data.php?id='.$row['id'];?>">Hapus</a>
    </td>
    </tr>
    <?php
    }
    ?>
    </table>
    <a href="form-barang.php?">Tambah Data Barang</a>
    </body>
    </html>