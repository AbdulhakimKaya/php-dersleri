<?php

/*
    a = b        a = b
    a += b       a = a + b
    a -= b       a = a - b
    a *= b       a = a * b
    a /= b       a = a / b
    a %= b       a = a % b
    a **= b      a = a ** b
    a .= b       a = a . b
*/

//$a;   // atama yapmazsak hata alırız

$a = 10;
$b = 20;
$c = $a;
$d = ($b + 10) * 3;

//$a += $b;
//$a -= $b;
//$a *= $b;
//$a /= $b;
//$a %= $b;
//$a **= $b;
$a .= $b;   // string birleştirme gibi çalışır a ve b yi yan yana yazdırıp a'ya atar

$ad = "Abdulhakim ";
$soyad = "KAYA";

$ad .= $soyad;

echo $a;
echo "<br>";

echo $b;
echo "<br>";

echo $c;
echo "<br>";

echo $d;
echo "<br>";

echo $ad;
