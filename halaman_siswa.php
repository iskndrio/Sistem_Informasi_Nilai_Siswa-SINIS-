<?php
session_start();

if (!isset($_SESSION['username']) || ($_SESSION['level'] ?? '') !== 'siswa') {
  header("Location:index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Siswa</title>
  <link rel="stylesheet" href="siswa.css">
</head>
<body>
  <header>
    <p class="hteks">SISTEM INFORMASI NILAI SISWA</p>
  </header>
  <nav>
  <label for="nteks" class="nteks">:Siswa</label> <label for="Logout" class="nteks2"><a href="logout.php">Logout</a></label>
  </nav>
  <section>
    <img src="my honest reaction.jfif" alt="">
    <ul class="Data">
      <li><a href="tabledatanilai.php">Data Nilai</a></li>
      <li><a href="tabledatamapel.php">Data Mapel</a></li>
      <li><a href="tabledatasiswa.php">Data Siswa</a></li>
      <li><a href="tabledatajurusan.php">Data Jurusan</a></li>
    </ul>
  </section>
  <aside>
    <h1>WELCOME TO SISWA PAGE</h1>
  </aside>
  <footer><label for="software" class="software">Software0719@gmail.com</label><label for="contact" class="contact">Contact: +6288112233</label></footer>
</body>
</html>