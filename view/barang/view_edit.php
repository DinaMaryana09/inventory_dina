<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../barang/index.php">Barang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
    $id_barang=$_GET['id'];
    include '../../config/koneksi.php';
    $query= mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result= mysqli_fetch_array($query);
?>

<div class="container"> 
  <h1>Tambah Data Barang Baru</h1>
<form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="POST">
  <div class="mb-3">
    <label class="form-label">ID Barang</label>
    <input type="text" class="form-control" value="<?php echo $result['id_barang']?>" name="id_barang" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Barang</label>
    <input type="text" class="form-control" value="<?php echo $result['nama_barang']?>" name="nama_barang" required>
  </div>
  <div class="mb-3">
    <label class="form-label">ID Jenis</label>
    <input type="number" class="form-control" value="<?php echo $result['id_jenis']?>" name="id_jenis" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="number" class="form-control" value="<?php echo $result['harga']?>" name="harga" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Stok</label>
    <input type="number" class="form-control" value="<?php echo $result['stok']?>" name="stok" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>