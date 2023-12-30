<?php

function ucgen($satirSayisi) {
    for ($i = 1; $i <= $satirSayisi; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "O ";
        }
        echo "<br>";
    }
}

ucgen(42);