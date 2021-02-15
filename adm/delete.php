<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_aduan   = $_GET['id_aduan'];
// query SQL untuk insert data
$query="DELETE from pengaduan where id_aduan='$id_aduan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>