<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

$usernameErr = $emailErr = $passwordErr = $repasswordErr = $cityErr = $hobiesErr = "";
$username = $email = $password = $repassword = $city = "";
$hobies = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "username gerekli alan" . "<br>";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "email gerekli alan" . "<br>";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "password gerekli alan" . "<br>";
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["repassword"])) {
        $repasswordErr = "repassword gerekli alan" . "<br>";
    } else {
        $repassword = $_POST["repassword"];
    }

    if (($_POST["password"]) != ($_POST["repassword"])) {
        $repasswordErr = "parola tekrarı alanı eşleşmiyor" . "<br>";
    } else {
        $repassword = $_POST["repassword"];
    }

    if (($_POST["city"]) == -1) {
        $cityErr = "city seçilmeli" . "<br>";
    } else {
        $city = $_POST["city"];
    }

    if (!isset($_POST["hobies"])) {
        $hobiesErr = "hobiler seçilmeli" . "<br>";
    } else {
        $hobies = $_POST["hobies"];
    }
}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="username">Kullanıcı adı</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $usernameErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="email">Eposta</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $emailErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $passwordErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrarı</label>
                    <input type="password" name="repassword" class="form-control" value="<?php echo $repassword; ?>">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $repasswordErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="city">İl</label>
                    <select name="city" class="form-select">
                        <option value="-1" selected>İl seçiniz..</option>
                        <?php foreach ($sehirler as $plaka => $sehir): ?>
                            <option
                                    value="<?php echo $plaka; ?>"
                                <?php echo $city == $plaka ? ' selected' : ''; ?>
                            >
                                <?php echo $sehir; ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $cityErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="hobies">Hobiler</label>
                    <div class="form-check">
                        <input type="checkbox" name="hobies[]" value="sinema" id="hobies_0">
                        <label for="hobies_0" class="form-check-label">Sinema</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="hobies[]" value="fotografcilik" id="hobies_1">
                        <label for="hobies_1" class="form-check-label">Fotoğrafçılık</label>
                    </div>
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $hobiesErr; ?></div>
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
