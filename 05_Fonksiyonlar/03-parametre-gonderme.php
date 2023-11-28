<?php

function selamlama($isim)
{
    echo "Merhaba " . $isim . "<br>";
}

selamlama("Mako");
selamlama("Koko");


function toplama($sayi1, $sayi2)
{
    echo $sayi1 + $sayi2;
}

toplama(2, 5);

echo "<br>";


function yasHesapla($yil)
{
    return date('Y') - $yil;
}

echo yasHesapla(2002);

echo "<br>";


function emekliligeKalanSure($dogumYili, $isim)
{
    $yas = yasHesapla($dogumYili);
    $kalanSure = 65 - $yas;

    if ($kalanSure > 0) {
        return "$isim, emeklilige $kalanSure yıl kaldı";
    } else {
        return "$isim, zaten $kalanSure yıl önce emekli oldunuz";
    }
}

echo emekliligeKalanSure(2002, "Abdulhakim");
