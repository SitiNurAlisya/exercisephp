<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <div class="box">
  <div class="card" style="width: 25rem; margin-right: 70px; margin-bottom: 100px; ">
  <img src="<?php echo $_GET["gambar"]; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title" style="margin-top: 20px;">Detail Mahasiswa</h1>
       <ul class="list-group list-group-flush">
          <li class="list-group-item">Nama : <?php echo $_GET["nama"]; ?></li>
          <li class="list-group-item">NIM : <?php echo $_GET["nim"]; ?></li>
          <li class="list-group-item">Jurusan : <?php echo $_GET["jurusan"]; ?></li>
          <li class="list-group-item">Telepon : <?php echo $_GET["tlp"]; ?></li>
          <li class="list-group-item">Alamat : <?php echo $_GET["alamat"]; ?></li>
          <br>
        </ul>
    <a href="index2.php" class="btn btn-primary">Back</a>
    <a href="index.php" class="btn btn-primary">logout</a>
  </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
