<?php

//function toplama($sayi1, $sayi2)
//{
//    return $sayi1 + $sayi2;
//}

//echo toplama(10, 20);
//echo "<br>";
//
//echo toplama("10", "20");   // hata vermez işlem yapılır
//echo "<br>";
//
//echo toplama("10a", "20");  // int türünde veri girmemiz gerektiği uyarısını verir
//echo "<br>";
//
//
//echo toplama("10a", "aa20");  // ikinci değer harf ile başladığı için hata verir
//echo "<br>";




//function toplama2(int $sayi1, int $sayi2)
//{
//    return $sayi1 + $sayi2;
//}

//echo toplama2(10, 20);
//echo "<br>";
//
//echo toplama2("10", "20");   // hata vermez işlem yapılır
//echo "<br>";
//
//echo toplama2("10a", "20");  // hata verir
//echo "<br>";
//
//
//echo toplama2("10a", "aa20");  // hata verir
//echo "<br>";




// declare yazdıldığında verilen parametrelerin hepsi istenilen veri tipinde girilmelidr

declare(strict_types=1);
function toplama3(int $sayi1, int $sayi2, bool $isActive, array $sayilar): int  // :int ile fonksiyonun return değerini belirtiriz
{
    return $sayi1 + $sayi2;
}

echo toplama3(10, 20, true, [3,5]);
echo "<br>";

//echo toplama3("10", "20");   // hata verir
//echo "<br>";
//
//echo toplama3("10a", "20");  // hata verir
//echo "<br>";
//
//
//echo toplama3("10a", "aa20");  // hata verir
//echo "<br>";

