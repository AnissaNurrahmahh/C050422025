<?php
$jumlah_lembar = 158;
$biaya_per_lembar= 0;

if ($jumlah_lembar < 100) {
    $biaya_per_lembar = 150;
} elseif ($jumlah_lembar >= 100 && $jumlah_lembar <= 200) {
    $biaya_per_lembar = 100;
} else {
    $biaya_per_lembar = 80;
}

$total_biaya = $jumlah_lembar * $biaya_per_lembar;

echo "Jumlah lembar yang akan difotocopy: $jumlah_lembar lembar<br>";
echo "Biaya per lembar: Rp. $biaya_per_lembar,-<br>";
echo "Total biaya fotocopy: Rp. $total_biaya,-";
?>