<?php
include '../koneksi/index.php';

function tampilData()
{
    global $conn;
    $sql = "SELECT * FROM makanan";
    $result = mysqli_query($conn, $sql);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahData($data, $files)
{
    global $conn;
    $nm_makanan = $data['nm_makanan'];
    $harga = $data['harga'];
    $gambar = $files['gambar'];

    if ($gambar['name']=="") {
       echo "Gambar Tidak boleh Kosong";
       return 0;
    }

    $tmp_file = $gambar['tmp_name'];
    // extension
    $extensi = end(explode('.', $gambar['name']));
    // tempat penyimpanan
    $path = "gambar/$nm_makanan.$extensi";
    // copy file
    move_uploaded_file($tmp_file,$path);


    $sql = "INSERT INTO makanan (nm_makanan, harga, gambar)
            VALUES ('$nm_makanan', '$harga', '$path')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function hapusData($id)
{
    global $conn;
    $data = "SELECT * FROM makanan WHERE id='$id'";
    $result = mysqli_query($conn, $data);
    $row =  mysqli_fetch_assoc($result);
    $path = $row['gambar'];
    // delete file
    unlink($path);

    // sql to delete a record
    $sql = "DELETE FROM makanan WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
