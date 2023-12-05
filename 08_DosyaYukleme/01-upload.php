<?php

// Dosya yükleme

if (isset($_POST['btnFileUpload']) && $_POST['btnFileUpload'] == "Upload") {
    echo "<pre>";
    print_r($_FILES['fileToUpload']);
    print_r($_POST);
    echo "</pre>";

    // Dosyanın klasöre kaydedilmesi
    $dest_path = "./uploadedFiles/";

    $filename = $_FILES["fileToUpload"]["name"];
    $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];

    $fileDestPath = $dest_path.$filename;

    if (move_uploaded_file($fileSourcePath, $fileDestPath)) {
        echo "dosya yüklendi";
    } else {
        echo "hata";
    }

}
