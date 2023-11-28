<?php

$ogrenciler = array("mako", "koko", "çiko");

for ($i = 0; $i < count($ogrenciler); $i++) {
    echo $ogrenciler[$i] . "<br>";
}

echo "<br>";

$i = 0;
while ($i < count($ogrenciler)) {
    echo $ogrenciler[$i] . "<br>";
    $i++;
}

echo "<br>";

$urunler = array(
    array("iphone 13 pro", 50000),
    array("iphone 14 pro", 60000),
    array("iphone 15 pro", 70000),
);

for ($i = 0; $i < count($urunler); $i++) {
    echo $urunler[$i][0] . " : " . $urunler[$i][1] . " ₺";
    echo "<br>";
}

echo "<br>";


// associative dizilerde for döngüsü kullanımı

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

$keys = array_keys($urunler2);

for ($i = 0; $i < count($urunler2); $i++) {
    print_r($urunler2[$keys[$i]]["urun_adi"]);
    echo " : ";
    print_r($urunler2[$keys[$i]]["urun_fiyati"]);
    echo "<br>";
}
