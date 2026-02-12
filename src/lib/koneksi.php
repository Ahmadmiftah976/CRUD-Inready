<?php


$localhost = "localhost";
$username = "root";
$password = "";
$database = "inready";

try {
    $connectDatabase = mysqli_connect(hostname: $localhost, username: $username, password: $password, database: $database);

    echo "Database Berhasil Connect";

} catch (Throwable $th) {
    echo "Database gagal Connect" .$th->getMessage();
}