<?php foreach (getDb()["kurslar"] as $kurs): ?>

    <?php if ($kurs["onay"]): ?>
        <div class="card mb-3">
            <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurs["resim"] ?>" alt="course-img"
                         class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo urlDuzenle($kurs["baslik"]) ?>">
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
    <?php endif ?>

<?php endforeach ?>