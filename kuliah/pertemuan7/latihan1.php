<?php
// variable scope / lingkup variabel
// $x = 10;

// function tampilX()
// {
//     global $x;
//     echo $x;
// }

// tampilX();

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
//echo $_SERVER["SERVER_NAME"];

// $_GET
//$_GET["nama"] = "emmir";
//$_GET["nrp"] = "233040054";
$mahasiswa = [
    [
        "nama" => "Emmir Fahrezi",
        "nrp" => "233040054",
        "email" => "emmir233040054@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "emmir.jpg",
    ],
    [
        "nama" => "Fahri Rizqon Arsiansyah",
        "nrp" => "233040062",
        "email" => "fahri233040062@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fahri.jpg",
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email= <?= $mhs["email"]; ?>&jurusan= <?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>


        <?php endforeach; ?>
    </ul>

</body>

</html>