<?php

$yas = 20;
$egitim = "lise";

if ($yas >= 18) {
    echo "ehliyet alabilir";
} else {
    echo "yaşınız tutmuyor";
}

echo "<br>";

$sonuc = ($yas >= 18) ? "ehliyet alabilir" : "ehliyet alamaz";
echo $sonuc;

echo "<br>";


if ($yas >= 18) {
    if ($egitim == "lise" or $egitim == "üniversite") {
        echo "ehliyet alabilir";
    } else {
        echo "eğitim durumu yetersiz";
    }
} else {
    echo "yaşınız tutmuyor";
}
echo "<br>";

$sonuc = ($yas >= 18)
    ? (($egitim == "lise" or $egitim == "üniversite")
        ? "ehliyet alabilir"
        : "eğitim durumu yetersiz")
    : "yaşınız tutmuyor";
echo $sonuc;
