<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="100">Id</th>
        <th width="100">Id_Jadwal</th>
        <th width="100">Jadwal</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from data_jadwal");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
          <td>$no</td>
          <td>$tampil[id]</td>
          <td>$tampil[id_jadwal]</td>
          <td>$tampil[jadwal]</td>
          
          <td><a href='halaman_admin.php?page=hapusjadwal&id=$tampil[id]'>Hapus</a></td>
          <td><a href='halaman_admin.php?page=editjadwal&id=$tampil[id]'>Edit</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>