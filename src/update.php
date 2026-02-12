<?php

include "./lib/koneksi.php";

$id = $_GET["id"];

echo $id;

$query = mysqli_query(mysql: $connectDatabase, query: "SELECT * FROM makanan WHERE id = $id");

// if ($query->num_rows > 0) {
//     echo "data ada";
// } else {
//     echo "data tidak ada";
// }

$data = mysqli_fetch_assoc(result: $query);


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];



    $query = mysqli_query(mysql: $connectDatabase, query: "UPDATE `makanan` SET `nama`='$nama',`harga`='$harga' WHERE id = $id");

    if ($query) {
        echo "<script>
        alert('Data Berhasil Di Update');
        window.location.href = 'view.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Update');
        </script>";
    }

}

?>



<form action="" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?= $data["nama"] ?>"> <br>
    <label for="harga">Harga:</label>
    <input type="number" id="harga" name="harga" value="<?= $data["harga"] ?>"> <br>

    <button type="submit">Update</button>
</form>