<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Barang</title>
</head>
<body>
    <h1>Form Input Data Barang</h1>
    <form action="tambah-data.php" method="get">
        <label for="Nama_Barang">Nama Barang</label>
        <input type="text" name="Nama_Barang" /><br />
        <label for="Harga">Harga</label>
        <input type="number" name="Harga" /><br />
        <label for="Stok_Barang">Stok Barang</label>
        <input type="number" name="Stok_Barang" /><br />
        <label for="Kategori">Kategori</label>
        <select name="Kategori">
            <option value="Food">Food</option>
            <option value="Fashion">Fashion</option>
            <option value="Farmasi">Farmasi</option>
</select>
<button>Simpan</button>
</form>
</body>
</html>