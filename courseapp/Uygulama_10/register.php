<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $city = $_POST["city"];
    $hobiler = $_POST["hobiler"];

    echo $username . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";
    echo $repassword . "<br>";
    echo $city . "<br>";

    foreach ($hobiler as $hobi) {
        echo $hobi . "<br>";
    }

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="username">Kullanıcı adı</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Eposta</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrarı</label>
                    <input type="password" name="repassword" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="city">İl</label>
                    <select name="city" class="form-select">
                        <option value="1" selected>İl seçiniz..</option>
                        <option value="2">Diyarbakır</option>
                        <option value="3">Malatya</option>
                        <option value="4">İstanbul</option>
                    </select>
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
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
