<table border="1">
    <tr>
        <th width="50">No</th>
        <th width="100">Id</th>
        <th width="100">Siswa</th>
        <th width="100">Kelas</th>
        <th width="100">Mapel</th>
        <th width="100">Guru</th>
        <th width="100">Nilai</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($koneksi, "select * from data_nilai");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
          <td>$no</td>
          <td>$tampil[id]</td>
          <td>$tampil[siswa]</td>
          <td>$tampil[kelas]</td>
          <td>$tampil[mapel]</td>
          <td>$tampil[guru]</td>
          <td>$tampil[nilai]</td>
        </tr>";
        $no++;
    }
    ?>
</table>