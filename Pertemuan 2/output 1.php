<html>
    <?php 
        $nm=$_POST['nm'];
        $jrsn=$_POST['jrsn'];
        $nt=$_POST['nt'];
        $nu=$_POST['nu'];
        $nuas=$_POST['nuas'];
        $rata=$nt+$nu+$nuas/3;

        echo"Nama   : $nm Jurusan : $jrsn<br>";
        echo"Nilai Tugas : $nt <br>";
        echo"Nilai UTS   : $nu <br>";
        echo"Nilai UAS   : $nuas <br>";
        echo"Rata-Rata   : $rata <br>";
    ?>
</html>