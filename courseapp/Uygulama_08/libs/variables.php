<?php

const title = "Popüler Kurslar";

$kategoriler = array(
    array(
        "kategori_adi" => "Programlama",
        "aktif" => true,
    ),
    array(
        "kategori_adi" => "Web Geliştirme",
        "aktif" => false,
    ),
    array(
        "kategori_adi" => "Veri Analizi",
        "aktif" => false,
    ),
    array(
        "kategori_adi" => "Ofis Uygulamaları",
        "aktif" => false,
    ),
);

$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "1.jpg",
        "yayinTarihi" => "01.01.2032",
        "begeniSayisi" => 0,
        "yorumSayisi" => 10,
        "onay" => true,
    ),
    "2" => array(
        "baslik" => "Python Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python prrogramlama",
        "resim" => "2.jpg",
        "yayinTarihi" => "03.03.2032",
        "begeniSayisi" => 10,
        "yorumSayisi" => 0,
        "onay" => true,
    ),
    "3" => array(
        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "3.jpg",
        "yayinTarihi" => "05.05.2032",
        "begeniSayisi" => 10,
        "yorumSayisi" => 20,
        "onay" => true,
    ),
);

?>