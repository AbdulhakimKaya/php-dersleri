<?php

include "ayar.php";

// tekli kayit ekleme
/*
$query = "INSERT INTO
          kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
          VALUES
          ('React Kursu','ileri seviye React dersleri','1.jpg','01.01.2024',10,10,1)";

$sonuc = mysqli_query($baglanti, $query);
$insertedId = mysqli_insert_id($baglanti);      // oluşturulan son kaydın id bilgisi alınır
*/


// coklu kayit ekleme
$query = "INSERT INTO 
          kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
          VALUES
          ('Java Kursu','ileri seviye Java dersleri','1.jpg','01.01.2024',10,10,1);";

$query .= "INSERT INTO 
          kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
          VALUES
          ('C Kursu','ileri seviye C dersleri','1.jpg','01.01.2024',10,10,1);";

$query .= "INSERT INTO 
          kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
          VALUES
          ('C++  Kursu','ileri seviye C++ dersleri','1.jpg','01.01.2024',10,10,1);";

$sonuc = mysqli_multi_query($baglanti, $query);
$insertedId = mysqli_insert_id($baglanti);      // oluşturulan son kaydın id bilgisi alınır


// sonucu yazdırma

if ($sonuc) {
    echo "kayit eklendi" . $insertedId;
} else {
    echo "kayit eklenemedi";
}


// db bağlantısını kapatma
mysqli_close($baglanti);
echo "mysql baglantisi kapatildi";

