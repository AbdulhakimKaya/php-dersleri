<?php

// Array Functions

$notlar = array(60, 90, 90, 80, 80, 80);
$plakalar = array(
    41 => "Kocaeli",
    53 => "Rize",
    34 => "Istanbul",
    81 => "Düzce"
);

// elemanı başa ekleme
array_unshift($notlar, 60);


// elemanı sona ekleme
array_push($notlar, 100);


// elemanı baştan silme
array_shift($notlar);


// elemanı sondan silme
array_pop($notlar);


// artan sıralama
sort($notlar);
asort($plakalar);    // value'ye göre sıralama yapılır
ksort($plakalar);    // key'e göre sıralama yapılır


// azalan sıralama
rsort($notlar);
arsort($plakalar);    // value'ye göre sıralama yapılır
krsort($plakalar);    // key'e göre sıralama yapılır


// string to array
$str = "Diyarbakır, 21";
$arr = explode(",", $str);  // string ifadeyi virgülden sonra ayıracak ve her ayırdığı kısmı bir eleman olarak atayacak


// array to string
$arr2 = array("Abdulhakim", "abdulhakim@test.com");
$str2 = implode(",", $arr2);    // dizideki elemanların arasına virgül koyar ve string içerisine yazdırır


// dizi yazdırma
print_r($notlar);
echo "<br>";

print_r($plakalar);
echo "<br>";

print_r($arr);
echo "<br>";

print_r($str2);
echo "<br>";


// eleman sayısı yazdırma
echo count($notlar) . "<br>";
echo count($plakalar) . "<br>";


// elemanları tekrarlanma sayılarıyla birlikte yazdırma
$notlar_tekrar_sayilari = array_count_values($notlar);
print_r($notlar_tekrar_sayilari);
echo "<br>";


// key-value yerlerini değiştirme
$plakalar_key_value = array_flip($plakalar);
print_r($plakalar_key_value);
echo "<br>";


// random eleman yazdırma
$index = array_rand($notlar);
echo $notlar[$index] . "<br>";

$indexes = array_rand($notlar, 3);
print_r($indexes);

echo " : ";

echo $notlar[$indexes[0]] . " ";
echo $notlar[$indexes[1]] . " ";
echo $notlar[$indexes[2]] . "<br>";

