<?php
    $kelompokl =
    array("Andi", "Budi", "Chika", "David", 
        "Erna"); echo "Nama Kelompok 1
        :<br />";
    for ($i=0; $i<=4; $i++) { 
        echo " +", $kelompokl[$i],"<br/>";
    }

    echo "<br /><br />";

    $kelompok2 [] = "Fera";
    $kelompok2 [] = "Gani"; 
    $kelompok2 [] = "Hery";
    $kelompok2 [] = "Intan";
    $kelompok2 [] ="Jaka";

    echo "Nama Kelompok 2 :<br />";
    for ($i=0; $i<=4; $i++) { 
        echo " + ", $kelompok2 [$i],"<br/>";
    }
?>