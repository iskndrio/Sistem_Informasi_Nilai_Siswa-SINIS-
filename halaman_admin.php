<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
    <link rel="stylesheet" href="haladmin.css">
</head>
<body>
	
    
    <header>
    <p class="hteks">SISTEM INFORMASI NILAI SISWA</p>
  </header>
  <nav>
  <label for="nteks" class="nteks">:Admin</label> <a href="logout.php" class="nteks2">LOGOUT</a>
  </nav>
  <section>
    <img src="my honest reaction.jfif" alt="">
    <p class="Data">
    <li><a href="halaman_admin.php?page=inputguru">Data Guru</a></li>
    <li><a href="halaman_admin.php?page=inputsiswa">Data Siswa</a></li>
    <li><a href="halaman_admin.php?page=inputmapel">Data Mapel</a></li>
    <li><a href="halaman_admin.php?page=inputjadwal">Data Jadwal</a></li>
    <li><a href="halaman_admin.php?page=inputruang">Data Ruang</a></li>
    <li><a href="halaman_admin.php?page=inputjurusan">Data Jurusan</a></li>
    </p>
  </section>
  <aside>
    
    <?php
  if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page) {
      case 'inputsiswa':
        include "dbsiswa.php";
        break;
      case 'inputguru':
        include "dbguru.php";
        break;
      case 'inputmapel':
        include "dbmapel.php";
        break;
      case 'inputnilai':
        include "dbnilai.php";
        break;
      case 'inputjadwal':
        include "dbjadwal.php";
        break;
      case 'inputruang':
        include "dbruang.php";
        break;
      case 'inputjurusan':
        include "dbjurusan.php";
        break;
      case 'dataguru':
        include "tabledataguru.php";
        break;
      case 'datasiswa':
         include "tabledatasiswa.php";
         break;
      case 'datamapel':
        include "tabledatamapel.php";
        break;
      case 'datajadwal':
        include "tabledatajadwal.php";
        break;
      case 'dataruang':
        include "tabledataruang.php";
        break;
      case 'datajurusan':
        include "tabledatajurusan.php";
        break;
      case 'editguru':
        include "dataguru-edit.php";
        break;
      case 'hapusguru':
        include "hapus.php";
        break;
      case 'editsiswa':
        include "datasiswa-edit.php";
        break;
      case 'hapussiswa':
          include "hapussiswa.php";
          break;
      case 'editmapel':
          include "datamapel-edit.php";
           break;
      case 'hapusmapel':
        include "hapusmapel.php";
        break;
      case 'hapusjadwal':
        include "hapusjadwal.php";
        break;
      case 'editjadwal':
        include "datajadwal-edit.php";
        break;
    }
  }
  else {
    include "home.php";
  }
  ?>
  </aside>
  <footer><label for="software" class="software">Software0719@gmail.com</label><label for="contact" class="contact">Contact: +6288112233</label></footer>
  </p>
</body>
</html