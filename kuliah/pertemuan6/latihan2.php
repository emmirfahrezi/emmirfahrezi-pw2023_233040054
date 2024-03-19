<?php
// $mahasiswa = [
//     ["Emmir Fahrezi",  "233040054", "emmir233040054@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Fahri Rizqon Arsiansyah",  "233040062", "fahri233040062@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Andyka Khaerulana",  "233040072", "andyka233040072@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Mohammad Faiz Khairan",  "233040069", "faiz233040069@mail.unpas.ac.id", "Teknik Informatika"]
// ];

// Array Aassociative
// definisinya sama  seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

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
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li>
                <img src="gambar/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>