<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="100">id</th>
        <th width="100">Nip</th>
        <th width="100">Nama</th>
        <th width="100">Jenis_Kelamin</th>
        <th width="100">Tanggal_Lahir</th>
        <th width="100">Kelas</th>
        <th width="100">Mapel</th>
        <th width="100">Jurusan</th>
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
          <td>$tampil[id]</td>
          <td>$tampil[nip]</td>
          <td>$tampil[nama]</td>
          <td>$tampil[jenis_kelamin]</td>
          <td>$tampil[tanggal_lahir]</td>
          <td>$tampil[kelas]</td>
          <td>$tampil[mapel]</td>
          <td>$tampil[jurusan]</td>
          <td><a href='halaman_admin.php?page=hapusguru&id=$tampil[id]'>Hapus</a></td>
          <td><a href='halaman_admin.php?page=editguru&id=$tampil[id]'>Edit</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['kode'])){

    mysqli_query($koneksi,"delete from data_guru where id='$_GET[id]'");

    echo "Data telah terhapus";
}
?>