<?php

include_once '../../models/mahasiswa.php';

class mahasiswaController {
    private $model;
    public function __construct($db)
    {
        $this->model = new mahasiswa2($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($nim, $nama, $alamat)
    {
        return $this->model->crateMahasiswa($nim, $nama, $alamat);
    }

    public function getMahasiswaById($id){
        return $this->model->getMahasiswaById($id);
    }

    public function updateMahasiswa($id, $nim, $nama, $alamat){
        return $this->model->updateMahasiswa($id, $nim, $nama, $alamat);
    }

    public function deleteMahasiswa($id){
        return $this->model->deleteMahasiswa($id);
    }
}