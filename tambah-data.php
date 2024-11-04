<?php
include "koneksi.php";
$Nama_Barang = $_GET['Nama_Barang'];
$Harga = $_GET['Harga'];
$Stok_Barang = $_GET['Stok_Barang'];
$Kategori = $_GET['Kategori'];
$query = "INSERT INTO barang (Nama_Barang, Harga, Stok_Barang, Kategori)
    VALUES (
        '$Nama_Barang',
        '$Harga',
        '$Stok_Barang',
        '$Kategori'
    )";
$mysqli->query($query);
header('location:index.php');