<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>CRUD PHP</title>
    <title>CRUD PHP</title>
</head>
<body>
<div class="px-3 py-4">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dsn.php">Dosen</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
<?php if (isset($_GET['message']) && $_GET['message'] == "true") { ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert" style="width: fit-content;">
                            <i data-feather="check-circle"></i>
                            <div style="margin-left: 20px;">
                                Data mahasiswa berhasil diubah
                            </div>
                        </div>

                    <?php
                        header("refresh:1.5; url=tampil_dsn.php");
                    } ?>  

<?php if (isset($_GET['message']) && $_GET['message'] == "false") { ?>
            <div class="alert alert-success d-flex align-items-center" role="alert" style="width: fit-content;">
                <i data-feather="check-circle"></i>
                <div style="margin-left: 20px;">
                    Data mahasiswa berhasil dihapus
                </div>
            </div>

        <?php
            header("refresh:1.5; url=tampil_dsn.php");
        } ?>
<?php
include '../classes/databasedsn.php';

$db = new database;
?>
<div class="px-3 py-4">
    <h2>DATA DOSEN</h2>
<a href="input_dsn.php" class="btn btn-success">Tambahkan Dosen</a>
<table class="table table-secondary table-borderless">
    <thead class="table-light">
    <tr>
        <th>No</th>
        <th>Nidn</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Alamat</th>
        <th>Agama</th>
    </tr>
    </thead>

    <?php
    $no = 1;
    foreach ($db->tampil_dosen() as $x){

    
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nidn'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['tempat_lahir'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td><?php echo $x['agama'] ?></td>
        <td>
            <a href="edit_dsn.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-primary">edit</a>
            <a href="proses_dsn.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</div>
</body>
</html>