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
        "onay" => false,
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

kursEkle($kurslar, "Django Kursu", "Sıfırdan ileri seviye Django ile web geliştirme", "2.jpg", "07.07.2023", 10, 10, true);


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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>

    <title>Title</title>
</head>
<body>
<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <?php for ($i = 0; $i < count($kategoriler); $i++): ?>
                    <a
                            href="#"
                            class="list-group-item list-group-item-action  <?php echo ($kategoriler[$i]["aktif"]) ? "active" : "" ?>">
                        <?php echo $kategoriler[$i]["kategori_adi"] ?>
                    </a>
                <?php endfor ?>
            </div>
        </div>
        <div class="col-9">
            <h1 class="mb-3"><?php echo title ?></h1>

            <p class="lead">
                <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir
            </p>

            <?php foreach ($kurslar as $kurs): ?>

                <?php if ($kurs["onay"]): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurs["resim"] ?>" alt="course-img"
                                     class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo urlDuzenle($kurs["baslik"]) ?>">
                                            <?php echo $kurs["baslik"] ?>
                                        </a>
                                    </h5>
                                        <p class="card-text">
                                            <?php echo kisaAciklama($kurs["altBaslik"]) ?>
                                        </p>
                                    <p>
                                        <?php if ($kurs["begeniSayisi"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-danger p-2">
                                            Beğeni: <?php echo $kurs["begeniSayisi"] ?>
                                        </span>
                                        <?php endif; ?>

                                        <?php if ($kurs["yorumSayisi"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-secondary p-2">
                                            Yorum: <?php echo $kurs["yorumSayisi"] ?>
                                        </span>
                                        <?php else: ?>
                                            <span class="badge rounded-pill text-bg-info p-2">
                                            ilk yorumu sen yap
                                        </span>
                                        <?php endif; ?>
                                    </p>
                                    <p class="text-muted"><?php echo $kurs["yayinTarihi"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

            <?php endforeach ?>
        </div>
    </div>
</div>
</body>
</html>