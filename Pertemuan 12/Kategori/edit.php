<?php 

include '../navbar.php';
include "../koneksi.php";

// Retrieve the 'id' parameter from the URL
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Retrieve the specific category to be edited
    $sql = "SELECT * FROM tblkategori WHERE idKategori = '$id'";
    $query = mysqli_query($kon, $sql);
    $kategori = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if(!$kategori) {
        echo '<script>
                alert("Kategori tidak ditemukan.");
                window.location.href = "index.php";
              </script>';
        exit();
    }
} else {
    echo '<script>
            alert("ID kategori tidak ditemukan.");
            window.location.href = "index.php";
          </script>';
    exit();
}

if(isset($_POST['edit'])) {
    $nama = $_POST['nama'];

    // Update the category
    $sql = "UPDATE tblkategori SET nama_kategori = '$nama' WHERE idKategori = '$id'";
    $edit = mysqli_query($kon, $sql);

    if($edit) {
        echo '<script>
                alert("Kategori berhasil diedit.");
                window.location.href = "index.php";
              </script>';
    } else {
        echo '<script>
                alert("Kategori gagal diedit.");
              </script>';
    }
}
?>

<section class="container mt-4">
    <form action="edit.php?id=<?= htmlspecialchars($id) ?>" method="post">
        <div class="mb-3">
            <legend>Edit Kategori</legend>
        </div>
        <div class="mb-3">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= htmlspecialchars($kategori['nama_kategori']) ?>" required>
        </div>
        <input type="submit" value="Edit" name="edit" class="btn btn-primary">
    </form>
</section>