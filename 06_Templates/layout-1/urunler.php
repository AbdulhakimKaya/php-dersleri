<?php $title = "ürünler" ?>

<!-- require ile tanımladığımızda eğer import'da hata varsa uygulamanın tamamı çalışmaz -->
<?php require 'partials/_variables.php' ?>

<?php include 'partials/_header.php' ?>

    <main>
        <h1>Ürünler</h1>
        <?php include 'partials/_urunler.php' ?>
    </main>

<?php include 'partials/_footer.php' ?>