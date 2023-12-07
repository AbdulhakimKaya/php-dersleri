<?php

include "ayar.php";

// kurslar tablosundan id degeri 1 olan kaydın baslik ve altBaslik alanlarinda güncelleme yapılır
$query = "UPDATE kurslar SET baslik='Php Kursu', altBaslik='İleri seviye php dersleri' WHERE id=1";

// bütün kursların onay değeri güncellenir
$query = "UPDATE kurslar SET onay=1";


$sonuc = mysqli_query($baglanti, $query);

if ($sonuc) {
    echo "veri güncellendi";
} else {
    echo "güncelleme hatası";
}


// db bağlantısını kapatma
mysqli_close($baglanti);
