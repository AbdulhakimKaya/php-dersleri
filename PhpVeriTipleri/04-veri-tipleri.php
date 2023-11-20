<?php
/*
    Php Veri Tipleri

    string  : Metinsel bilgiler
    int     : tam sayılar
    double  : ondalıklı sayılar
    boolean : true/false bilgileri
    object  : nesne
    array   : dizi
    null    : değer içermeyen bilgi
*/

$urunAdi = "Iphone 14 pro";
echo $urunAdi." : ".gettype($urunAdi);

echo "<br/>";

$urunFiyati = 65000;
echo $urunFiyati." : ".gettype($urunFiyati);

echo "<br/>";

$urunKdvOrani = 0.20;
echo $urunKdvOrani." : ".gettype($urunKdvOrani);

echo "<br/>";

$urunSatistaMi = true;
echo $urunSatistaMi." : ".gettype($urunSatistaMi);

echo "<br/>";
echo "<br/>";


// Tip Degistirme

$a = (double)20;
echo $a." : ".gettype($a);

echo "<br/>";

$a = (int)20.3;
echo $a." : ".gettype($a);

echo "<br/>";

$a = (int)"20";
echo $a." : ".gettype($a);

echo "<br/>";

$a = (int)"a20";     // başta rakam olmadığı için 0 değerini döndürür
echo $a." : ".gettype($a);

echo "<br/>";

$a = (int)"20a12";   // başta 20 ve sonrasında harf olduğundan dolayı 20 değerini döndürür
echo $a." : ".gettype($a);

echo "<br/>";

$a = true;           // 1 değerini döndürür
echo $a." : ".gettype($a);

echo "<br/>";

$a = (int)true;      // 1 değerini döndürür
echo $a." : ".gettype($a);

echo "<br/>";

$a = false;          // değer döndürmez
echo $a." : ".gettype($a);

echo "<br/>";

$a = (int)false;     // 0 değerini döndürür
echo $a." : ".gettype($a);

echo "<br/>";