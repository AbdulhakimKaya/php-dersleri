<?php

function toplama(...$sayilar)
{
    $toplam = 0;
    foreach ($sayilar as $sayi) {
        $toplam += $sayi;
    }
    return $toplam;
}

echo toplama(1,4,76,5,9);
