<?php

include "ayar.php";

$baslik = "Java Kursu";
$altBaslik = "ileri seviye Java dersleri";
$resim = "1.jpg";
$yayinTarihi = "01.01.2024";
$yorumSayisi = 10;
$begeniSayisi = 10;
$onay = 1;

$query = "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES (?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($baglanti, $query);

mysqli_stmt_bind_param($stmt, 'ssssiii', $baslik, $altBaslik, $resim, $yayinTarihi, $yorumSayisi, $begeniSayisi, $onay);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

echo "veri eklendi";


// db bağlantısını kapatma
mysqli_close($baglanti);
