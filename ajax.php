<?php

$koneksi = mysqli_connect("localhost","root","","dbguru1");

$nama = $_GET['nama'];

$query = mysqli_query($koneksi, "select kelas form data_guru where nama='$nama'");
$guru = mysqli_fetch_array($query);
$data = array(
    'kelas'  =>   @$guru['kelas'],
);

echo json_decode($data);
?>