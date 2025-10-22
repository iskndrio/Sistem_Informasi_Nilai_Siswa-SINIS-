<form action="" method="post">
    <table>
        <tr>
            <td>Id_ruang</td>
            <td><input type="text" name="id_ruang"></td>
        </tr>
        <tr>
            <td>ruang</td>
            <td><input type="text" name="ruang"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
<a href="halaman_admin.php?page=dataruang">CEK TABLE</a>
<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into data_ruang set
    id_ruang = '$_POST[id_ruang]',
    ruang = '$_POST[ruang]'");

    header("Location:halaman_admin.php?page=dataruang");
}

?>