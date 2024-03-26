<?php 

    $nawal = 0;
    $akhir = 0;
    $hasil =0;
    $jumlahbil = 0;
    $deret = array();


    if(isset($_POST["hitung"])){
        $nawal = $_POST['nawal'];
        $nakhir = $_POST['nakhir'];
        
        for ($i = $nawal; $i <= $nakhir; $i++) {
            if($i % 2 !== 0 && $i % 3 == 0) {  
                $deret[]= $i;
                $jumlahbil++;
                $hasil += $i;
                
            }

        }
    }  
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Looping</title>
    <style>
        form{
            font-size: 16px;
        }

        .legend{
            font-size: 20px;
            color: red;
        }
        
    </style>
</head>
<body>
    <center><h3>MENU LOOPING</h3></center>
    <fieldset>
        <legend class="legend">DERET BILANGAN GANJIL</legend>
        <form action="" method="post" autocomplete="off"><pre>
            Nilai Awal  <input type="text" name="nawal"><br>
            Nilai Akhir <input type="text" name="nakhir"><br>
          <center><input type="submit" name="hitung" value="Hitung" ></center>
        </pre>
        </form>
    </fieldset>
    <fieldset>
        <legend>Hasil Deret Bilangan</legend>
        <table>
            <tr>
                <td>Deret Bilangan yang Tampil</td>
                <td>: <?= implode(", ", $deret) ?></td>
            </tr>
            <tr>
                <td>Jumlah Bilangan</td>
                <td>: <?= $jumlahbil?></td>
            </tr>
            <tr>
                <td>Jumlah Nilai Bilangan</td>
                <td>: <?= implode("+ ", $deret)." = ". $hasil ?></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>