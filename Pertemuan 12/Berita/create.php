<?php 

    include '../navbar.php';
    include "../koneksi.php";

    $sql = "SELECT * FROM tblkategori";
    $query = mysqli_query($kon, $sql);
    $kategori = $query->fetch_all(MYSQLI_ASSOC);

    if(isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $idKategori = $_POST['kategori'];
        $isi = $_POST['isi'];
        $penulis = $_POST['penulis'];
        $tanggal = $_POST['tanggal'];

        $sql = "INSERT INTO tblberita VALUES ('', '$judul', '$isi', '$penulis', '$tanggal', '$idKategori')";
        $tambah = mysqli_query($kon, $sql);

        if($tambah) {
            echo '<script>
                    alert("Berita berhasil disimpan.");
                    window.location.href = "index.php";
                </script>';
        }else{
            echo '<script>
                    alert("Berita gagal disimpan.");
                </script>';
        }
    }

?>

<section>
    <form action="create.php" method="post">
        <div class="mb-3">
            <legend>Tambah Berita</legend>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Berita" required>
        </div>
        <div class="mb-3">
            <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori">
                    <option>Pilih Kategori</option>
                    <?php foreach($kategori as $key => $value) : ?>
                     <option value="<?= $value['idKategori'] ?>"><?= $value['nama_kategori'] ?></option>
                    <?php endforeach; ?>
             </select>
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="isi" id="isi" rows="5" placeholder="Isi Berita"></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="penulis"  id="penulis" placeholder="Penulis" required>
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal Publish</label>
            <input type="date" name="tanggal" id="tanggal" required>
        </div>

        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
    </form>
</section>