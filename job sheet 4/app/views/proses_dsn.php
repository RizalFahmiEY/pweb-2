<?php
include '../classes/databasedsn.php';
$db = new database();


$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $db->tambah_dsn($_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['alamat'], $_POST['agama']);

    header("location:input_dsn.php?message=true");
}
elseif ($aksi=="update") {
    $db->update($_POST['id'],$_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['alamat'], $_POST['agama']);
    header("location:tampil_dsn.php?message=true");
}
elseif ($aksi=="hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_dsn.php?message=false");
}
?>