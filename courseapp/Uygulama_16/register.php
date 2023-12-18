<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

$usernameErr = $emailErr = $passwordErr = $repasswordErr = "";
$username = $email = $password = $repassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "username gerekli alan" . "<br>";
    } elseif (strlen($_POST["username"]) < 3 or strlen($_POST["username"]) > 50) {
        $usernameErr = "username 3-50 karakter aralığında olmalıdır" . "<br>";
    } else {
        $username = safe_html($_POST["username"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "email gerekli alan" . "<br>";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "email bilgisi hatalı" . "<br>";
    } else {
        $email = safe_html($_POST["email"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "password gerekli alan" . "<br>";
    } else {
        $password = safe_html($_POST["password"]);
    }

    if (empty($_POST["repassword"])) {
        $repasswordErr = "repassword gerekli alan" . "<br>";
    } else {
        $repassword = safe_html($_POST["repassword"]);
    }

    if (($_POST["password"]) != ($_POST["repassword"])) {
        $repasswordErr = "parola tekrarı alanı eşleşmiyor" . "<br>";
    } else {
        $repassword = safe_html($_POST["repassword"]);
    }

    if (empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($repasswordErr)) {
        include "ayar.php";

        $sql = "INSERT INTO kullanicilar(username,email,password) VALUES(?,?,?)";

        if ($stmt = mysqli_prepare($baglanti, $sql)) {
            $paramUsername = $username;
            $paramEmail = $email;
            $paramPassword = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $paramUsername, $paramEmail, $paramPassword);

            if (mysqli_stmt_execute($stmt)) {
                header("Location: login.php");
            } else {
                echo mysqli_error($baglanti);
                echo "<br>";
                echo "hata oluştu";
            }
        }
    }
}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="POST" novalidate>
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
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
