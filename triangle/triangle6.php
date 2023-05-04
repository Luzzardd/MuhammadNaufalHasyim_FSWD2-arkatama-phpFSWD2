<?php
    // right triangle pattern
    for($i = 0; $i < 9; $i++) {
        // print spaces
        for($j = 1; $j < 9 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($k = 0; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>