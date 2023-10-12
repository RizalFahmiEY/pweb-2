
                      <?php if (isset($_GET['message']) && $_GET['message'] == "true") { ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert" style="width: fit-content;">
                            <i data-feather="check-circle"></i>
                            <div style="margin-left: 20px;">
                                Data mahasiswa berhasil diubah
                            </div>
                        </div>

                    <?php
                        header("refresh:1.5; url=tampil_mhs.php");
                    } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == "false") { ?>
            <div class="alert alert-success d-flex align-items-center" role="alert" style="width: fit-content;">
                <i data-feather="check-circle"></i>
                <div style="margin-left: 20px;">
                    Data mahasiswa berhasil dihapus
                </div>
            </div>

        <?php
            header("refresh:1.5; url=tampil_mhs.php");
        } ?>
    

    <?php
//memanggil pada class model 
include_once '../../config.php';
include_once '../../controllers/mahasiswaController.php';
require '../../index.php';

//instansiasi class database
$database=new database;
$db = $database->getKoneksi();
$MahasiswaController = new mahasiswaController($db);
$mahasiswa=$MahasiswaController->getAllMahasiswa();
?>
<div class="px-3 py-4">
    <h2>DATA MAHASISWA</h2>
<a href="tambah" class="btn btn-success">Tambahkan Mahasiswa</a>


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
    foreach ($mahasiswa as $x){

    
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">edit</a>
            <a class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>"
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