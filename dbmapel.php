<?php ob_start(); ?>
<form action="" method="post">
    <table>
        <tr>
            <td>Id_Mapel</td>
            <td><select name="id_mapel" style="width:160px;">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT * FROM data_mapel");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['id_mapel'];?>"><?php echo $data['id_mapel'];?></option>
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
                $query    =mysqli_query($koneksi, "SELECT * FROM data_mapel");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['mapel'];?>"><?php echo $data['mapel'];?></option>
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
<a href="halaman_admin.php?page=datamapel">CEK TABLE</a>
<?php
include "koneksi2.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into data_mapel set
    id_mapel = '$_POST[id_mapel]',
    mapel = '$_POST[mapel]'");

    header("Location:halaman_admin.php?page=datamapel");
}

?>