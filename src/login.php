<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'password123') {
        $_SESSION['isLogin'] = "Login";

        header(header: "Location: dashbord.php");
    }
    else {
        echo "<script>
        alert('Invalid username or password');
        </script>";
    }
}

?>

<form method ="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" required />
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required />
    <button type="submit">Login</button>
</form>