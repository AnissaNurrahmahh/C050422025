<?php
$nama = array(
    "Andi" => 90,
    "Budi" => 75,
    "Chika" => 88,
    "David" => 60,
    "Erlin" => 95
);
// Mengembalikan semua kunci (nama) dari array
$keys = array_keys($nama);
echo "Kunci dalam array:<br> ";
print_r($keys);
echo "<br>";
// Mengembalikan semua nilai (umur) dari array
$values = array_values($nama);
echo "Nilai dalam array: <br>";
print_r($values);
echo "<br>";
// Menggabungkan dua array
$additionalData = ['jane' => 24, 'alice' => 32];
$mergedData = array_merge($nama, $additionalData);
echo "Gabungan dua array: <br> ";
print_r($mergedData);
echo "<br>";
// Membalik urutan elemen dalam array
$reversedData = array_reverse($nama);
echo "Array yang dibalik urutannya: <br> ";
print_r($reversedData);
echo "<br>";
// Mengambil dua elemen mulai dari indeks 1
$sliceData = array_slice($nama, 1, 2);
echo "Potongan array: <br> ";
print_r($sliceData);
echo "<br>";
?>