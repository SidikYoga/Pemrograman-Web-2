<?php 

$array = [
    [
        "alas" => 25,
        "tinggi" => 10
    ],
    [
        "alas" => 22,
        "tinggi" => 15
    ],
    [
        "alas" => 15,
        "tinggi" => 23
    ],
    [
        "alas" => 4,
        "tinggi" => 27
    ],
    [
        "alas" => 35,
        "tinggi" => 15
    ],
];

function luas_segitiga($a, $t) {
    return (0.5 * $a * $t);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Array</title>
</head>
<body>
    <center><h3>MENU ARRAY</h3></center>
    <table width="65%" align="center" border="2">
        <thead>
            <tr>
                <th>Segitiga Ke - </th>
                <th>Alas</th>
                <th>Tinggi</th>
                <th>Luas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array as $i => $hasil) : ?>
                <tr>
                    <td><?= $i + 1?></td>
                    <td><?= $hasil['alas'] ?></td>
                    <td><?= $hasil['tinggi'] ?></td>
                    <td><?= luas_segitiga($hasil['alas'], $hasil['tinggi']) ?></td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>