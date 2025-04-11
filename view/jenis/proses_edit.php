<?php

$id = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"
    UPDATE barang SET
    UPDATE jenis SET
    nama_jenis='$nama_jenis'
    WHERE id_jenis='$id'
");
if($query) {
    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal diedit')</script>";
    echo "<script>window.location.href='view_edit.php'</script>";
}
?>