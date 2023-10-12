<?php

include_once '../../models/dosen.php';

class dosenController {
    private $model;
    public function __construct($db)
    {
        $this->model = new dosen2($db);
    }

    public function getAllDosen()
    {
        return $this->model->getAllDosen();
    }

    public function createDosen($nidn, $nama, $prodi)
    {
        return $this->model->crateDosen($nidn, $nama, $prodi);
    }

    public function getDosenById($id){
        return $this->model->getDosenById($id);
    }

    public function updateDosen($id, $nidn, $nama, $prodi){
        return $this->model->updateDosen($id, $nidn, $nama, $prodi);
    }

    public function deleteDosen($id){
        return $this->model->deleteDosen($id);
    }
}