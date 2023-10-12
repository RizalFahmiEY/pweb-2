<?php

include_once '../../config.php';
include_once '../../controllers/mahasiswaController.php';

$database=new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $MahasiswaController=new mahasiswaController($db);
    $result=$MahasiswaController->createMahasiswa($nim, $nama, $alamat);

    if($result){
        header("location:mahasiswa");
    }
    else{
        header("location:tambah.php");
    }
}