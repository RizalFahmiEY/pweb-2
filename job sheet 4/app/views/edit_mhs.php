<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Mahasiswa</title>
</head>
<body>

<?php
include '../classes/database.php';
$db = new database();
?>

<h3>Edit data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach($db->edit($_GET['id']) as $d){
    ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIM</label>
        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $d['id'] ?>">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim" value="<?php echo $d['nim'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?php echo $d['nama'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
        <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat"><?php echo $d['alamat'] ?></textarea>
    </div>
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
