<pre>
<?php
//Dizi Fonksiyonları 3
//in array(); Bir dizide bir değerin varlığını araştırır.
$array =['Fatih', 'Omer', 'Mehmet', 'Belinay'];
if (in_array('Mustafa',$array)){
    echo "Değer Mevcut";
}else{
    echo "Değer Mevcut Değil";
}
echo "<br>_________________________<br>";

//array_shift(); Dizini başlangıcından bir eleman çıkarır.

print_r(array_shift($array));
echo "<br>_________________________<br>";

//array_pop(); Dizinin sonundaki elemanı diziden çıkartır.
print_r(array_pop($array));
echo "<br>_________________________<br>";

//array_slice(); Bir dizinin belli bir bölümünü döndürür
$new_array = array_slice($array,0,2);
print_r($new_array);
echo "<br>_________________________<br>";

$new_array = array_slice($array,-2,2);
print_r($new_array);
echo "<br>_________________________<br>";

//array_sum(); Bir dizideki değerlerin toplamını hesaplar.
$sayilar = range(1,5);
print_r(array_sum($sayilar));
echo "<br>_________________________<br>";

//array_product(); Bir dizideki değerlerin çarpımını bulur.
print_r(array_product($sayilar));
echo "<br>_________________________<br>";

//arpay unique(); Diziden yinelenen değerleri siler.

//array_values(); Bir dizinin tüm değerlerini döndürur.

//array_push(); Belli sayıda elemanı dizinin sonuna ekler.
array_push($array, 'okan');
array_push($array, '2');
array_push($array, '4');

print_r($array);
echo "<br>_________________________<br>";

$array[]= "Mevlüt";
print_r($array);
echo "<br>_________________________<br>";

//array_unshift(); Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
array_unshift($array, 'okan');
array_unshift($array, '2');
array_unshift($array, '4');

print_r($array);
echo "<br>_________________________<br>";

//array_keys(); Bir dizideki tum anahtarları veya bir anahtar altkümesini dondürür
$array1 =['isim1'=>'Fatih','isim2'=> 'Omer', 'isim3'=>'Mehmet','isim4'=> 'Belinay'];

print_r(array_keys($array1));
?>
</pre>
