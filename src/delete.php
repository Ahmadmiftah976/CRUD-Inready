<?php

include "./lib/koneksi.php";

$id = $_GET["id"];

$query = mysqli_query(mysql: $connectDatabase, query: "DELETE FROM `makanan` WHERE id = $id");

if ($query) {
    echo "<script>
    alert('data berhasil terhapus');
    window.location.href = `view.php`;
    </script>";
} else {
    echo "data gagal terhapus";
}

