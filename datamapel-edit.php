<?php

include "koneksi2.php";
$id = $_GET['id'];
$sql=mysqli_query($koneksi,"select * from data_mapel where id_mapel='$_GET[id]'");
$data=mysqli_fetch_array($sql);


?>

<form action="" method="post">
    <table>
        <tr>
            <td>Id Mapel</td>
            <td><input type="text" name="id_mapel" value="<?php echo $data['id_mapel']; ?>"></td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td><input type="text" name="mapel" value="<?php echo $data['mapel']; ?>"></td>
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
    mysqli_query($koneksi,"update data_mapel set
    mapel = '$_POST[mapel]',
    id_mapel = '$_POST[id_mapel]'");

    header("Location:halaman_admin.php?page=datamapel");
}

?>