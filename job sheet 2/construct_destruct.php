<?php

class mahasiswa{
    var $nim;
    var $nama;
    var $alamat;
    function __construct()
    {
        echo "Saya mahasiswa Teknik Informatika";
        echo "<br>";
    }
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
        echo "<br>";
    }
    function tampilkan_nim(){
        return "220102044 <br>";
    }
    function tampilkan_nama(){
        return "Nama saya Rizal Fahmi Eko Yusdianto <br>";
    }

    function tampilkan_alamat(){
        return "Alamat Saya desa Buntu Kecamatan Kroya <br>";
    }
    function tampilkan_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah <br> ";
    }
}
$nama_mahasiswa = new mahasiswa();

echo $nama_mahasiswa-> tampilkan_nim();
echo $nama_mahasiswa-> tampilkan_nama();
echo $nama_mahasiswa-> tampilkan_alamat();
echo $nama_mahasiswa-> tampilkan_mahasiswa();