<?php

require "libs/variables.php";
require "libs/functions.php";

?>

<?php

$categoryId = "";
$keyword = "";
$page = 1;

if (isset($_GET["categoryid"]) && is_numeric($_GET["categoryid"]))
    $categoryId = $_GET["categoryid"];

if (isset($_GET["q"]))
    $keyword = $_GET["q"];

if (isset($_GET["page"]) && is_numeric($_GET["page"]))
    $page = $_GET["page"];

$response = getCoursesByFilters($categoryId, $keyword, $page);


?>


<?php include 'partials/_header.php' ?>

<?php include 'partials/_navbar.php' ?>

<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <?php include 'partials/_menu.php' ?>
        </div>
        <div class="col-9">
            <?php include 'partials/_title.php' ?>

            <?php if (mysqli_num_rows($response["data"]) > 0): ?>

                <?php while ($kurs = mysqli_fetch_assoc($response["data"])): ?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurs["resim"] ?>" alt="course-img"
                                     class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="course-details.php?id=<?php echo $kurs["id"]; ?>">
                                            <?php echo $kurs["baslik"] ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo kisaAciklama($kurs["altBaslik"]) ?>
                                    </p>
                                    <p>
                                        <?php if ($kurs["begeniSayisi"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-danger p-2">
                                            Beğeni: <?php echo $kurs["begeniSayisi"] ?>
                                        </span>
                                        <?php endif; ?>

                                        <?php if ($kurs["yorumSayisi"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-secondary p-2">
                                            Yorum: <?php echo $kurs["yorumSayisi"] ?>
                                        </span>
                                        <?php else: ?>
                                            <span class="badge rounded-pill text-bg-info p-2">
                                            ilk yorumu sen yap
                                        </span>
                                        <?php endif; ?>
                                    </p>
                                    <p class="text-muted"><?php echo $kurs["yayinTarihi"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php else: ?>

                <div class="alert alert-warning">
                    Kurs bulunamadı!
                </div>

            <?php endif; ?>

            <?php if ($response["total_pages"] > 1): ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($x = 1; $x <= $response["total_pages"]; $x++): ?>
                            <li class="page-item <?php if ($x == $page) echo "active" ?>">
                                <a class="page-link"
                                   href="
                                   <?php
                                   $url = "?page=" . $x;

                                   if (!empty($categoryId)) {
                                       $url .= "&categoryid=" . $categoryId;
                                   }

                                   if (!empty($keyword)) {
                                       $url .= "&q=" . $keyword;
                                   }

                                   echo $url;
                                   ?>
                                "
                                >
                                    <?php echo $x ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            <?php endif ?>
        </div>
    </div>

</div>

<?php include 'partials/_footer.php' ?>
