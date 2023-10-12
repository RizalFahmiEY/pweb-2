<?php

include_once '../../config.php';
include_once '../../controllers/mahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $MahasiswaController=new mahasiswaController($db);
    $result=$MahasiswaController->deleteMahasiswa($id);

    if ($result){
        header("location:/jobsheet5/mahasiswa");
    }
    else{
        echo "anda gagal menghapus";
    }
}