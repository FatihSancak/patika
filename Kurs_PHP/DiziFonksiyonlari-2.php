<?php
/*
Dizi Fonksiyonları 2
shuffle() : Bir diziyi karıştırır.
array_combine() : Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
array count_values() : Bir dizideki tüm değerleri sayar.
array_flip() : Bir dizideki anahtarlarla değerleri yer değiştirir.
array_key_exists() : Belirtilen anahtar veya indis dizide var mı diye bakar.
array_map(): Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
array_filter(): Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
array_merge(): Belirtilen dizileri ardanda ekleyerek yeni bir dizi oluşturur.
array_rand() : Bir diziden belli sayıda rasgele anahtar döndürür.
array_reverse() :Diziyi tersine sıralayıp döndürür.
array_search(): Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
*/
echo "<pre>";
// range
$sayilar= range(1,20);
    print_r($sayilar);
    echo "*****************<br>";

// shuffle
shuffle($sayilar);
    print_r($sayilar);
    echo "*****************<br>";

// array_combine
$meyve = ['elma', 'armut', 'muz'];
$harfler = ['a','b','c'];
$dizi = array_combine($meyve,$harfler);
    print_r($dizi);
    echo "*****************<br>";

//array_count_values()
$meyve = ['elma', 'armut', 'muz','elma', 'armut','elma', 'armut','elma', 'armut','elma', 'muz', 'muz', 'muz', 'muz', 'armut','elma', 'armut',];
$dizi = array_count_values($meyve);
    print_r($dizi);
    echo "*****************<br>";

// array_flip
$harfler = ['a','b','c','d'];
$dizi = array_flip($harfler);
print_r($dizi);
echo "*****************<br>";

// arrray_ke
$dizi =array_key_exists(2,$harfler);
    print_r($dizi);
    var_dump($dizi);
    echo "*****************<br>";

// array_map()
// 1. Kullanımı
$sayilar = range(1,10);
$dizi2 = array_map(function ($e){
    return $e+2;
},$sayilar);
echo "*****************<br>";
// 2. Kullanımı
function cube($sayi){
    return $sayi*$sayi*$sayi;
}
$dizi2 = array_map('cube',$sayilar);

print_r($dizi2);
echo "*****************<br>";


// array_filter
$cift = array_filter($sayilar,function ($e){
    return $e % 2 == 0 ? $e : false;
});
$tek = array_filter($sayilar,function ($e){
    return $e % 3 == 0 ? $e : false;
});
    print_r($cift);
    echo "*****************<br>";
    print_r($tek);
    echo "*****************<br>";

// array_merge

$sayilar = range(1,10);
$sayilar2 = range(11,20);
$sayilar3 = range(21,30);
$sayilar4 = range(31,40);

$dizi = array_merge($sayilar,$sayilar2,$sayilar3,$sayilar4);
    print_r($dizi);
    echo "*****************<br>";

// array_rand()

$dizi3 = ['elma', 'armut','muz','kivi'];
print_r(array_rand($dizi3,2));
    echo "*****************<br>";

$keys = array_rand($dizi3,2);
    echo $dizi3[$keys[0]]."<br>";
    echo $dizi3[$keys[1]];
    echo "<br>*****************<br>";

// array_reverse
$dizi3 = ['elma', 'armut','muz','kivi'];

$arr = array_reverse($dizi3);
    print_r($arr);
    echo "<br>*****************<br>";

// array_search

$arr = array_search('muz',$dizi3); // 2. indexi getiriyor
print_r($arr);
echo "<br>*****************<br>";
