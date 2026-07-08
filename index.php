<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Sistem Informasi Nilai Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="page-shell">
		<section class="hero-panel">
			<p class="eyebrow">Sistem Informasi Nilai Siswa</p>
			<h1>Masuk ke dashboard dengan tampilan yang lebih bersih dan nyaman.</h1>
			<p class="hero-text">Kelola data guru, siswa, jadwal, mapel, ruang, dan jurusan dalam satu tempat.</p>
			<div class="hero-badges">
				<span>Admin</span>
				<span>Guru</span>
				<span>Siswa</span>
			</div>
		</section>

		<section class="login-card">
			<div class="card-header">
				<p class="card-title">Silahkan login</p>
				<p class="card-subtitle">Gunakan username dan password Anda</p>
			</div>

			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="gagal"){
					echo "<div class='alert'>Username dan password tidak sesuai.</div>";
				}
			}
			?>

			<form action="cek_login.php" method="post" class="login-form">
				<label for="username">Username</label>
				<input id="username" type="text" name="username" class="form_login" placeholder="Masukkan username" required>

				<label for="password">Password</label>
				<input id="password" type="password" name="password" class="form_login" placeholder="Masukkan password" required>

				<input type="submit" class="tombol_login" value="Masuk">

				<p class="footer-note">
					Login untuk melanjutkan ke halaman sesuai level pengguna.
				</p>
			</form>
		</section>
	</div>
</body>
</html>