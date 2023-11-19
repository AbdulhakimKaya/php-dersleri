<?php
$ad = "Abdulhakim";
$soyad = "KAYA";

echo $ad . " " . $soyad;

echo "<br/>";

$sayi1 = 9;
$sayi2 = 24;

$sayi1 = 19; // aynı isimde değişken tanımlarsanız hata vermez, en son tanımlanan değeri alır.

// Büyük küçük harf duyarlılığı vardır (case sensitive)
$Sayi1 = 33;

/*
    $sayi 1 = 19;  // -> hatalı
    degisken isminde boşluk karakteri kullanılamaz
*/

/*
    $1sayi = 19;  // -> hatalı
    degisken ismi sayi ile başlayamaz
*/

/*
    $ıİğüşçö;
    Degisken tanimlarken Türkçe karakter kullanılmaz
*/

echo $sayi1 . " " . $sayi2." ".$Sayi1;