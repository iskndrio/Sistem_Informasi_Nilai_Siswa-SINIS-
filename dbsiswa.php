<form action="" method="post">
    <table>
        <tr>
            <td>Nis</td>
            <td><input type="text" name="nis"></td>
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
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
<a href="halaman_admin.php?page=datasiswa">CEK TABLE</a>

<?php
include "koneksi2.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into data_siswa set
    nisn = '$_POST[nis]',
    nama = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    kelas = '$_POST[kelas]',
    mapel = '$_POST[mapel]',
    jurusan = '$_POST[jurusan]',
    tempat_lahir = '$_POST[tempat_lahir]',
    alamat = '$_POST[alamat]'");

    header("Location:halaman_admin.php?page=datasiswa");
}

?>\
