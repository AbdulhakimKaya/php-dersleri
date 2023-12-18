<?php

require "libs/variables.php";
require "libs/functions.php";

?>

<?php
if (!isLoggedIn()) {
    header("Location: login.php");
}
?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h3>Merhaba, <?php echo $_SESSION["username"] ?></h3>
            <p>Yetkisiz alan ulaşmaktasınız..</p>
            <div>
                <a href="logout.php">Çıkış Yap</a>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
