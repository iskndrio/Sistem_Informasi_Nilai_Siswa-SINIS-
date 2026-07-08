<?php
include "koneksi2.php";

$id = $_GET['id'];

if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "update data_jadwal set
        id_jadwal = '$_POST[id_jadwal]',
        jadwal = '$_POST[jadwal]'
        where id = '$id'");

    header("Location:halaman_admin.php?page=datajadwal");
    exit;
}

$sql = mysqli_query($koneksi, "select * from data_jadwal where id = '$id'");
$data = mysqli_fetch_array($sql);
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Id Jadwal</td>
            <td><input type="text" name="id_jadwal" value="<?php echo $data['id_jadwal']; ?>"></td>
        </tr>
        <tr>
            <td>Jadwal</td>
            <td><input type="text" name="jadwal" value="<?php echo $data['jadwal']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>