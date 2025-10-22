<?php

include "koneksi2.php";
$id = $_GET['id'];
$sql=mysqli_query($koneksi,"select * from data_jadwal where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);


?>

<form action="" method="post">
    <table>
        <tr>
            <td>Id Jadwal</td>
            <td><select name="id_jadwal" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT * FROM data_guru");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['id_jadwal'];?>"><?php echo $data['id_jadwal'];?></option>
                <?php
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Jadwal</td>
            <td><select name="jadwal" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT * FROM data_guru");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['jadwal'];?>"><?php echo $data['jadwal'];?></option>
                <?php
                }
                ?>
            </select></td>
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
    mysqli_query($koneksi,"update data_jadwal set
    id_jadwal = '$_POST[id_jadwal]',
    jadwal = '$_POST[jadwal]',
    where id = '$_GET[id]'");


    header("Location:halaman_admin.php?page=datajadwal");

}

?>