<?php
// array numerik
$makanan = array("gorengan", "sate", "mie ayam", "karedok");
echo $makanan[0];
echo "<br>";
echo $makanan[1];
echo "<br>";
echo $makanan[2];

echo "<hr>";

// array asosiatif
$makanan = [
    [
        "berkuah" => "soto",
        "gorengan" => "bakwan",
        "sate" => "sate padang",
        "mie" => "mie ayam",
    ],
    [
        "berkuah" => "sop",
        "gorengan" => "tahu isi",
        "sate" => "sate madura",
        "mie" => "mie instant",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Makanan sehari hari</h1>
    <ul>
        <?php foreach ($makanan as $mkn) : ?>
            <li>berkuah :<?= $mkn["berkuah"]; ?></li>
            <li>gorengan :<?= $mkn["gorengan"]; ?></li>
            <li>sate :<?= $mkn["sate"]; ?></li>
            <li>mie :<?= $mkn["mie"]; ?></li>
        <?php endforeach; ?>

</body>

</html>