<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

$baslik = $baslikErr = "";
$altBaslik = $altBaslikErr = "";
$resim = $resimErr = "";
$aciklama = $aciklamaErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["baslik"])) {
        $baslikErr = "baslik gerekli alan" . "<br>";
    } else {
        $baslik = safe_html($_POST["baslik"]);
    }

    if (empty($_POST["altBaslik"])) {
        $altBaslikErr = "altBaslik gerekli alan" . "<br>";
    } else {
        $altBaslik = safe_html($_POST["altBaslik"]);
    }

    if (empty($_POST["aciklama"])) {
        $aciklamaErr = "altBaslik gerekli alan" . "<br>";
    } else {
        $aciklama = safe_html($_POST["aciklama"]);
    }

    if (!empty($_POST[$_FILES["imageFile"]["name"]])) {
        $resimErr = "resim gerekli alan" . "<br>";
    } else {
        uploadImage($_FILES["imageFile"]);
        $resim = $_FILES["imageFile"]["name"];
    }

    if (empty($baslikErr) && empty($altBaslikErr) && empty($resimErr) && empty($aciklamaErr)) {
        createCourse($baslik, $altBaslik, $aciklama, $resim);
        $_SESSION["message"] = $baslik . " isimli kurs eklendi";
        $_SESSION["type"] = "success";
        header('Location: admin-courses.php');
    }
}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="baslik">Başlık</label>
                        <input type="text" name="baslik" class="form-control" value="<?php echo $baslik; ?>">
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $baslikErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="altBaslik">Alt Başlık</label>
                        <input type="text" name="altBaslik" class="form-control" value="<?php echo $altBaslik; ?>">
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $altBaslikErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="aciklama">Açıklama</label>
                        <textarea name="aciklama" class="form-control"><?php echo $aciklama; ?></textarea>
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $aciklamaErr; ?></div>
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <input type="file" name="imageFile" id="imageFile" class="form-control">
                            <label for="imageFile" class="input-group-text">Yükle</label>
                        </div>
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $resimErr; ?></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/_editor.php' ?>
<?php include 'partials/_footer.php' ?>
