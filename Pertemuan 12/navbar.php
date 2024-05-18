<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<?php
$currentFile = basename($_SERVER['PHP_SELF']);
$homePath = ($currentFile === 'index.php') ? 'index.php' : '/index.php';
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand <?= ($currentFile === 'index.php') ? 'active' : '' ?>" href="../index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= ($currentFile === 'index.php') ? 'active' : '' ?>" href="Berita/index.php">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($currentFile === '../Kategori/index.php') ? 'active' : '' ?>" href="../Kategori/index.php">Kategori</a>
        </li>
      </ul>
    </div>
  </div>
</nav>