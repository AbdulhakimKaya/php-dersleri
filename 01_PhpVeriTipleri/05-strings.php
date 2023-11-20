<?php
$ad = "Abdulhakim";
$soyad = "KAYA";
$yas = 21;

//$mesaj = "My name is ".$ad." ".$soyad." and I am ".$yas." years old.";
$mesaj = "My name is $ad $soyad and I am $yas years old.";

echo $mesaj."<br>";
echo $mesaj[0]."<br>";  // M
echo $mesaj[5]."<br>";  // m


// string fonksiyonlar

echo strlen($mesaj)."<br>";             // string'deki karakter sayısını verir
echo str_word_count($mesaj)."<br>";     // string'deki kelime sayısını verir (yas int olduğu için saymadı)
echo strtolower($mesaj)."<br>";         // string'deki her karakteri küçük yapar
echo strtoupper($mesaj)."<br>";         // string'deki her karakteri büyük yapar
echo ucfirst($mesaj)."<br>";            // string'deki ilk karakteri büyük yapar
echo str_replace("Abdulhakim", "Erdem", $mesaj)."<br>";    // string'de istenilen kelime istenildiği gibi değiştirilir
echo str_replace(["Abdulhakim", 21], ["Erdem", 35], $mesaj)."<br>";      // string'de istenilen kelimeler istenildiği gibi değiştirilir
