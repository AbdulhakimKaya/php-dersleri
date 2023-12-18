<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

$id = $_GET["id"];
$sonuc = getCategoryById($id);
$selectedCategory = mysqli_fetch_assoc($sonuc);

$category = $categoryErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["category"])) {
        $categoryErr = "category gerekli alan" . "<br>";
    } else {
        $category = safe_html($_POST["category"]);
    }

    if (empty($categoryErr)) {
        if (editCategory($id, $category)) {
            $_SESSION["message"] = $category . " isimli kategori güncellendi";
            $_SESSION["type"] = "success";
            header('Location: admin-categories.php');
        } else {
            echo "hata";
        }
    }
}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="category">Kategori Adı</label>
                        <input type="text" name="category" class="form-control"
                               value="<?php echo $selectedCategory["kategori_adi"]; ?>">
                        <div class="badge text-bg-danger p-2 mt-2"><?php echo $categoryErr; ?></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
