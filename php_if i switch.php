<?php
    /* if działa tak samo jak w JavaScript,
       oprócz tego, że elseif pisze się razem a nie osobno (wersja ze wsteczną kompatybilnością) */

    $zmienna_x = 2;

    if ($zmienna_x > 2) {
        echo "Większe niż dwa";
    } elseif ($zmienna_x <= 2) {
        echo "Mniejsze równe dwa";
    } else {
        echo "Nic się nie równa";
    }

    echo "<br>";

    /* switch działa tak samo jak w JavaScript */
    switch ($zmienna_x) {
        case 0:
        case 1:
            echo "Zero albo jeden";
            break;
        case 2:
            echo "Dwa";
            break;
        case 3:
            echo "Trzy";
            break;
        default:
            echo "wszystko inne";
    }
?>