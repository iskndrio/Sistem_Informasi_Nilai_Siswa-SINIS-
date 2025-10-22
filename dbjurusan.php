<form action="" method="post">
    <table>
        <tr>
            <td>Id_Jurusan</td>
            <td><input type="number" name="idjrs"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
            <select name="jurusan">
                    <option value="Rekayasa Perangkat Lunak">RPL</option>
                    <option value="Teknik Komputer Jaringan">TKJ</option>
                    <option value="Teknik Sepeda Motor">TSM</option>
                    <option value="Desain Komunikasi Visual">DKV</option>
                    <option value="Teknik Otomasi Industri">TOI</option>
                </select>
            </td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
<a href="halaman_admin.php?page=datajurusan">CEK TABLE</a>
<?php
include "koneksi2.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into data_jurusan set
    id_jurusan = '$_POST[idjrs]',
    jurusan = '$_POST[jurusan]'");

    header("Location:halaman_admin.php?page=datajurusan");
}

?>