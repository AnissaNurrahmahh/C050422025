<?php
$nama = array(
    "Andi" => 90,
    "Budi" => 75,
    "Chika" => 88,
    "David" => 60,
    "Erlin" => 95
);
echo "Array sebelum pengurutan:<br>";
print_r($nama);
echo "<br>";

asort($nama);
echo "Pengurutan berdasarkan nilai (ascending):<br>";
print_r($nama);
echo "<br>";

arsort($nama);
echo "Pengurutan berdasarkan nilai (descending):<br>";
print_r($nama);
echo "<br>";

ksort($nama);
echo "Pengurutan berdasarkan kunci (ascending):<br>";
print_r($nama);
echo "<br>";

krsort($nama);
echo "Pengurutan berdasarkan kunci (descending):<br>";
print_r($nama);
?>