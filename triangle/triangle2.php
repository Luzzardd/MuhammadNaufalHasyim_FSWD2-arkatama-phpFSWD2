<?php
    // right triangle pattern
    for($i = 0; $i < 5; $i++) {
        // print spaces
        for($j = 1; $j < 5 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($k = 0; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>