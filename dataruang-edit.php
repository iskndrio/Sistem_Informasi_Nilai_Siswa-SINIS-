<?php

include "koneksi2.php";
$sql=mysqli_query($koneksi,"select * from data_ruang where id='$_GET[kode]'");
$data=mysqli_fetch_array($sql);


?>

<form action="" method="post">
    <table>
        <tr>
            <td>Id Kelas</td>
            <td><input type="text" name="id_kelas" value="<?php echo $data['id_kelas']; ?>"></td>
        </tr>
        <tr>
            <td>Ruang</td>
            <td><input type="text" name="ruang" value="<?php echo $data['ruang']; ?>"></td>
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
    mysqli_query($koneksi,"update data_ruang set
    id_kelas = '$_POST[id_kelas]',
    ruang = '$_POST[ruang]'
    where id = '$_GET[kode]'");

    echo "Data telah di Edit";
    echo "<meta http-equiv=refresh content=1;URL='dbruang.php'>";
}

?>