<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 2</title>
    <style>
        .tp{
            font-size: 24px;
            color :red;
        }

    </style>
</head>
<body>
    <label class="tp"> Tabel Perkalian </label>
    <table border="on">
    <?php
        for ($j = 15; $j <=45; $j+=2) {
            echo "<tr>";
            echo "<td>$j</td>";
            for ($i = 12; $i <=12; $i++) {
                echo "<td> * </td>";
                echo "<td>$i =</td>";
                echo "<th>" . ($j * $i) . "</th>";
            }
            echo "</tr>";
        
        }
        ?>
    </table>
</body>
</html>