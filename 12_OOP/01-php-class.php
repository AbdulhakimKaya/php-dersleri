<?php

class Ogrenci
{
    # property
    public $ogrNo;
    public $ad;
    public $sube;
}

$ogrenci1 = new Ogrenci();
$ogrenci1->ogrNo = 110;
$ogrenci1->ad = "Abdulhakim";
$ogrenci1->sube = "10/A";


$ogrenci2 = new Ogrenci();
$ogrenci2->ogrNo = 200;
$ogrenci2->ad = "Erkam";
$ogrenci2->sube = "10/A";

echo $ogrenci1->ogrNo . " " . $ogrenci1->ad . " " . $ogrenci1->sube . "<br>";
echo $ogrenci2->ogrNo . " " . $ogrenci2->ad . " " . $ogrenci2->sube . "<br>";

$ogrenciler = [$ogrenci1, $ogrenci2];

foreach ($ogrenciler as $ogrenci) {
    echo gettype($ogrenci);
    echo "<br>";
    echo $ogrenci->ogrNo . " " . $ogrenci->ad . " " . $ogrenci->sube . "<br>";
    var_dump($ogrenci instanceof Ogrenci);
}
