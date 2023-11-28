<?php

// value tipte değer ataması
function toplama($sayi)
{
    $sayi += 10;
    echo $sayi . "<br>";
}

$ornekSayi = 5;

toplama($ornekSayi);

echo $ornekSayi;

echo "<br>";


// reference tipte değer ataması
function toplama2(&$sayi)   // değişkenin bellekteki adresini göndeririz ve değişiklikler öyle yapılır
{
    $sayi += 10;
    echo $sayi . "<br>";
}

$ornekSayi = 5;

toplama2($ornekSayi);   // fonksiyonda yapılan değişikliği ornekSayi degiskeninin bellek adresindeki veriye atama yapar

echo $ornekSayi;              // ve ornekSayi değişkeni de 15 olur



// value tipte değer ataması
function yasHesapla($tarihler)
{
    for ($i = 0; $i < count($tarihler); $i++) {
        $tarihler[$i] = 2023 - $tarihler[$i];
    }
    return $tarihler;
}

$liste = array(1990, 1985, 2002);

echo "<pre>";
print_r($liste);
print_r(yasHesapla($liste));
echo "</pre>";


echo "<br>";


// reference tipte değer ataması
function yasHesapla2(&$tarihler)   // değişkenin bellekteki adresini göndeririz ve değişiklikler öyle yapılır
{
    for ($i = 0; $i < count($tarihler); $i++) {
        $tarihler[$i] = 2023 - $tarihler[$i];
    }
    return $tarihler;
}

$liste2 = array(1990, 1985, 2002);

echo "<pre>";
print_r(yasHesapla2($liste2));   // fonksiyonda yapılan değişiklikleri listedeki elemanların bellek adresindeki veriye atama yapar
print_r($liste2);                        // ve listedeki veriler artık tarih değil de yaş olarak değiştirilmiş olur
echo "</pre>";
