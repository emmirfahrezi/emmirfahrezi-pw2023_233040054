<?php
// kubus total volume 2 kubus 
// sisi kubus a=9, sisi kubus b= 4

// $sisi_a = 9;
// $sisi_b = 4;

// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $totalAB = $volume_a + $volume_b;

// echo "total volume kubus a dan b =$totalAB";

// echo "<br>";

function total_volume_dua_kubus($a, $b)
{
    // $volume_a = $a * $a * $a;
    // $volume_b = $b * $b * $b;
    // $total  =  $a * $a * $a + $b * $b * $b;

    // return $total;
    return $a * $a * $a + $b * $b * $b;
}

echo "total volume kubus a dan b " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "total volume kubus c dan d " . total_volume_dua_kubus(10, 15);
echo "<br>";
