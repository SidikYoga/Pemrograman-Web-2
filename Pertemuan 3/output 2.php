<html>
    <body>
    <?php 
        $nm = $_POST['nm'];
        $nim = $_POST['nim'];
        $matkul = $_POST['matkul'];
        $jk = $_POST['jk'];
        $nt = $_POST['nt'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $nk = (0.1*$jk/18);
        $na = ($jk) + (0.2*$nt)+(0.3*$uts)+(0.4*$uas)/3;
        $grade ="";
        $ket = "";

        if($na>=80){
            $grade = "A";
            $ket = "Lulus";
        }else if($na>= 70){
            $grade = "B";
            $ket = "Lulus";
        }else if($na>= 60){
            $grade = "C";
            $ket = "Lulus";
        }else if($na>= 50){
            $grade = "D";
            $ket = "Tidak Lulus";
        }else{
            $grade = "E";
            $ket = "Tidak Lulus";
        }
        
        echo "<pre>Nilai Akademik    : $matkul <br></pre>";
        echo "<pre>Nama              : $nm <br></pre>";
        echo "<pre>NIM               : $nim <br></pre>";
        echo "<pre>Jumlah Kehadiran  : $jk  Nilai Kehadiran : $jk <br></pre>";
        echo "<pre>Nilai Tugas       : $nt  Nilai UTS       : $uts <br></pre>";
        echo "<pre>Nilai UAS         : $uas Nilai AKHIR     : $na <br></pre>";
        echo "<pre>Nilai Tugas       : $grade Keterangan    : $ket <br></pre>";


    ?>
</body>
</html>