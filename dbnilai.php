<form action="" method="post">
    <table>
        <tr>
            <td>No</td>
            <td><input type="number" name="idjrs"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td></td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
<a href="datajurusan-edit.php">EDIT</a> &
<a href="tabledatajurusan.php">CEK TABLE</a>
<?php
include "koneksi2.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into data_jurusan set
    id_jurusan = '$_POST[idjrs]',
    jurusan = '$_POST[jurusan]'");

    echo "Data telah tersimpan";
   echo "<meta http-equiv=refresh content=1;URL='dbjurusan.php'>";
}

?>