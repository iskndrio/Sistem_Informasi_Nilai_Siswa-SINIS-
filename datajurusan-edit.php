<form action="" method="post">
    <table>
        <tr>
            <td>Id_Jurusan</td>
            <td><input type="number" name="idjrs" value="<?php echo $data['id_jurusan']; ?>"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
            <select name="jurusan" value="<?php echo $data['jurusan']; ?>">
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

<?php
include "koneksi2.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi,"update data_jurusan set
    
    jurusan = '$_POST[jurusan]'");

    echo "Data telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='dbjurusan.php'>";
}

?>