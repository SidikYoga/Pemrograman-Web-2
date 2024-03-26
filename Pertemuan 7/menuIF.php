
<?php 
        $matkul = "-";
        $nm = "-";
        $nim = "-";
        $jurusan = "-";
        $nhadir = 0;
        $ntugas = 0;
        $nuts = 0;
        $nuas = 0;
        $grade ="";
        $ket = "";


      if(isset($_POST["submit"])){
        $nm = $_POST['nm'];
        $nim = $_POST['nim'];
        $matkul = $_POST['matkul'];
        $jurusan = $_POST['jurusan'];
        $nhadir = $_POST['nhadir'];
        $ntugas = $_POST['ntugas'];
        $nuts = $_POST['nuts'];
        $nuas = $_POST['nuas'];
        $nk = (0.1*$nhadir/18);

        $hasil = ($nk) + (0.2*$ntugas) + (0.3*$nuts) + (0.4*$nuas)/3;
       
  

        if($hasil>=80){
            $grade = "A";
            $ket = "Lulus";
        }else if($hasil>= 70){
            $grade = "B";
            $ket = "Lulus";
        }else if($hasil>= 60){
            $grade = "C";
            $ket = "Lulus";
        }else if($hasil>= 50){
            $grade = "D";
            $ket = "Tidak Lulus";
        }else{
            $grade = "E";
            $ket = "Tidak Lulus";
        }
    }
    ?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu IF</title>
</head>
<body>
    <center><h3>MENU IF</h3></center>
    <fieldset>
        <legend>Input Data</legend>
        <form action="" method="post" autocomplete="off">
        <pre>
            MataKuliah       : <input type="text" name="matkul"><br>
            Nama             : <input type="text" name="nm"><br>
            NIM              : <input type="text" name="nim"><br>
            Jurusan          : <input type="text" name="jurusan"><br>
            Jumlah Hadir     : <input type="text" name="nhadir"><br>
            Nilai Tugas      : <input type="text" name="ntugas"><br>
            Nilai UTS        : <input type="text" name="nuts"><br>
            Nilai UAS        : <input type="text" name="nuas"><br>
        
        </pre>
           <center> <input type="submit" name="submit" value="Hitung">
            <input type="reset" value="hapus">
            </center>
    </form>
    </fieldset>
    <section>
        <fieldset>
            <legend>Informasi Input Data</legend>
            <table width="75%">
                <tr>
                    <td>Mata Kuliah :</td>
                    <td> <?= $matkul ?></td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td><?= $nm ?></td>
                </tr>
                <tr>
                    <td>NIM : </td>
                    <td><?= $nim ?></td>
                </tr>
                <tr>
                    <td>Jurusan :</td>
                    <td> <?= $jurusan ?></td>
                </tr>
                <tr>
                <tr>
                    <td>Jumlah Hadir</td>
                    <td>: <?= $nhadir ?></td>
                    <td>Nilai Hadir</td>
                    <td>: <?= $nhadir ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>: <?= $ntugas ?></td>
                    <td>Nilai UTS</td>
                    <td>: <?= $nuts ?></td>
                    <td>Nilai UAS</td>
                    <td>: <?= $nuas ?></td>
                </tr>
                <tr>
                    <td>Grade</td>
                    <td>: <?= $grade ?></td>
                    <td>Keterangan</td>
                    <td>: <?= $ket ?></td>
                </tr>
            </table>
        </fieldset>
    </section>

</body>
</html>
