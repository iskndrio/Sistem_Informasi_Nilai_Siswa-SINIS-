<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="100">Id</th>
        <th width="100">Id_Mapel</th>
        <th width="100">Mapel</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from data_mapel");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
          <td>$no</td>
          <td>$tampil[id]</td>
          <td>$tampil[id_mapel]</td>
          <td>$tampil[mapel]</td>
          <td><a href='halaman_admin.php?page=hapusmapel&id=$tampil[id]'>Hapus</a></td>
          <td><a href='halaman_admin.php?page=editmapel&id=$tampil[id]'>Edit</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['id'])){

    mysqli_query($koneksi,"delete from data_mapel where id_mapel='$_GET[id]'");

}
?>