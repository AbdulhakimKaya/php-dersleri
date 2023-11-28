<?php
const title = "Popüler Kurslar";

$kategoriler = array("Programlama", "Web Geliştirme", "Veri Analizi", "Ofis Uygulamaları");
sort($kategoriler);

$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "1.jpg",
        "yayinTarihi" => "01.01.2032",
        "begeniSayisi" => "100",
        "yorumSayisi" => "300",
    ),
    "2" => array(
        "baslik" => "Python Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python prrogramlama",
        "resim" => "2.jpg",
        "yayinTarihi" => "03.03.2032",
        "begeniSayisi" => "200",
        "yorumSayisi" => "400",
    ),
    "3" => array(
        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "3.jpg",
        "yayinTarihi" => "05.05.2032",
        "begeniSayisi" => "300",
        "yorumSayisi" => "500",
    ),
);

$yeni_kurs = array(
    "baslik" => "Django Kursu",
    "altBaslik" => "Sıfırdan ileri seviye Django ile web geliştirme",
    "resim" => "3.jpg",
    "yayinTarihi" => "05.05.2032",
    "begeniSayisi" => "300",
    "yorumSayisi" => "500",
);

$kurslar["4"] = $yeni_kurs;

$kurs1_alt_baslik = ucfirst(strtolower($kurslar["1"]["baslik"]));     // bütün harfler küçük yazıldı ve sonrasında ilk harf büyütüldü
$kurs2_alt_baslik = ucfirst(strtolower($kurslar["2"]["baslik"]));
$kurs3_alt_baslik = ucfirst(strtolower($kurslar["3"]["baslik"]));

$kurs1_alt_baslik = substr($kurslar["1"]["altBaslik"], 0, 50) . "...";     // ilk 50 karakter yazıldı ve sonrasına "..." bırakıldı
$kurs2_alt_baslik = substr($kurslar["2"]["altBaslik"], 0, 50) . "...";
$kurs3_alt_baslik = substr($kurslar["3"]["altBaslik"], 0, 50) . "...";

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
                <a href="#" class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[0] ?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[1] ?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[2] ?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[3] ?>
                </a>
            </div>
        </div>
        <div class="col-9">
            <h1 class="mb-3"><?php echo title ?></h1>

            <p class="lead">
                <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir
            </p>

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
                            <p class="card-text"><?php echo $kurslar["1"]["altBaslik"] ?></p>
                            <p>
                        <span class="badge rounded-pill text-bg-danger p-2">
                            Beğeni: <?php echo $kurslar["1"]["begeniSayisi"] ?>
                        </span>

                                <span class="badge rounded-pill text-bg-secondary p-2">
                            Yorum: <?php echo $kurslar["1"]["yorumSayisi"] ?>
                        </span>
                            </p>
                            <p class="text-muted"><?php echo $kurslar["1"]["yayinTarihi"] ?></p>
                        </div>
                    </div>
                </div>
            </div>

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
                            <p class="card-text"><?php echo $kurslar["2"]["altBaslik"] ?></p>
                            <p>
                        <span class="badge rounded-pill text-bg-danger p-2">
                            Beğeni: <?php echo $kurslar["2"]["begeniSayisi"] ?>
                        </span>

                                <span class="badge rounded-pill text-bg-secondary p-2">
                            Yorum: <?php echo $kurslar["2"]["yorumSayisi"] ?>
                        </span>
                            </p>
                            <p class="text-muted"><?php echo $kurslar["2"]["yayinTarihi"] ?></p>
                        </div>
                    </div>
                </div>
            </div>

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
                            <p class="card-text"><?php echo $kurslar["3"]["altBaslik"] ?></p>
                            <p>
                        <span class="badge rounded-pill text-bg-danger p-2">
                            Beğeni: <?php echo $kurslar["3"]["begeniSayisi"] ?>
                        </span>

                                <span class="badge rounded-pill text-bg-secondary p-2">
                            Yorum: <?php echo $kurslar["3"]["yorumSayisi"] ?>
                        </span>
                            </p>
                            <p class="text-muted"><?php echo $kurslar["3"]["yayinTarihi"] ?></p>
                        </div>
                    </div>
                </div>
            </div>

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
                            <p class="card-text"><?php echo $kurslar["4"]["altBaslik"] ?></p>
                            <p>
                        <span class="badge rounded-pill text-bg-danger p-2">
                            Beğeni: <?php echo $kurslar["4"]["begeniSayisi"] ?>
                        </span>

                                <span class="badge rounded-pill text-bg-secondary p-2">
                            Yorum: <?php echo $kurslar["4"]["yorumSayisi"] ?>
                        </span>
                            </p>
                            <p class="text-muted"><?php echo $kurslar["4"]["yayinTarihi"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>