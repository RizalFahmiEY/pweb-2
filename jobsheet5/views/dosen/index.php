
<?php if (isset($_GET['message']) && $_GET['message'] == "true") { ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert" style="width: fit-content;">
                            <i data-feather="check-circle"></i>
                            <div style="margin-left: 20px;">
                                Data Dosen berhasil diubah
                            </div>
                        </div>

                    <?php
                        header("refresh:1.5; url=tampil_mhs.php");
                    } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == "false") { ?>
            <div class="alert alert-success d-flex align-items-center" role="alert" style="width: fit-content;">
                <i data-feather="check-circle"></i>
                <div style="margin-left: 20px;">
                    Data mahasiswa dosen dihapus
                </div>
            </div>

        <?php
            header("refresh:1.5; location:dosen");
        } ?>
    

    <?php
//memanggil pada class model 
include_once '../../config.php';
include_once '../../controllers/dosenController.php';
require '../../index.php';

//instansiasi class database
$database=new database;
$db = $database->getKoneksi();
$DosenController = new dosenController($db);
$dosen=$DosenController->getAllDosen();
?>
<div class="px-3 py-4">
    <h2>DATA DOSEN</h2>
<a href="tambah2" class="btn btn-success">Tambahkan Dosen</a>


<table class="table table-secondary table-borderless">
    <thead class="table-light">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    </thead>

    <?php
    $no = 1;
    foreach ($dosen as $x){

    
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nidn'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['prodi'] ?></td>
        <td>
            <a class="btn btn-warning" href="edit2/<?php echo $x['id']; ?>">edit</a>
            <a class="btn btn-danger" href="hapus2/<?php echo $x['id']; ?>"
            onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus')">hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</div>
</body>
</html> 