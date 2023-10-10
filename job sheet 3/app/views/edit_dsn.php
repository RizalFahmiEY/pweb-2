<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
include '../classes/databasedsn.php';
$db = new database();
?>

<h3>Edit data Dosen</h3>
<form action="proses_dsn.php?aksi=update" method="post">
    <?php
    foreach($db->edit($_GET['id']) as $d){
    ?>
    <table>
        <tr>
            <td>
                NIDN
            </td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nidn" value="<?php echo $d['nidn'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                NAMA
            </td>
            <td>
                <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                TEMPAT LAHIR
            </td>
            <td>
                <input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Alamat
            </td>
            <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                AGAMA
            </td>
            <td>
                <input type="text" name="agama" value="<?php echo $d['agama'] ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </td>
        </tr>
    </table>
    <?php
    }
    ?>
</form>
</body>
</html>
