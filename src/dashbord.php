<?php
session_start();
if ($_SESSION['isLogin'] !== "Login") {
    header(header: "Location: login.php");
}else {
    echo "<h1>Welcome to the Dashboard</h1>";
}

?>

<h1> Halaman Dashboard </h1>
<p>halaman fitur</p>
<a href="logout.php">Logout</a>

