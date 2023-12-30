<pre>
<?php
/*
Dizi Fonksiyonları 4

current() : Bir dizideki geçerli öğeyi döndür
end() : Bir dizinin dahili işaretçisini son elemanına ayarlar
next() : Bir dizinin dahili işaretçisiini ilerletir
prev() : Dahili dizi işaretçisini geri alır.
reset() : Bir dizinin dahili ilk elemana konumlar.

extract() : Bir dizideki değişkenleri simge tablosuna dahil eder

asort() : Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar
arsort() : Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan BÜYÜKTEN küçüğe doğru sıralar


ksort() :Bir diziyi anahtarlarına göre kÜçÜkten büyüğe doğru sıralar
krsort() :Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar

*/
$dizi = ['araba','bisiklet','motor','uçak','tren'];
// current() : Bir dizideki geçerli öğeyi döndür
echo current($dizi);
echo "<br>_________________________<br>";

// next() : Bir dizinin dahili işaretçisiini ilerletir
echo next($dizi);
echo "<br>_________________________<br>";

// end() : Bir dizinin dahili işaretçisini son elemanına ayarlar
echo end($dizi);
echo "<br>_________________________<br>";

// prev() : Dahili dizi işaretçisini geri alır.
echo prev($dizi);
echo "<br>_________________________<br>";

// reset() : Bir dizinin dahili ilk elemana konumlar.
echo reset($dizi);
echo "<br>_________________________<br>";

// extract() : Bir dizideki değişkenleri simge tablosuna dahil eder.
$dizi2 = ['bir'=>'araba','iki'=>'bisiklet','üç'=>'motor','dört'=>'uçak','beş'=>'tren'];

    //  Anahtarları değişken olarak kullanmamızı sağlar
extract($dizi2);
echo $bir;
echo "<br>_________________________<br>";

// asort() : Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar
$dizi2 = [2=>'araba',3=>'bisiklet',5=>'motor',1=>'uçak',4=>'tren'];
asort($dizi2);
print_r($dizi2);
echo "<br>_________________________<br>";

// arsort() : Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan BÜYÜKTEN küçüğe doğru sıralar
arsort($dizi2);
print_r($dizi2);
echo "<br>_________________________<br>";

// ksort() :Bir diziyi anahtarlarına göre kÜçÜkten büyüğe doğru sıralar
ksort($dizi2);
print_r($dizi2);
echo "<br>_________________________<br>";

// krsort() :Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar
krsort($dizi2);
print_r($dizi2);
echo "<br>_________________________<br>";
?>


</pre>
