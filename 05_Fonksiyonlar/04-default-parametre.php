<?php

/*
    her iki parametreye de default değer girilebilir
    sondaki parametreye tek de default değer girilebilir

    ancak ilk parametreye tek değer girilirse
    fonksiyon çalıştırıldığında hata alırız çünkü hangi parametre için değer girdiğimizi algılayamaz
*/
function selamlama($isim = "Misafir", $mesaj = "iyi günler")
{
    return "$mesaj $isim";
}

echo selamlama("Mako", "merhaba");
echo "<br>";

echo selamlama("Koko");
echo "<br>";

echo selamlama();
echo "<br>";


function usAlma($taban, $us = 2)
{
    return $taban ** $us;
}

echo usAlma(3);
echo "<br>";

echo usAlma(3, 3);
echo "<br>";
