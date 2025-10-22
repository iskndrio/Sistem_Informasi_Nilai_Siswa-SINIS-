<form action="" method="post">
    <table>
        <tr>
            <td>Id_Jadwal</td>
            <td><input type="text" name="id_jadwal" id=""></td>
        </tr>
        <tr>
            <td>Jadwal</td>
            <td><input type="text" name="jadwal"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
<a href="halaman_admin.php?page=datajadwal">CEK TABLE</a>
<?php
include "koneksi2.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into data_jadwal set
    id_jadwal = '$_POST[id_jadwal]',
    jadwal = '$_POST[jadwal]'");


    header("Location:halaman_admin.php?page=datajadwal");
}

?>