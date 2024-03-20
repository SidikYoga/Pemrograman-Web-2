<html>
    <?php 
        $nawal = $_POST['nawal'];
        $nakhir = $_POST['nakhir'];
        $deret = array();
        $jumlahbil = 0;
        $hasil =0;
        for ($i = $nawal; $i <= $nakhir; $i++) {
            if($i % 2 !== 0 && $i % 3 == 0) {  
                $deret[]= $i;
                $jumlahbil++;
                $hasil += $i;
                
            }

        }
        echo"<br>";
        echo "Maka Deret bilangan yang tampil : " . implode(", ", $deret) . "<br>";
        echo "Jumlah bilangan: " . $jumlahbil . "<br>";
        echo "Jumlah Nilai Bilangan : " . implode(" + ", $deret) ." = $hasil". "<br>";
    ?>
</html>