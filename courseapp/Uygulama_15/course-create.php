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
$category = "0";
$categoryErr = "";

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

    if (!empty($_POST[$_FILES["imageFile"]["name"]])) {
        $resimErr = "resim gerekli alan" . "<br>";
    } else {
        uploadImage($_FILES["imageFile"]);
        $resim = $_FILES["imageFile"]["name"];
    }

    if ($_POST["category"] == "0") {
        $categoryErr = "kategori seçmelisiniz";
    } else {
        $category = $_POST["category"];
    }

    if (empty($baslikErr) && empty($altBaslikErr) && empty($resimErr) && empty($categoryErr)) {
        createCourse($baslik, $altBaslik, $resim, $category);
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
                        <textarea name="altBaslik" class="form-control"><?php echo $altBaslik; ?></textarea>
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $altBaslikErr; ?></div>
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <input type="file" name="imageFile" id="imageFile" class="form-control">
                            <label for="imageFile" class="input-group-text">Yükle</label>
                        </div>
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $resimErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="category">Kategori</label>
                        <select name="category" id="category" class="form-select">
                            <option value="0" selected>Seçiniz..</option>
                            <?php foreach (getCategories() as $c): ?>
                                <option value="<?php echo $c["id"] ?>"><?php echo $c["kategori_adi"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $categoryErr; ?></div>
                    <script type="text/javascript">
                        document.getElementById("category").value = "<?php echo $category; ?>"
                    </script>

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
