<?php

$ogrenciA = array("Abdulhakim KAYA", array(70, 80, 90));
$ogrenciB = array("Erkam YÜCE", array(80, 80, 70));

$ogrenciA_ortalama = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
$ogrenciB_ortalama = ($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2]) / 3;

echo $ogrenciA[0] . "<br>";
echo $ogrenciA[1][0] . "<br>";
echo $ogrenciA[1][1] . "<br>";
echo $ogrenciA[1][2] . "<br>";
echo "Ortalama: $ogrenciA_ortalama" . "<br>";

echo $ogrenciB[0] . "<br>";
echo $ogrenciB[1][0] . "<br>";
echo $ogrenciB[1][1] . "<br>";
echo $ogrenciB[1][2] . "<br>";
echo "Ortalama: $ogrenciB_ortalama" . "<br>";


$sinif = array(
    "110" => array(
        "ad" => "Furkan",
        "soyad" => "OĞUZ",
        "notlar" => array(
            "matematik" => array(80, 100, 90),
            "fizik" => array(80, 100, 90),
            "biyoloji" => array(80, 100, 90),
        )
    ),
    "113" => array(
        "ad" => "Ömer Faruk",
        "soyad" => "DOĞAN",
        "notlar" => array(
            "matematik" => array(80, 100, 90),
            "fizik" => array(80, 100, 90),
            "biyoloji" => array(80, 100, 90),
        )
    ),
);

echo $sinif["110"]["ad"] . " ";
echo $sinif["110"]["soyad"] . "<br>";
echo $sinif["110"]["notlar"]["matematik"][0] . "<br>";
echo $sinif["110"]["notlar"]["matematik"][1] . "<br>";
echo $sinif["110"]["notlar"]["matematik"][2] . "<br>";

$not1 = $sinif["110"]["notlar"]["fizik"][0];
$not2 = $sinif["110"]["notlar"]["fizik"][1];
$not3 = $sinif["110"]["notlar"]["fizik"][2];

$not_ortalama = ($not1 + $not2 + $not3) / 3;

echo "Ortalama: $not_ortalama";
