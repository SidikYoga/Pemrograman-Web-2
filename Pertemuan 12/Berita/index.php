<?php 
    include '../koneksi.php';

    $query = "SELECT * FROM tblberita JOIN tblkategori USING(idKategori) ORDER BY tglpublis DESC";
    $data = mysqli_query($kon, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</head>
<body>

<?php include '../navbar.php'; ?>

<section class="container mt-4">
    <h1>Daftar Berita</h1>

    <a href="create.php" class="btn btn-primary mb-3">Tambah Berita</a>

    <div class="table-responsive">
        <table class="table table-striped table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th>Nama Kategori</th>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>Penulis</th>
                    <th>Tanggal Publish</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($data) > 0): ?>
                    <?php while($value = mysqli_fetch_assoc($data)): ?>
                        <tr>
                            <td><?= htmlspecialchars($value['nama_kategori']) ?></td>
                            <td><?= htmlspecialchars($value['judulberita']) ?></td>
                            <td><?= htmlspecialchars($value['isiberita']) ?></td>
                            <td><?= htmlspecialchars($value['penulis']) ?></td>
                            <td><?= htmlspecialchars($value['tglpublis']) ?></td>
                            <td>
                                <a href="edit.php?id=<?= htmlspecialchars($value['idBerita']) ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
                                <a href="delete.php?id=<?= htmlspecialchars($value['idBerita']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada berita tersedia</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
</section>

</body>
</html>