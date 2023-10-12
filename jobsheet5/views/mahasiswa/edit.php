
<?php

include_once '../../config.php';
include_once '../../controllers/mahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $MahasiswaController = new mahasiswaController($db);
    $MahasiswaData = $MahasiswaController->getMahasiswaById($id);

    if ($MahasiswaData){
        if (isset($_POST['submit'])){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $MahasiswaController->updateMahasiswa($id, $nim, $nama, $alamat);
            if ($result){
                header("location:/jobsheet5/mahasiswa");
            }
            else {
                header("location:edit.php");
            }
        }
    }
    else {
        echo "mahasiswa tidak ditemukan";
    }
}
?>
<h3>Edit Data Mahasiswa</h3>
<?php
if ($MahasiswaData){
    ?>
    <form method="post">
        <?php
        foreach ($MahasiswaData as $d =>$value){
            ?>
                <table border="0">
                    <tr>
                        <td width="100">
                            <?php
                            echo $d;
                            ?>
                        </td>
                        <td>
                            <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Simpan">
                    </td>
                </tr>
                </table>
    </form>
    <?php
}
    ?>




