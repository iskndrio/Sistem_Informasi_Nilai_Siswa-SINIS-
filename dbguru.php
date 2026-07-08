<?php ob_start(); ?>
<form action="" method="post">
    <table>
           <tr>
            <td>Nip</td>
            <td><input type="text" name="nip"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td><input type="text" name="mapel"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan"></td>
        </tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<a href="halaman_admin.php?page=dataguru">CEK TABLE</a>

<?php
include "koneksi2.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into data_guru set
    nip = '$_POST[nip]',
    nama = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    kelas = '$_POST[kelas]',
    mapel = '$_POST[mapel]',
    jurusan = '$_POST[jurusan]'");

    header("Location:halaman_admin.php?page=dataguru");

}

?>