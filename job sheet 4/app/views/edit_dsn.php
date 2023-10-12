<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIDN</label>
        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $d['id'] ?>">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nidn" value="<?php echo $d['nidn'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?php echo $d['nama'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">TEMPAT LAHIR</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
        <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat"><?php echo $d['alamat'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">AGAMA</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="agama" value="<?php echo $d['agama'] ?>">
    </div>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </td>
        </tr>

    <?php
    }
    ?>
</form>
</body>
</html>
