<?php

// Dosya yükleme

if (isset($_POST['btnFileUpload']) && $_POST['btnFileUpload'] == "Upload") {

    // Kontrolümüz dışında oluşan hataların kontrol edilmesi
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {

        echo "<pre>";
        print_r($_FILES['fileToUpload']);
        print_r($_POST);
        echo "</pre>";

        // Dosyanın klasöre kaydedilmesi

        // Dosya özelliklerinin kontrolü

        $uploadOk = true;

        $dest_path = "./uploadedFiles/";

        $filename = $_FILES["fileToUpload"]["name"];
        $fileSize = $_FILES["fileToUpload"]["size"];
        $dosyaUzantilari = array('jpg', 'jpeg', 'png');

        if (empty($filename)) {
            $uploadOk = false;
            echo "dosya seçiniz" . "<br>";
        }

        if ($fileSize > 100000) {
            $uploadOk = false;
            echo "Dosya boyutu fazla" . "<br>";
        }


        // Dosya isminin güncellenmesi

        $dosyaAdi = explode(".", $filename);
        $dosyaAdiUzantisiz = $dosyaAdi[0];
        $dosyaAdiUzantisi = $dosyaAdi[1];

        if (!in_array($dosyaAdiUzantisi, $dosyaUzantilari)) {
            $uploadOk = false;
            echo "dosya uzantısı kabul edilmiyor" . "<br>";
            echo "kabul edilen dosyalar: " . implode(", ", $dosyaUzantilari) . "<br>";
        }

        $yeniDosyaAdi = md5(time() . $dosyaAdiUzantisiz) . '.' . $dosyaAdiUzantisi;

        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];
        $fileDestPath = $dest_path . $yeniDosyaAdi;

        if (!$uploadOk) {
            echo "dosya yüklenmedi" . "<br>";
        } else {
            if (move_uploaded_file($fileSourcePath, $fileDestPath)) {
                echo "dosya yüklendi" . "<br>";
            } else {
                echo "hata" . "<br>";
            }
        }
    } else {
        echo "Hata oluştu";
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

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="fileToUpload">Resim</label>
                    <input type="file" name="fileToUpload" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Upload" name="btnFileUpload" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>