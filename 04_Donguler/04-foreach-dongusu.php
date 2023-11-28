<?php

$ogrenciler = array("mako", "koko", "çiko");

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci . "<br>";
}


$urunler = array(
    array("iphone 13 pro", 50000),
    array("iphone 14 pro", 60000),
    array("iphone 15 pro", 70000),
);

echo "<br>";

foreach ($urunler as $urun) {
    echo $urun[0] . " : " . $urun[1] . "<br>";
}

echo "<br>";


// associative dizilerde foreach döngüsü kullanımı

$urunler2 = array(
    "100" =>
        array(
            "urun_adi" => "iphone 13 pro",
            "urun_fiyati" => 50000
        ),
    "101" =>
        array(
            "urun_adi" => "iphone 14 pro",
            "urun_fiyati" => 60000
        ),
    "102" =>
        array(
            "urun_adi" => "iphone 15 pro",
            "urun_fiyati" => 70000
        ),
);

foreach ($urunler2 as $key => $value) {
    echo $key . " => " . $value["urun_adi"] . " : " . $value["urun_fiyati"];
    echo "<br>";
}
