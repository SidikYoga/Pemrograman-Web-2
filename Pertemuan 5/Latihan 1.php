<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 No 1</title>
</head>
<body>
    <form  method="post" autocomplete="off">
        <pre>
        Nama     : <input type="text" name="nama"><br>
        Email    : <input type="text" name="email"><br>
        Komentar : <input type="text" name="komen"><br>

        <input type="submit" name="simpan" value="Simpan">
        </pre>
    </form>
    
    <?php 
        $file = "bukutamu.dat" ;
        if (file_exists($file)) {
            $berkas = fopen($file,"r+");
            $pencacah = (integer)trim(fgets($berkas,255));
            $pencacah++;
            fseek($berkas, 0);
            fwrite($berkas, $pencacah); 
            fclose($berkas);
        }else {
            $pencacah = 1;
            $berkas = fopen("$file","w");
            fwrite($berkas,$pencacah);
            fclose($berkas);
        }
            print("Anda pengunjung ke- $pencacah <br>\n");
        
        
        
    ?>
</body>
</html>