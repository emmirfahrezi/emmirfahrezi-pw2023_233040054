<?php
function cetak_bintang($angka)
{
    $h = "*";
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $h++ . " ";
        }
        echo "<br>";
    }
}

echo cetak_bintang(3);
