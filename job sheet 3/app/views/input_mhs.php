<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<h3>Tambahkan Mahasiswa</h3>
<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
    <tr>
            <td>
                NIM
            </td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>
                NAMA
            </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>
                Alamat
            </td>
            <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" class="btn btn-primary">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
