<?php

function toplama()
{
    return 20 + 30;
}

echo toplama();

echo "<br>";


function sene()
{
    return date('Y');
}

function yasHesapla()
{
    return sene() - 2002;
}

$yas = yasHesapla();
echo $yas;

echo "<br>";


function saat()
{
    return date('h');
}

function selamlama()
{
    if (saat() < 12) {
        return "günaydın";
    } else {
        return "iyi günler";
    }
}

echo selamlama();
