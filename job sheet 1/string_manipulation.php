<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation Php</title>
</head>
<body>
    <?php
    $string = "Selamat belajar PHP";

    // Mengubah string menjadi huruf kapital
    $string_kapital = strtoupper($string);

    // Mengubah string menjadi huruf kecil
    $string_kecil = strtolower($string);

    // Memotong string
    $memotong = substr($string, 0, 7); // Memotong string dari karakter pertama sampai karakter ke-10

    // Cetak hasil
    echo "Kalimat yang ingin diubah $string <br>";
    echo "String dalam huruf kapital: $string_kapital <br>";
    echo "String dalam huruf kecil: $string_kecil <br>";
    echo "Potongan string: $memotong";
    ?>

</body>
</html>