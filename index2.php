<?php
    // $_GET["nama"] = "Siti";
    // $_GET["prodi"] = "Informatika";
    // var_dump($_GET);

    $mahasiswa = [
        [
            "nama" => "Elma Theana", // ARRAY
            "nim" => "110120009",
            "jurusan" => "Teknik Informatika",
            "tlp" => "+6285381123466",
            "alamat" => "Pekan Baru",
            "gambar" => "img/picwom1.jpg"
        ],
        [
            "nama" => "Diza Rafengga", // ARRAY
            "nim" => "110120011",
            "jurusan" => " Sistem Informasi",
            "tlp" => "+6282261889205",
            "alamat" => "Aceh Tenggara",
            "gambar" => "img/picman1.jpg"
        ], 
        [
            "nama" => "Amanda Salmakhira", // ARRAY
            "nim" => "110120020",
            "jurusan" => "Akuntansi",
            "tlp" => "+6281248602234",
            "alamat" => "Surabaya",
            "gambar" => "img/picwom2.jpg"
        ], 
        [
            "nama" => "Hendra Wirajaya", // ARRAY
            "nim" => "110120001",
            "jurusan" => "Hukum ",
            "tlp" => "+6285281267871",
            "alamat" => "Sulawesi Selatan",
            "gambar" => "img/picman2.jpg"

        ], 
        [
            "nama" => "Sheryl Perdana", // ARRAY
            "nim" => "110120007",
            "jurusan" => "Teknologi Informasi",
            "tlp" => "+6281363558024",
            "alamat" => "Kalimantan Barat",
            "gambar" => "img/picwom3.jpg"
        ]
        
    ];


?>

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
  <h1>Daftar Mahasiswa</h1>
    <div class="container">
        <ul>
            <?php foreach($mahasiswa as $mhs) { ?>
                <li>
                <a href="index3.php?nama=<?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&tlp=<?php echo $mhs["tlp"]; ?>&alamat=<?php echo $mhs["alamat"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a>
                </li>
              

            <?php } ?>
        </ul>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


