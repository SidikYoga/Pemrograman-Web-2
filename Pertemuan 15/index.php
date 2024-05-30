<?php 
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 15 Session</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <h3>Halaman Ini Tampil Karena Anda Berhasil Login</h3>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
