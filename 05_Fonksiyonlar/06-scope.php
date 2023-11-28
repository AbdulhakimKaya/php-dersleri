<?php

// global scope
$x = 5;

echo $x;
echo "<br>";

function test()
{
    // local scope
    $x = 10;    // global x değerinden farklı olarak bu fonksiyon içinde x değişkeni tanımlanır ve atama yapılır
    echo $x;
}

test();
echo "<br>";


function test2()
{
    // local scope
    global $x;  // global'deki x değeri alınır
    echo $x;
}

test2();
echo "<br>";


$y = 20;
echo "<br>";

function test3()
{
    // local scope
    $GLOBALS['y'] = 23;
}

echo $y;
echo "<br>";

test3();    // fonksiyonu çalıştığında y değişkeninin değeri global'de değiştirilir
echo $y;

