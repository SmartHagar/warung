<?php

include 'function.php';
if (isset($_POST['simpan'])) {
    tambahData($_POST, $_FILES);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Silahkan Menambah Data</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nm_makanan">Nama Makanan</label>
        <input type="text" name="nm_makanan" id="nm_makanan">

        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga">

        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" id="gambar">

        <button name="simpan">Simpan</button>
    </form>

    <a href="index.php">Kembali</a>
</body>

</html>