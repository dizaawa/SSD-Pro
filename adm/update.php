<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_aduan       = $_POST['id_aduan'];
$kategori       = $_POST['kategori'];
$judul_pengaduan= $_POST['judul_pengaduan'];
$isi_aduan      = $_POST['isi_aduan'];
$gambar         = $_POST['gambar'];
$nama_pengadu   = $_POST['alamat'];
$contact        = $_POST['contact'];
$status         = $_POST['status'];
// query SQL untuk insert data
$query="UPDATE pengaduan SET id_aduan='$id_aduan',kategori='$kategori',judul_pengaduan='$judul_pengaduan',isi_aduan='$isi_aduan',gambar='$gambar',nama_pengadu='$nama_pengadu',contact='$contact',id_aduan='$id_aduan',status='$status',where id_aduan='$id_aduan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>
