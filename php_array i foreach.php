<?php

    $cars1 = array("Poldek", "Szkoda", "Fiacik"); // deklaracja tablicy o indeksie numerycznym
    $cars2 = array("Tomek"=>"Poldek", "Maciek"=>"Szkoda", "Wojtek"=>"Fiacik"); // deklaracja tablicy asocjacyjnej
    
    echo $cars1[1]; // wypisanie wartości w indeksie 1
    echo "<br>";
    echo $cars2["Wojtek"]; // wypisanie wartości z indeksu "Wojtek"

    echo "<br> <br> For each: <br>";

    /* pętla for each działa na każdym elemencie tablicy i kończy działanie kiedy tablica się kończy */ 
    foreach ($cars1 as $car) {
        echo "$car <br>";
    }

    echo "<br> For each dla asocjacyjnej: <br>";

    foreach ($cars2 as $user => $car) {
        echo "$user posiada $car <br>";
    }

?>