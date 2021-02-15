<?php
include('koneksi.php');
if(isset($_GET['id_aduan'])) 
{
    $query = mysqli_query($koneksi,"select * from pengaduan where id_aduan='".$_GET['id_aduan']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar"];
}
else
{
    header('location:pengaduan.php');
}
?>