<?php

// Diziler (Array)

$plakalar = array(41, 53, 34);
$sehirler = array("Kocaeli", "Rize", "İstanbul");

echo "$plakalar[0] : $sehirler[0]"."<br>";
echo "$plakalar[1] : $sehirler[1]"."<br>";
echo "$plakalar[2] : $sehirler[2]"."<br>";


// 2- Associative Arrays (key-value)

// key-value => 34: İstanbul, 21: Diyarbakır

$plaka_bilgileri = array(
  41 => "Kocaeli",
  53 => "Rize",
  34 => "İstanbul",
);

echo $plaka_bilgileri[41]."<br>";
echo $plaka_bilgileri[53]."<br>";
echo $plaka_bilgileri[34]."<br>";
