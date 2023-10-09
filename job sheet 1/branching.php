<!DOCTYPE html>
<html>
<head>
    <title>Branching Php</title>
</head>
<body>
    <h1>Mengecek Angka</h1>
    <form method="POST" action="">
        <label for="angka">Angka:</label>
        <input type="text" name="angka" id="angka">
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];
        
        if (!is_numeric($angka)) {
            echo "Silakan masukkan angka.";
        } 
        else {
            $angka = (int)$angka;

            if ($angka > 0) {
                echo "Angka Yang Anda Masukkan Positif";
            } 
            elseif ($angka < 0) {
                echo "Angka Yang Anda Masukkan Negatif";
            } 
            else 
                echo "Angka Yang Anda Masukkan Nol";
            
        
        }
    }
    ?>
</body>
</html>
