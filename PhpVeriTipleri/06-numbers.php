<?php
$sayi1 = 5;
$sayi2 = 4;

echo "sonuç: " . ($sayi1 + $sayi2) . "<br>";
echo "sonuç: " . ($sayi1 - $sayi2) . "<br>";
echo "sonuç: " . ($sayi1 * $sayi2) . "<br>";
echo "sonuç: " . ($sayi1 / $sayi2) . "<br>";

$sayi3 = 9;

echo "sonuç: " . (($sayi1 + $sayi2) / $sayi3) . "<br>";

echo var_dump(is_int(5)) . "<br>";              // int olma durumunu kontrol eder ve true döner
echo var_dump(is_int(5.3)) . "<br>";            // int olma durumunu kontrol eder ve false döner

echo var_dump(is_float(5)) . "<br>";            // float olma durumunu kontrol eder ve false döner
echo var_dump(is_float(5.3)) . "<br>";          // float olma durumunu kontrol eder ve true döner

echo var_dump(is_numeric(5)) . "<br>";          // numeric olma durumunu kontrol eder ve true döner
echo var_dump(is_numeric(5.3)) . "<br>";        // numeric olma durumunu kontrol eder ve true döner
echo var_dump(is_numeric("5")) . "<br>";        // numeric olma durumunu kontrol eder ve true döner
echo var_dump(is_numeric("5a")) . "<br>";       // numeric olma durumunu kontrol eder ve false döner
echo var_dump(is_numeric("a5")) . "<br>";       // numeric olma durumunu kontrol eder ve false döner


echo abs(-10) . "<br>";                          // mutlak değerini alır
echo ceil(4.3) . "<br>";                         // yukarıya yuvalar
echo ceil(4.9) . "<br>";                         // yukarıya yuvarlar
echo floor(4.3) . "<br>";                        // aşağıya yuvalar
echo floor(4.9) . "<br>";                        // aşağıya yuvarlar
echo round(4.3) . "<br>";                        // en yakın olan değere yuvalar
echo round(4.9) . "<br>";                        // en yakın olan değere yuvarlar
echo sqrt(25) . "<br>";                          // karekökünü alır
echo pow(5, 2) . "<br>";                // üssünü alır
echo max(33, 23, 37, 21, 9) . "<br>";   // en büyük sayıyı verir
echo min(33, 23, 37, 21, 9) . "<br>";   // em küçük sayıyı verir
