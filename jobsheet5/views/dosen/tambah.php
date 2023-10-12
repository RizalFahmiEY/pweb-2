<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tambah Dosen</title>
</head>
<body>
                <?php if (isset($_GET['message']) && $_GET['message'] == "true") { ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert" style="width: fit-content;">
                        <i data-feather="check-circle"></i>
                        <div style="margin-left: 20px;">
                            Data Dosen berhasil ditambahkan
                        </div>
                    </div>

                <?php
                    header("refresh:1; url=tampil_mhs.php");
                } ?>
            
<h3>Tambahkan Dosen</h3>
<form action="proses_tambah2" method="post">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nidn">
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAMA</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PRODI</label>
    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prodi"></textarea>
  </div>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="submit" class="btn btn-primary">
            </td>
        </tr>
    
</form>
</div>
</body>
</html>