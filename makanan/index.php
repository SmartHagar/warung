<?php
include 'function.php';

$data_makanan = tampilData();

if (isset($_GET['id'])) {
    hapusData($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Daftar Makanan</h2>
    <a href="tambah.php">Tambah</a>
    <ul>
        <?php
        foreach ($data_makanan as $key => $value) {
            # code...

        ?>

            <li>
                <span>Nama Makanan:</span>
                <span><?php echo $value['nm_makanan']; ?></span>
            </li>
            <li>
                <span>Harga: </span>
                <span><?= $value['harga'] ?></span>
            </li>

            <li>
                <span>Gambar: </span>
                <div>
                    <img src="<?= $value['gambar'] ?>" alt="">
                </div>
            </li>

            <div class="ubah-hapus">
                <a href="">Ubah</a>
                <a href="?id=<?= $value['id'] ?>">Hapus</a>
            </div>

        <?php } ?>
    </ul>

</body>

</html>