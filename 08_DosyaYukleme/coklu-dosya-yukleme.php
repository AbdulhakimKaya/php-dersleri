<?php

// Çoklu dosya yükleme

if (isset($_POST['btnFileUpload']) && $_POST['btnFileUpload'] == "Upload") {
    $dosyaAdeti = count($_FILES["fileToUpload"]["name"]);

    for ($i = 0; $i < $dosyaAdeti; $i++) {
        $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$i];
        $fileName = $_FILES["fileToUpload"]["name"][$i];

        $dest_path = "multipleUploadedFiles/" . $fileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            echo $fileName . " dosyası yüklendi" . "<br>";
        } else {
            echo $fileName . " dosyası yüklenemedi" . "<br>";
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