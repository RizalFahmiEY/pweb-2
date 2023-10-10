<?php


class manusia{
    public $nama_saya;

    function panggil_nama($saya){
        $this->nama_saya = $saya;
    }

}
//untuk class turunan 
 class mahasiswa extends manusia{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
 }

 //memberikan objek atau instansiasi class mahasiswa

 $informatika=new mahasiswa();

 $informatika->panggil_nama("Rizal Fahmi Eko");
 $informatika->panggil_mahasiswa("Yusdianto");

 //menampilkan objek 
 echo "Nama Depan Saya: ". $informatika->nama_saya. "<br>";
 echo "Nama Belakang Saya: ". $informatika->nama_mahasiswa; 