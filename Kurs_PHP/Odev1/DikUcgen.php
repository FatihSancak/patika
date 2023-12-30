<?php
/* 
ODEV KONUSU : 

Parametre olarak aldığı değer kadar satırı olan
bir üçgen çizen bir fonksiyon yazın. 
Fonksiyon içerisinde while ve for döngülerinin her ikisini de kullanın.
*/

function ucgen($satirSayisi) {
    for ($i = 1; $i <= $satirSayisi; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "O ";
        }
        echo "<br>";
    }
}
ucgen(25);

?>