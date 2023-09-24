<?php
    $bln = date ("M");
    $jumlahhari = date ("N");
    switch ($bln)
    {
    case "Jan": $namaBln = "Januari";
    $jumlahhari = "31";
    break;
    case "Feb": $namaBln = "Februari";
    $jumlahhari = "28";
    break;
    case "Mar": $namaBln = "Maret";
    $jumlahhari = "31";
    break; 
    case "Apr": $namaBln = "April"; 
    $jumlahhari = "30";
    break;
    case "May": $namaBln = "Mei";
    $jumlahhari = "31";
    break; 
    case "Jun": $namaBln = "Juni";
    $jumlahhari = "30";
    break;
    case "Jul": $namaBln = "Juli"; 
    $jumlahhari = "31";
    break;
    case "Aug": $namaBln = "Agustus";
    $jumlahhari = "31"; 
    break;
    case  "Sep": $namaBln = "September";
    $jumlahhari = "30";
    break;
    case "Oct": $namaBln = "Oktober";
    $jumlahhari = "31"; 
    break;
    case "Nov": $namaBln = "November";
     $jumlahhari = "30";
    break;
    case "Dec": $namaBln = "Desember";
    $jumlahhari = "31";
    break;
    }
    echo "Nama bulan sekarang adalah =  $namaBln <br> Jumlah Hari =  $jumlahhari";
?>