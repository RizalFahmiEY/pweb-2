<?php

class mahasiswa2
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM mahasiswa2";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function crateMahasiswa($nim, $nama, $alamat)
    {
        $query= "INSERT INTO mahasiswa2 (nim, nama, alamat) VALUES('$nim', '$nama', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    public function getMahasiswaById($id)
    {
        $query = "SELECT * FROM mahasiswa2 where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($id, $nim, $nama, $alamat){
        $query="UPDATE mahasiswa2 set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }
        else {
            return false;
        }
    }

    public function deleteMahasiswa($id){
        $query = "DELETE FROM mahasiswa2 WHERE id= $id";
        $result = mysqli_query($this->koneksi, $query);

        if ($result){
            return true;
        }
        else {
            return false;
        }
    }
}