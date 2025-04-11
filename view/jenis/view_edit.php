<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jenis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php 
    $id=$_GET['id'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis='$id'");
    $result=mysqli_fetch_array($query);
?>
<div class="container mt-5">
    <form action="proses_edit.php?id=<?php echo $result['id_jenis']?>" method="POST">
            <div class="mb-3">
                <label class="from-label">id jenis</label>
                <input type="number" class="form-control" value="<?php echo $result ['id_jenis']?>" name="id_jenis" required>
            </div>
            <div class="mb-3">
                <label class="from-label">nama jenis</label>
                <input type="text"class="form-control" value="<?php echo $result ['nama_jenis']?>" name="nama_jenis" required>
            </div>
            <button type="sumbit" class="btn btn-primary">Sumbit</button>
        </form>
</div>

<script link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>


</body>
</html>