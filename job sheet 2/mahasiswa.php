<?php

class mahasiswa{
    var $nim;
    var $nama;
    var $alamat;
    function tampilkan_nim(){
        return "220102044 <br>";
    }
    function tampilkan_nama(){
        return "Nama saya Rizal Fahmi Eko Yusdianto <br>";
    }

    function tampilkan_alamat(){
        return "Alamat Saya desa Buntu Kecamatan Kroya <br> <br>";
    }
}

class dosen{
    var $nidn;
    var $namadosen;
    var $prodi;

    function tampilkan_nidn(){
        return "Nidn 10281627 <br>";
    }
    function tampilkan_namadosen(){
        return "Nama saya Rizal Fahmi <br>";
    }
    function tampilkan_prodi(){
        return "saya mengampuh prodi Informatika <br>";
    }
}
 
$nama_mahasiswa = new mahasiswa();

echo $nama_mahasiswa-> tampilkan_nim();
echo $nama_mahasiswa-> tampilkan_nama();
echo $nama_mahasiswa-> tampilkan_alamat();

$nama_dosen = new dosen();
echo $nama_dosen-> tampilkan_nidn();
echo $nama_dosen-> tampilkan_namadosen();
echo $nama_dosen-> tampilkan_prodi();