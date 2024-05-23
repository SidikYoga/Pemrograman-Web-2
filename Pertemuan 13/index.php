<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Pertemuan 13 Search dan Pagination</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Pertemuan 13 Search & Pagination</span>
    </nav>
    <div class="container mt-4">
        <h4 class="text-center">DAFTAR PESERTA PELATIHAN</h4>
        <form method="GET" class="d-flex my-3">
            <input class="form-control me-2" type="search" name="search" placeholder="Search by name" aria-label="Search" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <?php
        include "koneksi.php";

        // Delete functionality
        if (isset($_GET["id_peserta"])) {
            $id = htmlspecialchars($_GET["id_peserta"]);
            $sql = "DELETE FROM peserta WHERE id_peserta='$id'";
            $hasil = mysqli_query($kon, $sql);

            if ($hasil) {
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger'>Data Gagal dihapus.</div>";
            }
        }

        // Search functionality
        $searchQuery = "";
        if (isset($_GET['search'])) {
            $search = htmlspecialchars($_GET['search']);
            $searchQuery = "WHERE nama LIKE '%$search%'";
        }

        // Pagination settings
        $limit = 10;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $totalQuery = "SELECT COUNT(*) AS total FROM peserta $searchQuery";
        $result = mysqli_query($kon, $totalQuery);
        $totalData = mysqli_fetch_assoc($result)['total'];
        $totalPages = ceil($totalData / $limit);

        $sql = "SELECT * FROM peserta $searchQuery ORDER BY id_peserta DESC LIMIT $limit OFFSET $offset";
        $hasil = mysqli_query($kon, $sql);

        echo "<table class='table table-success table-striped'>";
        echo "<thead class='table-primary'>";
        echo "<tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Sekolah</th>
                <th>Jurusan</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th colspan='2'>Aksi</th>
              </tr>
              </thead>
              <tbody>";

        while ($data = mysqli_fetch_assoc($hasil)) {
            echo "<tr>
                    <td>{$data['id_peserta']}</td>
                    <td>{$data['nama']}</td>
                    <td>{$data['sekolah']}</td>
                    <td>{$data['jurusan']}</td>
                    <td>{$data['no_hp']}</td>
                    <td>{$data['alamat']}</td>
                    <td>
                        <a href='update.php?id_peserta=" . htmlspecialchars($data['id_peserta']) . "' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "?id_peserta=" . $data['id_peserta'] . "' class='btn btn-danger btn-sm'>Hapus</a>
                    </td>
                  </tr>";
        }
        echo "</tbody></table>";
        ?>

        <nav>
            <ul class="pagination">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo isset($search) ? $search : ''; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
        
        <a href="create.php" class="btn btn-primary mt-3">Tambah Data</a>
    </div>
</body>
</html>
