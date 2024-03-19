<?php
$avatar = [
    [
        "nama" => "Emmir Fahrezi",
        "nrp" => "233040054",
        "email" => "emmir233040054@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "emmir.jpg",

    ],
    [
        "nama" => "Fahri Rizqon Arsiansyah",
        "nrp" => "233040062",
        "email" => "fahri233040062@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "fahri.jpg",

    ],
    [
        "nama" => "Hikmat Pandu Raharja",
        "nrp" => "233040056",
        "email" => "hikmat233040056@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "hikmat.jpg",

    ],
    [
        "nama" => "Raden Indra Prawirajaya",
        "nrp" => "233040043",
        "email" => "raden233040043@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "raden.jpg",

    ],
    [
        "nama" => "Faiz Khairan",
        "nrp" => "233040069",
        "email" => "Faiz233040069@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "faiz.jpg",

    ],
    [
        "nama" => "Azhar Mutaqin",
        "nrp" => "233040126",
        "email" => "azhar233040126@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "azhar.jpg",

    ],
    [
        "nama" => "Raihan Azzani Helmawan",
        "nrp" => "2330400135",
        "email" => "Raihan233040135@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "helmawan.jpg",

    ],
    [
        "nama" => "Muhammad Yafi Nashrulloh",
        "nrp" => "233040113",
        "email" => "muhammad233040113@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "yafi.jpg",

    ],
    [
        "nama" => "Faizal Akbar Budiansyah",
        "nrp" => "2330400156",
        "email" => "faizal233040156@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "faizal.jpg",

    ],
    [
        "nama" => "Nur Fatimah",
        "nrp" => "233040074",
        "email" => "nurfatimah233040074@mail.unpas.ac.id",
        "jurusan" => "Teknik Indformatika",
        "gambar" => "nur.jpg",

    ],



];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar 10 Mahasiswa IF</title>
    <style>
        img {

            width: 100px;

        }
    </style>
</head>

<body>
    <h1>Daftar 10 Mahasiswa IF</h1>

    <?php foreach ($avatar as $avt) : ?>
        <ul>
            <li>
                <img src="gambar/<?= $avt["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $avt["nama"]; ?></li>
            <li>NRP : <?= $avt["nrp"]; ?></li>
            <li>Email : <?= $avt["email"]; ?></li>
            <li>Jurusan : <?= $avt["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>