<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

$username = $email = $password = $repassword = "";
$usernameErr = $emailErr = $passwordErr = $repasswordErr = $cityErr = $hobilerErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "username gerekli alan" . "<br>";
    } else {
        echo $username . "<br>";
    }

    if (empty($_POST["email"])) {
        $emailErr = "email gerekli alan" . "<br>";
    } else {
        echo $email . "<br>";
    }

    if (empty($_POST["password"])) {
        $passwordErr = "password gerekli alan" . "<br>";
    } else {
        echo $password . "<br>";
    }

    if (empty($_POST["repassword"])) {
        $repasswordErr = "repassword gerekli alan" . "<br>";
    } else {
        echo $repassword . "<br>";
    }

    if (($_POST["password"]) != ($_POST["repassword"])) {
        $repasswordErr = "parola tekrarı alanı eşleşmiyor" . "<br>";
    } else {
        echo $repassword = $_POST["repassword"];
    }

    if (($_POST["city"]) == -1) {
        $cityErr = "city seçilmeli" . "<br>";
    } else {
        echo $city . "<br>";
    }

    if (!isset($_POST["hobiler"])) {
        $hobilerErr = "hobiler seçilmeli" . "<br>";
    } else {
        echo $hobiler . "<br>";
    }
}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="username">Kullanıcı adı</label>
                    <input type="text" name="username" class="form-control">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $usernameErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="email">Eposta</label>
                    <input type="email" name="email" class="form-control">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $emailErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $passwordErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrarı</label>
                    <input type="password" name="repassword" class="form-control">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $repasswordErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="city">İl</label>
                    <select name="city" class="form-select">
                        <option value="-1" selected>İl seçiniz..</option>
                        <option value="1">Diyarbakır</option>
                        <option value="2">İzmir</option>
                        <option value="3">Malatya</option>
                        <option value="4">İstanbul</option>
                    </select>
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $cityErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="hobiler">Hobiler</label>
                    <div class="form-check">
                        <input type="checkbox" name="hobiler[]" value="sinema" id="hobiler_0">
                        <label for="hobiler_0" class="form-check-label">Sinema</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="hobiler[]" value="fotografcilik" id="hobiler_1">
                        <label for="hobiler_1" class="form-check-label">Fotoğrafçılık</label>
                    </div>
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $hobilerErr; ?></div>
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
