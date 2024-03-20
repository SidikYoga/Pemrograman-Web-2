<?php
    session_start();

    if (!isset($_SESSION['luas_segitiga'])) {
        $_SESSION['luas_segitiga'] = [];
    }

    if (isset($_POST['hasil'])) {
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        if (count($_SESSION['luas_segitiga']) < 5) {
            $luas = 0.5 * $alas * $tinggi;
            $_SESSION['luas_segitiga'][] = array("alas" => $alas, "tinggi" => $tinggi, "luas" => $luas);
        } else {
            session_unset();
            session_destroy();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <form action="" method="post" autocomplete="off">
        <label for="Luas">Alas : </label>
        <input type="text" name="alas"> </br></br>
        <label for="Luas">Tinggi : </label>
        <input type="text" name="tinggi"> </br></br>
        <input type="submit" name="hasil" value="Hasil Pehitungan">
    </form>
    <table width="50%" align="center" border="1">
        <tr>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas</th>
        </tr>
        <?php
        foreach ($_SESSION['luas_segitiga'] as $data) {
            echo "<tr>";
            echo "<td>{$data['alas']}</td>";
            echo "<td>{$data['tinggi']}</td>";
            echo "<td>{$data['luas']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>