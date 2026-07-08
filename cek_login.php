<?php
session_start();

include 'koneksi.php';

if (!isset($_POST['username'], $_POST['password'])) {
	header("Location:index.php?pesan=gagal");
	exit;
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if ($username === '' || $password === '') {
	header("Location:index.php?pesan=gagal");
	exit;
}

$username = mysqli_real_escape_string($koneksi, $username);
$password = mysqli_real_escape_string($koneksi, $password);

$login = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password' limit 1");

if ($login && mysqli_num_rows($login) > 0) {
	$data = mysqli_fetch_assoc($login);
	$_SESSION['username'] = $data['username'];
	$_SESSION['level'] = $data['level'];
	
	session_regenerate_id(true);

	if ($data['level'] === 'admin') {
		header("Location:halaman_admin.php");
		exit;
	}

	if ($data['level'] === 'siswa') {
		header("Location:halaman_siswa.php");
		exit;
	}

	if ($data['level'] === 'guru') {
		header("Location:halaman_guru.php");
		exit;
	}
}

header("Location:index.php?pesan=gagal");
exit;