<?php
if (isset($_GET["categoryid"]) && is_numeric($_GET["categoryid"])) {
    $selectedCategory = $_GET["categoryid"];
}
?>


<div class="list-group">
    <?php
        $sonuc = getCategories();
        while ($category = mysqli_fetch_assoc($sonuc)):
    ?>
    <a
        href="<?php echo "courses.php?categoryid=" . $category["id"] ?>"
        class="list-group-item list-group-item-action
            <?php
                if ($category["id"] == $selectedCategory) {
                    echo "active";
                }
            ?>
    ">
        <?php echo $category["kategori_adi"] ?>
    </a>

    <?php endwhile; ?>
</div>