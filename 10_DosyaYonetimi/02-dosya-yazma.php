<?php

// Dosya yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir.
//$myFile = fopen("dosya2.txt", "w");

// Dosya yazma modunda açılır. İmleç dosya2.txt sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
//$myFile = fopen("dosya2.txt", "a");

// Dosya yazma ve okuma modunda açılır. İmleç dosya2.txt sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
$myFile = fopen("dosya2.txt", "a+");

$title = "Php Dersleri\n";
fwrite($myFile, $title);    // dosyaya verilen bilgiler yazdırılır

fseek($myFile, 0);  // imleç başa alınır

// dosya okunur
while (!feof($myFile)) {
    echo fgets($myFile)."<br>";
}

// dosya kapatılır
fclose($myFile);
