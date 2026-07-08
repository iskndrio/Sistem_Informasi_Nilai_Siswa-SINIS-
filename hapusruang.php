<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from data_ruang where id='$id'");

echo "Data telah terhapus";
echo "<meta http-equiv=refresh content=1;URL='halaman_admin.php?page=dataruang'>";
?>