<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "login";

    $kon = mysqli_connect($host, $user, $pass, $db);
    if (!$kon) {
        die("Koneksi Gagal:".mysqli_connect());
    }
?>