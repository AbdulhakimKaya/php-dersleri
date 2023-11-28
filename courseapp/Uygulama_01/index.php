<?php

$kurs1_baslik = "Php Kursu";
$kurs1_alt_baslik = "Sıfırdan ileri seviye Php ile web geliştirme";
$kurs1_resim = "1.jpg";
$kurs1_yayin_tarihi = "01.01.2032";
$kurs1_yorum_sayisi = "100";
$kurs1_begeni_sayisi = "300";

$kurs2_baslik = "Python Kursu";
$kurs2_alt_baslik = "Sıfırdan ileri seviye Python prrogramlama";
$kurs2_resim = "2.jpg";
$kurs2_yayin_tarihi = "03.03.2032";
$kurs2_yorum_sayisi = "200";
$kurs2_begeni_sayisi = "400";

$kurs3_baslik = "Node.js Kursu";
$kurs3_alt_baslik = "Sıfırdan ileri seviye Node.js ile web geliştirme";
$kurs3_resim = "3.jpg";
$kurs3_yayin_tarihi = "05.05.2032";
$kurs3_yorum_sayisi = "300";
$kurs3_begeni_sayisi = "500";

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
    <div class="card mb-3">
        <div class="row">
            <div class="col-3">
                <img src="img/<?php echo $kurs1_resim ?>" alt="course-img" class="img-fluid rounded-start">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $kurs1_baslik ?></h5>
                    <p class="card-text"><?php echo $kurs1_alt_baslik ?></p>
                    <p>
                        <span class="badge rounded-pill text-bg-danger p-2">
                            Beğeni: <?php echo $kurs1_begeni_sayisi ?>
                        </span>

                        <span class="badge rounded-pill text-bg-secondary p-2">
                            Yorum: <?php echo $kurs1_yorum_sayisi ?>
                        </span>
                    </p>
                    <p class="text-muted"><?php echo $kurs1_yayin_tarihi ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row">
            <div class="col-3">
                <img src="img/<?php echo $kurs2_resim ?>" alt="course-img" class="img-fluid rounded-start">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $kurs2_baslik ?></h5>
                    <p class="card-text"><?php echo $kurs2_alt_baslik ?></p>
                    <p>
                        <span class="badge rounded-pill text-bg-danger p-2">
                            Beğeni: <?php echo $kurs2_begeni_sayisi ?>
                        </span>

                        <span class="badge rounded-pill text-bg-secondary p-2">
                            Yorum: <?php echo $kurs2_yorum_sayisi ?>
                        </span>
                    </p>
                    <p class="text-muted"><?php echo $kurs2_yayin_tarihi ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row">
            <div class="col-3">
                <img src="img/<?php echo $kurs3_resim ?>" alt="course-img" class="img-fluid rounded-start">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $kurs3_baslik ?></h5>
                    <p class="card-text"><?php echo $kurs3_alt_baslik ?></p>
                    <p>
                        <span class="badge rounded-pill text-bg-danger p-2">
                            Beğeni: <?php echo $kurs3_begeni_sayisi ?>
                        </span>

                        <span class="badge rounded-pill text-bg-secondary p-2">
                            Yorum: <?php echo $kurs3_yorum_sayisi ?>
                        </span>
                    </p>
                    <p class="text-muted"><?php echo $kurs3_yayin_tarihi ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>