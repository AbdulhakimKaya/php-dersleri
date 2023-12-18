<?php

require "libs/variables.php";
require "libs/functions.php";

?>


<?php include 'partials/_message.php' ?>

<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<div class="container my-3">
    <div class="row">
        <div class="col-2">
            <div class="mb-2">
                <a href="category-create.php" class="btn btn-primary">Kategori Ekle</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px">Id</th>
                    <th>Kategori Adı</th>
                    <th style="width: 150px"></th>
                </tr>
                </thead>
                <tbody>
                <?php $sonuc = getCategories();
                while ($category = mysqli_fetch_assoc($sonuc)): ?>
                    <tr>
                        <td>
                            <?php echo $category["id"] ?>
                        </td>
                        <td>
                            <?php echo $category["kategori_adi"] ?>
                        </td>
                        <td>
                            <a href="category-edit.php?id=<?php echo $category["id"] ?>" class="btn btn-warning btn-sm">Düzenle</a>
                            <a href="category-delete.php?id=<?php echo $category["id"] ?>"
                               class="btn btn-danger btn-sm">Sil</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php' ?>
