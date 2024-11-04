<?php
include "koneksi.php";
$Nama_Barang=$_POST['Nama_Barang'];
$Harga=$_POST['Harga'];
$Stok_Barang=$_POST['Stok_Barang'];
$Kategori=$_POST['Kategori'];
$query="UPDATE barang SET
        Nama_Barang='$Nama_Barang',
        Harga='$Harga',
        Stok_Barang='$Stok_Barang',
        Kategori='$Kategori'
    where id='$_GET[id]'
    ";
$mysqli->query($query);
header('location:index.php');