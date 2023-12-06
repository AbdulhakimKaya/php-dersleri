<?php
function kursEkle(&$kurslar, string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $begeniSayisi = 0, int $yorumSayisi = 0, bool $onay = true)
{
    $yeni_kurs[count($kurslar) + 1] = array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "begeniSayisi" => $begeniSayisi,
        "yorumSayisi" => $yorumSayisi,
        "onay" => $onay,
    );

    $kurslar = array_merge($kurslar, $yeni_kurs);
}

function urlDuzenle($baslik)
{
    return str_replace([" ", "@", "."], ["-", "", "-"], strtolower($baslik));       // baslikdaki bazı karakterler istenilen karakterler ile değiştirilir
}


function kisaAciklama($altBaslik)
{
    if (strlen($altBaslik) > 50) {
        return substr($altBaslik, 0, 50) . "...";
    } else {
        return $altBaslik;
    }
}

function safe_html($data)
{
    $data = trim($data);                // girilen değerin başındaki ve sonundaki boşlukları siler
    $data = stripslashes($data);        // gönderilen veri üzerinden sql injection'a karşı bir süzme işlemi yapar
    $data = htmlspecialchars($data);    // etiketlerin html entity karşılığını getirir
    return $data;
}

?>