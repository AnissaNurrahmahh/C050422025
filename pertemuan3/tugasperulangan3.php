<?php
$bilangan = 3; 
$jumlah = 0;   

while ($bilangan <= 127) {
    if ($bilangan % 6 == 0) {
        $jumlah++;
    }
    $bilangan++;
}

echo "Banyak bilangan bulat mulai dari 3 hingga 127 yang merupakan kelipatan 6 adalah: $jumlah";
?>