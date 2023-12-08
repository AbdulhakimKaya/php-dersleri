<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

session_start();

$baslik = $baslikErr = "";
$altBaslik = $altBaslikErr = "";
$resim = $resimErr = "";

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
    if (empty($_POST["resim"])) {
        $resimErr = "resim gerekli alan" . "<br>";
    } else {
        $resim = safe_html($_POST["resim"]);
    }

    if (empty($baslikErr) or empty($altBaslikErr) or empty($resimErr)) {
        createCourse($baslik, $altBaslik, $resim);
        $_SESSION["message"] = $baslik." isimli kurs eklendi";
        $_SESSION["type"] = "success";
        header('Location: admin-courses.php');
    }
}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="baslik">Başlık</label>
                        <input type="text" name="baslik" class="form-control" value="<?php echo $baslik; ?>">
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $baslikErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="altBaslik">Alt Başlık</label>
                        <textarea name="altBaslik" class="form-control"><?php echo $altBaslik; ?></textarea>
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $altBaslikErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="resim">Resim</label>
                        <input type="text" name="resim" class="form-control" value="<?php echo $resim; ?>">
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $resimErr; ?></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
