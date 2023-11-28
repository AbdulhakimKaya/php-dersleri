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

$yeni_kurs = array(
    "baslik" => "Django Kursu",
    "altBaslik" => "Sıfırdan ileri seviye Django ile web geliştirme",
    "resim" => "3.jpg",
    "yayinTarihi" => "05.05.2032",
    "begeniSayisi" => 0,
    "yorumSayisi" => 5,
    "onay" => false,
);

$kurslar["4"] = $yeni_kurs;

$kurs1_alt_baslik = ucfirst(strtolower($kurslar["1"]["baslik"]));     // bütün harfler küçük yazıldı ve sonrasında ilk harf büyütüldü
$kurs2_alt_baslik = ucfirst(strtolower($kurslar["2"]["baslik"]));
$kurs3_alt_baslik = ucfirst(strtolower($kurslar["3"]["baslik"]));

$kurs1_url = str_replace([" ", "@", "."], ["-", "", "-"], strtolower($kurslar["1"]["baslik"]));       // baslikdaki bazı karakterler istenilen karakterler ile değiştirilir
$kurs2_url = str_replace([" ", "@", "."], ["-", "", "-"], strtolower($kurslar["2"]["baslik"]));
$kurs3_url = str_replace([" ", "@", "."], ["-", "", "-"], strtolower($kurslar["3"]["baslik"]));
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

            <?php if ($kurslar["1"]["onay"]): ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["1"]["resim"] ?>" alt="course-img"
                                 class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url ?>">
                                        <?php echo $kurslar["1"]["baslik"] ?>
                                    </a>
                                </h5>
                                <?php if (strlen($kurslar["1"]["altBaslik"]) > 50): ?>
                                    <p class="card-text">
                                        <?php echo substr($kurslar["1"]["altBaslik"], 0, 50) . "..." ?>
                                    </p>
                                <?php else: ?>
                                    <p class="card-text"><?php echo $kurslar["1"]["altBaslik"] ?></p>
                                <?php endif; ?>
                                <p>
                                    <?php if ($kurslar["1"]["begeniSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-danger p-2">
                                            Beğeni: <?php echo $kurslar["1"]["begeniSayisi"] ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($kurslar["1"]["yorumSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-secondary p-2">
                                            Yorum: <?php echo $kurslar["1"]["yorumSayisi"] ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounded-pill text-bg-info p-2">
                                            ilk yorumu sen yap
                                        </span>
                                    <?php endif; ?>
                                </p>
                                <p class="text-muted"><?php echo $kurslar["1"]["yayinTarihi"] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <?php if ($kurslar["2"]["onay"]): ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["2"]["resim"] ?>" alt="course-img"
                                 class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url ?>">
                                        <?php echo $kurslar["2"]["baslik"] ?>
                                    </a>
                                </h5>
                                <?php if (strlen($kurslar["2"]["altBaslik"]) > 50): ?>
                                    <p class="card-text">
                                        <?php echo substr($kurslar["2"]["altBaslik"], 0, 50) . "..." ?>
                                    </p>
                                <?php else: ?>
                                    <p class="card-text"><?php echo $kurslar["2"]["altBaslik"] ?></p>
                                <?php endif; ?>
                                <p>
                                    <?php if ($kurslar["2"]["begeniSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-danger p-2">
                                            Beğeni: <?php echo $kurslar["2"]["begeniSayisi"] ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($kurslar["2"]["yorumSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-secondary p-2">
                                            Yorum: <?php echo $kurslar["2"]["yorumSayisi"] ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounded-pill text-bg-info p-2">
                                            ilk yorumu sen yap
                                        </span>
                                    <?php endif; ?>
                                </p>
                                <p class="text-muted"><?php echo $kurslar["2"]["yayinTarihi"] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>


            <?php if ($kurslar["3"]["onay"]): ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["3"]["resim"] ?>" alt="course-img"
                                 class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url ?>">
                                        <?php echo $kurslar["3"]["baslik"] ?>
                                    </a>
                                </h5>
                                <?php if (strlen($kurslar["3"]["altBaslik"]) > 50): ?>
                                    <p class="card-text">
                                        <?php echo substr($kurslar["3"]["altBaslik"], 0, 50) . "..." ?>
                                    </p>
                                <?php else: ?>
                                    <p class="card-text"><?php echo $kurslar["3"]["altBaslik"] ?></p>
                                <?php endif; ?>
                                <p>
                                    <?php if ($kurslar["3"]["begeniSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-danger p-2">
                                            Beğeni: <?php echo $kurslar["3"]["begeniSayisi"] ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($kurslar["3"]["yorumSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-secondary p-2">
                                            Yorum: <?php echo $kurslar["3"]["yorumSayisi"] ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounded-pill text-bg-info p-2">
                                            ilk yorumu sen yap
                                        </span>
                                    <?php endif; ?>
                                </p>
                                <p class="text-muted"><?php echo $kurslar["3"]["yayinTarihi"] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>


            <?php if ($kurslar["4"]["onay"]): ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["4"]["resim"] ?>" alt="course-img"
                                 class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url ?>">
                                        <?php echo $kurslar["4"]["baslik"] ?>
                                    </a>
                                </h5>
                                <?php if (strlen($kurslar["4"]["altBaslik"]) > 50): ?>
                                    <p class="card-text">
                                        <?php echo substr($kurslar["4"]["altBaslik"], 0, 50) . "..." ?>
                                    </p>
                                <?php else: ?>
                                    <p class="card-text"><?php echo $kurslar["4"]["altBaslik"] ?></p>
                                <?php endif; ?>
                                <p>
                                    <?php if ($kurslar["4"]["begeniSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-danger p-2">
                                            Beğeni: <?php echo $kurslar["4"]["begeniSayisi"] ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($kurslar["4"]["yorumSayisi"] > 0): ?>
                                        <span class="badge rounded-pill text-bg-secondary p-2">
                                            Yorum: <?php echo $kurslar["4"]["yorumSayisi"] ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge rounded-pill text-bg-info p-2">
                                            ilk yorumu sen yap
                                        </span>
                                    <?php endif; ?>
                                </p>
                                <p class="text-muted"><?php echo $kurslar["4"]["yayinTarihi"] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
</body>
</html>