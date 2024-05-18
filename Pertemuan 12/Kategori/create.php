<?php 

    include '../navbar.php';
    include "../koneksi.php";

    $sql = "SELECT * FROM tblkategori";
    $query = mysqli_query($kon, $sql);
    $kategori = $query->fetch_all(MYSQLI_ASSOC);

    if(isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama= $_POST['nama'];

        $sql = "INSERT INTO tblkategori VALUES ('$id', '$nama')";
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
            <legend>Tambah Kategori</legend>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="id" id="id" placeholder="ID Kategori" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="nama"  id="nama" placeholder="Nama Kategori" required>
        </div>

        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
    </form>
</section>