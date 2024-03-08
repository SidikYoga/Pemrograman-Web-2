<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
        if(isset($_POST['hitung'])){
             $nilai1    = $_POST['nilai1'];
             $nilai2 	= $_POST['nilai2'];
             $operator	= $_POST['operator'];
             $hasil     = 0;
             
                '+';
                    $hasil = $nilai1 + $nilai2;   
                '-';
                    $hasil = $nilai1 - $nilai2;
                '*';
                    $hasil = $nilai1 * $nilai2;
                '/';
                    $hasil = $nilai1 / $nilai2;
             }
        echo $hasil;
    ?>
</body>
</html>