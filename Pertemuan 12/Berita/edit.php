<?php 

    include '../navbar.php';
    include "../koneksi.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM tblberita WHERE idBerita = '$id'";
    $query = mysqli_query($kon, $sql);
    $berita = $query->fetch_array(MYSQLI_ASSOC);

    $sql = "SELECT * FROM tblkategori";
    $query = mysqli_query($kon, $sql);
    $kategori = $query->fetch_all(MYSQLI_ASSOC);

    if(isset($_POST['edit'])) {
        $judul = $_POST['judul'];
        $idKategori = $_POST['kategori'];
        $isi = $_POST['isi'];
        $penulis = $_POST['penulis'];
        $tanggal = $_POST['tanggal'];

        $sql = "UPDATE tblberita SET judulberita = '$judul', isiberita = '$isi', penulis = '$penulis', tglpublis = '$tanggal', idKategori = '$idKategori' WHERE idBerita = '$id'";
        $edit = mysqli_query($kon, $sql);

        if($edit) {
            echo '<script>
                    alert("Berita berhasil diedit.");
                    window.location.href = "index.php";
                </script>';
        }else{
            echo '<script>
                    alert("Berita gagal diedit.");
                </script>';
        }
    }
    

?>

<section>
    <form action="edit.php?id=<?= $id ?>" method="POST">
    <div class="mb-3">
            <legend>Edit Berita</legend>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="judul" id="judul"  value="<?= $berita['judulberita'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori">
                    <option>Pilih Kategori</option>
                    <?php foreach($kategori as $key => $value) : ?>
                    <option value="<?= $value['idKategori'] ?>" <?= $value['idKategori'] == $berita['idKategori'] ? 'selected' : ''?>><?= $value['nama_kategori'] ?></option>
                    <?php endforeach; ?>
             </select>
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="isi" id="isi" rows="5" required><?= htmlspecialchars($berita['isiberita']) ?></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="penulis"  id="penulis" value="<?= $berita['penulis'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal Publis</label>
            <input type="date" name="tanggal" id="tanggal"  value="<?= date('Y-m-d', strtotime($berita['tglpublis'])) ?>" required>
        </div>

        <input type="submit" value="Edit Berita" name="edit" class="btn btn-warning btn-sm mb-3">
    </form>
</section>
