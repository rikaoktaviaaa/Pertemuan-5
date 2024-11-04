<?php
include "koneksi.php";
$query = "DELETE FROM Barang WHERE id='$_GET[id]'";
$mysqli->query($query);
header('location:index.php');