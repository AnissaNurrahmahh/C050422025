<!DOCTYPE HTML>
<html>
    <head>
        <title>Hitung Bangun Ruang Kerucut</title>
    </head>
    <body>
        <form name="hitung" action=" tugas2.php" method="POST"> 
            Jari-jari: <input type="text" name="kerucut_r"> 
            <br>
            Panjang sisi kerucut: <input type="text" name="kerucut_s">
            <br>
            <input type="submit" value="hitung" name="hitung">
        </form>
    </body>
</html>

<?php
/*$jari = 10;
$selimut = 10;
$phi = 3.14;

$luasAlas = $phi * $jari * $jari;
$luasSelimut = $phi * $jari * $selimut;
$luasPermukaan = $luasAlas + $luasSelimut;

echo ("Luas Alasnya adalah = ".$luasAlas); 
echo ("Luas Permukaannya adalah = ".$luasPermukaan);*/

if(isset($_POST['hitung'])){
    $kerucut_r = $_POST['kerucut_r']; 
    $kerucut_s = $_POST['kerucut_s'];

    $phi = 3.14;
    $kerucut_luas_alas = $phi * $kerucut_r * $kerucut_r;
    $kerucut_luas_selimut = $phi * $kerucut_r * $kerucut_s;
    $kerucut_luas_permukaan = $kerucut_luas_alas + $kerucut_luas_selimut;

    echo "<h3>Hasil:</h3>";
    echo "<p>Luas alas = $kerucut_luas_alas</p>";
    echo "<p>Luas permukaan = $kerucut_luas_permukaan</p>";
}
?>