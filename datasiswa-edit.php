<?php

include "koneksi2.php";
$id = $_GET['id'];
$sql=mysqli_query($koneksi,"select * from data_siswa where id ='$_GET[id]'");
$data=mysqli_fetch_array($sql);


?>

<form action="" method="post">
    <table>
        <tr>
            <td>Nisn</td>
            <td><input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <input type="text" name="nisn" value="<?php echo $data['nisn']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki 
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><select name="kelas" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT * FROM data_siswa");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['kelas'];?>"><?php echo $data['kelas'];?></option>
                <?php
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td><select name="mapel" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT * FROM data_guru");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['mapel'];?>"><?php echo $data['mapel'];?></option>
                <?php
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><select name="jurusan" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT * FROM data_siswa");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['jurusan'];?>"><?php echo $data['jurusan'];?></option>
                <?php
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi2.php";

if(isset($_POST['proses'])) {
    mysqli_query($koneksi,"update data_siswa set
    nisn = '$_POST[nisn]',
    nama = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    kelas = '$_POST[kelas]',
    mapel = '$_POST[mapel]',
    jurusan = '$_POST[jurusan]',
    tempat_lahir = '$_POST[tempat_lahir]',
    alamat = '$_POST[alamat]'
    where id = '$_GET[id]'");

    header("Location:halaman_admin.php?page=datasiswa");

}

?>