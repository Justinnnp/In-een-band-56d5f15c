<?php

    $arr = [
        "Citizen of Glass kost €" =>  4.5,
        "Night kost €" =>  9,
        "New Eyes kost €" =>  5,
        "Strange Trails kost €" =>  10,
    ];


    echo "Het album overzicht: " .PHP_EOL;

    foreach ($arr as $arr2 => $arr3) {
        echo $arr2 . $arr3 .PHP_EOL;
    }

    echo "Het totaalbedrag van alle albums is €" .array_sum($arr) .PHP_EOL;
    echo "De gemiddelde prijs van alle albums is €" .array_sum($arr) / count($arr);
?>