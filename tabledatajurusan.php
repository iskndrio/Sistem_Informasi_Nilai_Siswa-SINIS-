<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="100">Id_Jurusan</th>
        <th width="100">Jurusan</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from data_jurusan");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
          <td>$no</td>
          <td>$tampil[id_jurusan]</td>
          <td>$tampil[jurusan]</td>
          <td><a href='?kode=$tampil[id_jurusan]'>Hapus</a></td>
          <td><a href='datajurusan-edit.php?kode=$tampil[id_jurusan]'>Edit</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['kode'])){

    mysqli_query($koneksi,"delete from data_jurusan where id_jurusan='$_GET[kode]'");

    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='dbjurusan.php'>";
}
?>