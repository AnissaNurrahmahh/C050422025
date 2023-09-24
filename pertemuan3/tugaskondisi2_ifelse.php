<?php
$nilai = 87;

if ($nilai >= 90 && $nilai <=100) {
    echo "Nilai = $nilai <br> Grade = A <br> keterangan = Baik sekali";
} elseif ($nilai >= 76 && $nilai <= 89) {
    echo "Nilai = $nilai <br> Grade = B <br> keterangan = Baik";
} elseif ($nilai >= 60 && $nilai <= 75) {
    echo "Nilai = $nilai <br> Grade = C <br> keterangan = Cukup";
} elseif ($nilai >= 50 && $nilai <= 59) {
    echo "Nilai = $nilai <br> Grade = D <br> keterangan = Hampir Cukup";
} else {
    echo "Nilai = $nilai <br> Grade = E <br> keterangan = Kurang";
} 
?>