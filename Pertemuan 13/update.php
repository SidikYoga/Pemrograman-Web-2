<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <?php 
            include "koneksi.php";

            //fungsi untuk mencegah inputan yang tidak sesuai
            function input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
               
            }

            if (isset($_GET["id_peserta"])) {
                $id = input($_GET["id_peserta"]);

                $sql = "select * from peserta where id_peserta=$id";
                $hasil = mysqli_query($kon, $sql);
                $data = mysqli_fetch_assoc($hasil);
                
            }

            //cek ada kiriman form dari method post
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = input($_POST["nama"]);
                $sekolah = input($_POST["sekolah"]);
                $jurusan = input($_POST["jurusan"]);
                $no_hp = input($_POST["no_hp"]);
                $alamat = input($_POST["alamat"]);
                $id = input($_POST["id_peserta"]);

                //query input data ke dalam tabel anggota
                $sql = "update peserta set
                        nama='$nama',
                        sekolah='$sekolah',
                        jurusan='$jurusan',
                        no_hp='$no_hp',
                        alamat='$alamat',
                        where id_peserta=$id";

                //mengeksekusi/menjalankan query di atas
                $hasil = mysqli_query($kon, $sql);

                //kondisi berhasil atau tidak ddlaam mengeksekusi query diatas
                if($hasil) {
                    header("Location:index.php");
                }
                else {
                    echo"<div class='alert alert-danger'> Data Gagal diupdate.</div>";
                }
            }
        ?>

        <h2>Update Data Peserta</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="on">
            <div class="form-group">
                <label>Nama :</label> 
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
            </div>
            <div class="form-group">
                <label>sekolah :</label>
                <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah" required />
            </div>
            <div class="form-group">
                <label>Jurusan :</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" required />
            </div>
            <div class="form-group">
                <label>No Hp :</label>
                <input type="number" name="no_hp" class="form-control" placeholder="Masukan No HP" required />
            </div>
            <div class="form-group">
            <label>Alamat :</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required ></textarea>
            </div>
            <div class="form-group">
                <label>ID :</label> 
                <input type="number" name="id_peserta" class="form-control" placeholder="Masukan ID Peserta" required />
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

