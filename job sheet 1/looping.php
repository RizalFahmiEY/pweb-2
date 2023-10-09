<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Php</title>
</head>
<body>
    <?php
    // Menampilkan bilangan genap dari 1 sampai 10 menggunakan for loop
    echo "Perulangan bilangan genap dengan FOR dari 1 sampai 10:<br>";
    for ($i = 2; $i <= 10; $i += 2) { //proses perulangan
        echo "$i <br>";//untuk menampilkan layar 
    }

    echo "<br><br>";

    // Menampilkan bilangan ganjil dari 1 sampai 10 menggunakan while loop
    echo "Perulangan bilangan ganjil dengan While dari 1 sampai 10:<br>";
    $j = 1;//untuk j adalah bilangan 1
    while ($j <= 10) {//jika j kurang dari 10
        echo "$j  <br>";//maka akan tampil layar
        $j += 2;//dan j + 2
    }
    
    echo "<br><br>";

    echo "Perulangan bilangan prima dengan Do...While kurang dari 20: <br>";

    $num = 2;

    do {
        $is_prime = true;

        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $is_prime = false;
                break;
            }
        }

        if ($is_prime && $num < 20) {
            echo $num . " <br>";
        }

        $num++;
    } while ($num < 20);
    ?>



</body>
</html>