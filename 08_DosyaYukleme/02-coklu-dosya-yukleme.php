<?php

// Çoklu dosya yükleme

if (isset($_POST['btnFileUpload']) && $_POST['btnFileUpload'] == "Upload") {
    $dosyaAdeti = count($_FILES["fileToUpload"]["name"]);
    $maxFileSize = (1024 * 1024) * 1;
    $fileTypes = array("image/jpg", "image/jpeg", "image/png");
    $uploadOk = true;

    if ($dosyaAdeti > 2) {
        $uploadOk = false;
        echo "max 2 adet dosya yüklenebilir" . "<br>";
    }

    if ($uploadOk) {
        for ($i = 0; $i < $dosyaAdeti; $i++) {
            $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$i];
            $fileName = $_FILES["fileToUpload"]["name"][$i];
            $fileSize = $_FILES["fileToUpload"]["size"][$i];
            $fileType = $_FILES["fileToUpload"]["type"][$i];


            if (in_array($fileType, $fileTypes)) {
                if ($fileSize > $maxFileSize) {
                    echo "max dosya boyutu 1mb olmalıdır" . "<br>";;
                } else {
                    $dosyaAdiArr = explode(".", $fileName);
                    $dosyaAdiUzantisiz = $dosyaAdiArr[0];
                    $dosyaAdiUzantisi = $dosyaAdiArr[1];

                    $yeniDosyaAdi = $dosyaAdiUzantisiz . "-" . rand(0, 9999999) . "." . $dosyaAdiUzantisi;
                    $dest_path = "multipleUploadedFiles/" . $yeniDosyaAdi;

                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        echo $yeniDosyaAdi . " dosyası yüklendi" . "<br>";
                    } else {
                        echo $yeniDosyaAdi . " dosyası yüklenemedi" . "<br>";
                    }
                }
            } else {
                echo "dosya uzantısı kabul edilmiyor" . "<br>";
                echo "kabul edilen dosyalar: " . implode(", ", $fileTypes) . "<br>";
            }
        }
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
                    <label for="fileToUpload">Resimler</label>
                    <input type="file" name="fileToUpload[]" multiple="multiple" class="form-control">
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