<?php

include "ayar.php";


//$query = "SELECT * from kurslar WHERE id=1";    // kurslar tablosundan id değeri 1 olan kurs getirilir
//$query = "SELECT * from kurslar WHERE id>1";    // kurslar tablosundan id değeri 1'den büyük olan kurslar getirilir
//$query = "SELECT * from kurslar WHERE onay=1";    // kurslar tablosundan onay değeri 1 olan kurslar getirilir
//$query = "SELECT * from kurslar WHERE id>3 and id<7";    // kurslar tablosundan id değeri 3 ie 7 arasında olan kurslar getirilir
//$query = "SELECT * from kurslar WHERE baslik='React Kursu'";    // kurslar tablosundan baslik degeri React Kursu olan kurs getirilir
$query = "SELECT * from kurslar WHERE baslik like '%Kurs%'";    // kurslar tablosundan baslik degerinde Kurs olan kursları getirilir

$sonuc = mysqli_query($baglanti, $query);

if (mysqli_num_rows($sonuc) > 0) {
    while ($satir = mysqli_fetch_assoc($sonuc)) {
        echo $satir["id"] . " " . $satir["baslik"];
        echo "<br>";
    }
} else {
    echo "kayit yok";
}


// db bağlantısını kapatma
mysqli_close($baglanti);
