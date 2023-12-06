<?php
if (!empty($_GET['q'])) {
    $keyword = $_GET['q'];
    $kurslar = array_filter($kurslar, function ($kurs) use ($keyword) {
        return stristr($kurs['baslik'], $keyword) or (stristr($kurs['altBaslik'], $keyword));
    });
}
?>


<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">CourseApp</a>

        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link active">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="create.php" class="nav-link">Kurslar</a>
            </li>
        </ul>

        <ul class="navbar-nav me-2">
            <?php if (isset($_COOKIE["username"])): ?>
                <li class="nav-item">
                    <a href="login.php" class="nav-link active">Hoşgeldiniz, <?php echo $_COOKIE["username"] ?></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link active">Çıkış Yap</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="login.php" class="nav-link active">Giriş Yap</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link active">Kayıt Ol</a>
                </li>
            <?php endif ?>
        </ul>

        <form action="index.php" class="d-flex">
            <input type="text" name="q" class="form-control border-warning" placeholder="Keyword">
            <button type="submit" class="btn btn-warning">Ara</button>
        </form>
    </div>
</nav>