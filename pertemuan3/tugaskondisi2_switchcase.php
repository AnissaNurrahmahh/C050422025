<?php
$nilai = 91;

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $grade = 'A';
        $keterangan = 'Baik Sekali';
        break;
    case ($nilai >= 76 && $nilai <= 89):
        $grade = 'B';
        $keterangan = 'Baik';
        break;
    case ($nilai >= 60 && $nilai <= 75):
        $grade = 'C';
        $keterangan = 'Cukup';
        break;
    case ($nilai >= 50 && $nilai <= 59):
        $grade = 'D';
        $keterangan = 'Hampir Cukup';
        break;
    default:
        $grade = 'E';
        $keterangan = 'Kurang';
        break;
}

echo "Nilai = $nilai<br> Grade = $grade <br> Keterangan = $keterangan ";
?>




