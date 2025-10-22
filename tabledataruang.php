<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="100">Id</th>
        <th width="100">Id_ruang</th>
        <th width="100">ruang</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from data_ruang");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
          <td>$no</td>
          <td>$tampil[id]</td>
          <td>$tampil[id_ruang]</td>
          <td>$tampil[ruang]</td>
          <td><a href='halaman_admin.php?page=hapusruang&id=$tampil[id]'>Hapus</a></td>
          <td><a href='halaman_admin.php?page=editruang&id=$tampil[id]'>Edit</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['id'])){

    mysqli_query($koneksi,"delete from data_ruang where id='$_GET[id]'");

    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='dbruang.php'>";
}
?>