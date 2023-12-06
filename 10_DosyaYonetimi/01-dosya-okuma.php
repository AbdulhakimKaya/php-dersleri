<?php

/*
    fopen("dosya_ismi","dosya.txt açma modu");

    dosya.txt açma modları:

    r  : Dosya okuma modunda açılır. İmleç dosyanın başında yer alır.
    w  : Dosya yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir.
    a  : Dosya yazma modunda açılır. İmleç dosya.txt sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
    x  : Dosya yazma modunda açılır. Dosya yoksa oluşturulur, varsa False döner.

    r+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır.
    w+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir.
    a+ : Dosya yazma ve okuma modunda açılır. İmleç dosya.txt sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
    x+ : Dosya okuma ve yazma modunda açılır. Dosya yoksa oluşturulur, varsa False döner.

*/


$myFile = fopen("dosya.txt", "r");
$fileSize = filesize("dosya.txt");

//echo fread($myFile, $fileSize);

while (!feof($myFile)) {
    echo fgets($myFile)."<br>";
}

fclose($myFile);
