<?php
// 1. membuat array
$hari = array("senin", "selsas", "rabu");
$bulan = ["januari", "februari", "maret"];
$mhs = ["emmir", 3.7, false];
// 2. mencetak array (1)
// cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";
// cetak seluruh array
// var_dump() atau print_r
// digunakan untuk debugging
var_dump($hari);

echo "<br>";

print_r($bulan);

echo "<br>";

var_dump($mhs);

echo "<hr>";



// 3. manipulasi array
// menambah isi array
// di akhir: []  atau array_push()
$hari[] = "kamis";
$hari[] = "jumat";
print_r($hari);

echo "<br>";
array_push($bulan, "april", "mei");
print_r($bulan);

echo "<br>";
// di awal array: array_unshift()
array_unshift($mhs, "233040054");
print_r($mhs);

echo "<hr>";

// menghapus isi array
// di belakang: array_pop()
// di depan: array_shift()
array_pop($hari);
print_r($hari);

echo "<br>";

array_shift($bulan);
print_r($bulan);


// 4. mencetak array (2)
