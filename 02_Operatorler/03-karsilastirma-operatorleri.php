<?php

/*
    ==      Equal                       $x == $y
    ===     Identical                   $x === $y
    !=      Not equal                   $x != $y
    <>      Not equal                   $x <> $y
    !==     Not identical               $x !== $y
    >       Greater than                $x > $y
    <       Less than                   $x < $y
    >=      Greater than or equal to    $x == $y
    <=      Less than or equal to       $x == $y
    <=>     Spaceship                   $x == $y
*/

$a = 10;
$b = 20;

$sonuc = ($a == $b);
$sonuc = ($a != $b);
$sonuc = ($a > $b);
$sonuc = ($a >= $b);
$sonuc = ($a < $b);
$sonuc = ($a <= $b);
$sonuc = ($a <=> $b);   // eşitlik durumunda 0, soldaki veri büyükse 1, sağ taraftaki veri büyükse -1 değerlerini döner

echo var_dump($sonuc);
echo "<br>";


$username = "abdulhaekimkaya";
$sonuc = ($username == "abdulhaekimkaya");

echo var_dump($sonuc);
echo "<br>";


$a = "10";
$b = 10;

$sonuc = ($a == $b);        // veri tipi kontrolü olmadığı için true döner
$sonuc = ($a === $b);       // veri tipi kontrolü de yapacağı için false döner
$sonuc = ($a !== $b);       // veri tipi kontrolünde tersini aldığı için true döner

echo var_dump($sonuc);
echo "<br>";
