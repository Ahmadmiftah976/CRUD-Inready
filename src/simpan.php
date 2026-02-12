<?php

include './lib/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];



    $query = mysqli_query(mysql: $connectDatabase, query: "INSERT INTO `makanan`(`nama`, `harga`) VALUES ('$nama', '$harga')");

    if ($query) {
        echo "Data Berhasil Disimpan";
    } else {
        echo "Data Gagal Disimpan";
    }

}

?>