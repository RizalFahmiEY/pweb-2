<?php

include_once '../../config.php';
include_once '../../controllers/dosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $DosenController=new dosenController($db);
    $result=$DosenController->deleteDosen($id);

    if ($result){
        header("location:/jobsheet5/dosen");
    }
    else{
        echo "anda gagal menghapus";
    }
}