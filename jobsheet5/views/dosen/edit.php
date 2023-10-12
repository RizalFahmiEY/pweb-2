
<?php

include_once '../../config.php';
include_once '../../controllers/dosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $DosenController = new dosenController($db);
    $DosenData = $DosenController->getDosenById($id);

    if ($DosenData){
        if (isset($_POST['submit'])){
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];

            $result = $DosenController->updateDosen($id, $nidn, $nama, $prodi);
            if ($result){
                header("location:/jobsheet5/dosen");
            }
            else {
                header("location:edit.php");
            }
        }
    }
    else {
        echo "dosen tidak ditemukan";
    }
}
?>
<h3>Edit Data Dosen</h3>
<?php
if ($DosenData){
    ?>
    <form method="post">
        <?php
        foreach ($DosenData as $d =>$value){
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




