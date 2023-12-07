<?php

include "ayar.php";

// kurslar tablosundaki tüm veriler silinir (çalıştırılması önerilmez)
//$query = "DELETE from kurslar";

// kurslar tablosundaki id değeri 10 olan kayıt silinir
//$query = "DELETE from kurslar WHERE id=10";

// kurslar tablosundaki id değeri 7 ile 10 arasında olan kayıtlar silinir
$query = "DELETE from kurslar WHERE id>7 and id<10";


$sonuc = mysqli_query($baglanti, $query);
$adet = mysqli_affected_rows($baglanti);

if ($sonuc) {
    echo $adet . " kayit silindi";
} else {
    echo "kayit silinmedi";
}


// db bağlantısını kapatma
mysqli_close($baglanti);
