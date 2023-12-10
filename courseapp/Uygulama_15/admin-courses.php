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
                <a href="course-create.php" class="btn btn-primary">Kurs Ekle</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px">Id</th>
                    <th style="width: 150px"></th>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th style="width: 50px">Onay</th>
                    <th style="width: 150px"></th>
                </tr>
                </thead>
                <tbody>
                <?php $sonuc = getCourses();
                while ($course = mysqli_fetch_assoc($sonuc)): ?>
                    <tr>
                        <td>
                            <?php echo $course["id"] ?>
                        </td>
                        <td>
                            <img src="img/<?php echo $course["resim"] ?>" class="img-fluid" alt="resim">
                        </td>
                        <td>
                            <?php echo $course["baslik"] ?>
                        </td>
                        <td>
                            <?php
                            echo "<ul>";
                            $result = getCategoriesByCourseId($course["id"]);

                            if (mysqli_num_rows($result) > 0) {
                                while ($category = mysqli_fetch_assoc($result)) {
                                    echo "<li>" . $category["kategori_adi"] . "</li>";
                                }
                            } else {
                                echo "<li>Kategori seçilmedi!</li>";
                            }
                            echo "</ul>";
                            ?>
                        </td>
                        <td>
                            <?php if ($course["onay"]): ?>
                                <i class="fas fa-check"></i>
                            <?php else: ?>
                                <i class="fas fa-times"></i>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="course-edit.php?id=<?php echo $course["id"] ?>" class="btn btn-warning btn-sm">Düzenle</a>
                            <a href="course-delete.php?id=<?php echo $course["id"] ?>"
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
