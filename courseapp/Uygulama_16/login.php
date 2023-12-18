<?php

require "libs/ayar.php";
require "libs/variables.php";
require "libs/functions.php";

session_start();

if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
    header("Location: index.php");
}

$usernameErr = $passwordErr = $loginErr = "";
$username = $password = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($_POST["username"])) {
        $usernameErr = "username gerekli alan" . "<br>";
    } else {
        $username = safe_html($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "password gerekli alan" . "<br>";
    } else {
        $password = safe_html($_POST["password"]);
    }

    if (empty($usernameErr) && empty($passwordErr)) {
        $sql = "SELECT id, username, password from kullanicilar WHERE username=?";

        if ($stmt = mysqli_prepare($baglanti, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $username);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // parola kontrolü
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashedPassword);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashedPassword)) {
                            $_SESSION["loggedIn"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            header("Location: index.php");
                        } else {
                            $loginErr = "parola yanlış";
                        }
                    }
                } else {
                    $loginErr = "username yanlış";
                }
            } else {
                $loginErr = "bir hata oluştu";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($baglanti);
    }
}

?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<?php

if (!empty($loginErr)) {
    echo "<div class='alert alert-danger'>" . $loginErr . "</div>";
}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username">Kullanıcı adı</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $usernameErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <div class="badge text-bg-danger p-2 mt-2"><?php echo $passwordErr; ?></div>
                </div>
                <button type="submit" class="btn btn-primary" name="login">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
