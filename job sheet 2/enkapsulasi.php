<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkapsulasi Php</title>
</head>
<body>
<?php
class Ikan {
    private $nama;
    protected $panjang;

    public function __construct($nama, $panjang) {
        $this->nama = $nama;
        $this->panjang = $panjang;
    }

    private function getNama() {
        return $this->nama;
    }

    protected function getPanjang() {
        return $this->panjang;
    }

    public function informasiIkan() {
        $nama = $this->getNama();
        $panjang = $this->getPanjang();
        echo "Ikan ini adalah $nama dengan panjang $panjang cm. <br>";
    }
}

class Airtawar extends Ikan {
    public function setPanjang($panjang){
        $this->panjang = $panjang;
    }
    
    public function tampilkanInformasi() {
        echo "Ikan ini memiliki panjang $this->panjang cm.";
    }

}

$hewan = new Airtawar("Nila", "60");
$hewan->informasiIkan();
$hewan->tampilkanInformasi();
$hewan->setPanjang(60);

?>


</body>
</html>