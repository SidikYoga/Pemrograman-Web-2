<?php
    include '../navbar.php';
    include "../koneksi.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        
        $sql = "DELETE FROM tblkategori WHERE idKategori = '$id'";

       
        if (mysqli_query($kon, $sql)) {
            echo '<script>
                        alert("Kategori berhasil dihapus."); 
                        window.location.href="index.php";
                </script>';
            exit();
        } else {
            
            echo "Error: " . mysqli_error($kon);
        }
    } else {
        header("Location: index.php");
        exit();
    }
?>