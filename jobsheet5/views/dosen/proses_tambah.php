<?php

include_once '../../config.php';
include_once '../../controllers/dosenController.php';

$database=new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $DosenController=new dosenController($db);
    $result=$DosenController->createDosen($nidn, $nama, $prodi);

    if($result){
        header("location:dosen");
    }
    else{
        header("location:tambah2.php");
    }
}