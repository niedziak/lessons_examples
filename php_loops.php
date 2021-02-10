<?php
    $x = $y = 0;

    /* while, do while i for działa tak samo jak w JavaScript */
    while ($x < 5) {
        echo $x;
        $x++;
    }

    echo "<br>";

    do {
        echo $y;
        $y++;
    } while ($y < 5);

    echo "<br>";

    for ($z = 0 ; $z < 5 ; $z++) {
        echo $z;
    }

?>