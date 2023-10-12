<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD PHP</title>
</head>
<body .bg-black.bg-gradient>
    

<?php
include '../classes/database.php';

$db = new database;
?>

<div class="px-3 py-4">
<a href="tampil_mhs.php"class="btn btn-primary">Mahasiswa</a>
<a href="tampil_dsn.php"class="btn btn-primary">Dosen</a>
</div>

<div class="px-3 py-10">
<a href="input_mhs.php" class="btn btn-success">Tambahkan Mahasiswa</a>
</div>

<table class="table table-secondary table-borderless">
    <thead class="table-light">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    </thead>

    <?php
    $no = 1;
    foreach ($db->tampil_mahasiswa() as $x){

    
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-primary">edit</a>
            <a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>