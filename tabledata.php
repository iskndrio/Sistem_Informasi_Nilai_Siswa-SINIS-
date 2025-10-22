<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="100">Nip</th>
        <th width="100">Nama</th>
        <th width="100">Jenis_Kelamin</th>
        <th width="100">Tanggal_Lahir</th>
        <th width="100">Id_Kelas</th>
        <th width="100">Id_Mapel</th>
        <th width="100">Id_Jurusan</th>
        <th width="100">Username</th>
        <th width="100">Password</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from data_guru");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
          <td>$no</td>
          <td>$tampil[nip]</td>
          <td>$tampil[nama]</td>
          <td>$tampil[jenis_kelamin]</td>
          <td>$tampil[tanggal_lahir]</td>
          <td>$tampil[id_kelas]</td>
          <td>$tampil[id_mapel]</td>
          <td>$tampil[id_jurusan]</td>
          <td>$tampil[username]</td>
          <td>$tampil[password]</td>
          <td><a href='?kode=$tampil[nip]'>Hapus</a></td>
          <td><a href='dataguru-edit.php?kode=$tampil[nip]'>Edit</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['kode'])){

    mysqli_query($koneksi,"delete from data_guru where nip='$_GET[kode]'");

    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='dbguru.php'>";
}
?>