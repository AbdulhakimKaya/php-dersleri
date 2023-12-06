<?php

include "ayar.php";


$query = "SELECT * from kurslar";             // bütün kolonlar getirilir
//$query = "SELECT id, baslik from kurslar";      // istenilen kolonlar getirilir


// db baglantisi ile baglanilan db ye sorgu atılır
$sonuc = mysqli_query($baglanti, $query);

// verileri satır satır yazdırmak için kullanırız (index sirasi ile)
while ($row = mysqli_fetch_row($sonuc)) {
    echo $row[0] . " " . $row[1];
    echo "<br>";
}


echo "<hr>";


// db baglantisi ile baglanilan db ye sorgu atılır. imleci başa almak için tekrar yazıldı
$sonuc = mysqli_query($baglanti, $query);

// verileri satır satır yazdırmak için kullanırız (kolon isimleri ile)
while ($row = mysqli_fetch_assoc($sonuc)) {
    echo $row["id"] . " " . $row["baslik"];
    echo "<br>";
}


// db bağlantısını kapatma
mysqli_close($baglanti);
