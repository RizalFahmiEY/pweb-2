<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Php</title>
</head>
   

<body>
    <h3>Menghitung Luas Persegi</h3>
    <form method="POST" action="">
        <label for="sisi">sisi:</label>
        <input type="text" name="sisi" id="sisi">
        <input type="submit" value="Cek">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisi = $_POST["sisi"];

        if (!is_numeric($sisi)) {
            echo "Silakan masukkan angka.";
        } 
        else {
            $luas = $sisi * $sisi;
            echo "Sisi persegi: $sisi <br>";
            echo "Luas persegi: $luas";
        }

    }
    
    
    ?>

    <h3>Menghitung Luas Lingkaran</h3>
    <form method="POST" action="">
        <label for="rusuk">rusuk:</label>
        <input type="text" name="rusuk" id="rusuk">
        <input type="submit" value="Cek">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rusuk = $_POST["rusuk"];

        if (!is_numeric($rusuk)) {
            echo "Silakan masukkan panjang rusuk.";
        } 
        else {
            $luas = 3.14 * $rusuk  *$rusuk;
            echo "Panjang rusuk lingkaran: $rusuk <br>";
            echo "Luas lingkaran: $luas";
        }

    }
    
    ?>

</body>
</html>