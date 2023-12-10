<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

session_start();

$id = $_GET["id"];
$sonuc = getCourseById($id);
$selectedCourse = mysqli_fetch_assoc($sonuc);

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

    if (empty($_FILES["imageFile"]["name"])) {
        $resim = $selectedCourse["resim"];
    } else {
        uploadImage($_FILES["imageFile"]);
        $resim = $_FILES["imageFile"]["name"];
    }

    if ($_POST["category"] == "0") {
        $categoryErr = "kategori seçmelisiniz";
    } else {
        $category = $_POST["category"];
    }

    $onay = $_POST["onay"] == "on" ? 1 : 0;

    if (empty($baslikErr) && empty($altBaslikErr) && empty($resimErr) && empty($categoryErr)) {
        editCourse($id, $baslik, $altBaslik, $resim, $category, $onay);
        $_SESSION["message"] = $baslik . " isimli kurs güncellendi";
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
                        <input type="text" name="baslik" class="form-control"
                               value="<?php echo $selectedCourse["baslik"]; ?>">
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $baslikErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="altBaslik">Alt Başlık</label>
                        <textarea name="altBaslik"
                                  class="form-control"><?php echo $selectedCourse["altBaslik"]; ?></textarea>
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $altBaslikErr; ?></div>
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <input type="file" name="imageFile" id="imageFile" class="form-control">
                            <label for="imageFile" class="input-group-text">Yükle</label>
                        </div>
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $resimErr; ?></div>
                        <img src="img/<?php echo $selectedCourse["resim"]; ?>" style="width: 150px" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="category">Kategori</label>
                        <select name="category" id="category" class="for-select">
                            <option value="0" selected>Seçiniz..</option>
                            <?php foreach (getCategories() as $c): ?>
                                <option value="<?php echo $c["id"] ?>"><?php echo $c["kategori_adi"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $categoryErr; ?></div>
                    <script type="text/javascript">
                        document.getElementById("category").value = "<?php echo $selectedCourse["kategori_id"] ?>"
                    </script>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="onay"
                               id="onay" <?php echo $selectedCourse["onay"] ? "checked" : "" ?>>
                        <label class="form-check-label" for="onay">
                            Onay
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
