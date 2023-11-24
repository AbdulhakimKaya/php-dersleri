<?php

/*
    +           arttırma
    -           azaltma
    *           çarpma
    /           bölme
    %           mod alma
    **          üs alma
    ++$x        işlem öncesi arttırma
    --$x        işlem öncesi azaltma
    $x++        işlem sonrası arttırma
    $x--        işlem sonrası azaltma
*/

$a = 6;
$b = 3;

echo "Toplama: " . ($a + $b);
echo "<br/>";

echo "Çıkarma: " . ($a - $b);
echo "<br/>";

echo "Çarpma: " . ($a * $b);
echo "<br/>";

echo "Bölme: " . ($a / $b);
echo "<br/>";

echo "Mod Alma: " . ($a % $b);
echo "<br/>";

echo "Üs Alma: " . ($a ** $b);
echo "<br/>";

echo "İşlem sonrası arttırma: " . ($a++);
echo "<br/>";
echo $a;
echo "<br/>";

echo "İşlem sonrası azaltma: " . ($a--);
echo "<br/>";
echo $a;
echo "<br/>";

echo "İşlem öncesi arttırma: " . (++$a);
echo "<br/>";
echo $a;
echo "<br/>";

echo "İşlem öncesi azaltma: " . (--$a);
echo "<br/>";
echo $a;
echo "<br/>";
