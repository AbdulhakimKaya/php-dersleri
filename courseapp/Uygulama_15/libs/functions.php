<?php

function getCategories()
{
    include 'ayar.php';

    $query = "SELECT * from kategoriler";
    $sonuc = mysqli_query($baglanti, $query);

    mysqli_close($baglanti);

    return $sonuc;
}


function getCategoryById(int $id)
{
    include 'ayar.php';

    $query = "SELECT * from kategoriler WHERE id='$id'";
    $sonuc = mysqli_query($baglanti, $query);

    mysqli_close($baglanti);

    return $sonuc;
}


function editCategory(int $id, string $category)
{
    include 'ayar.php';

    $query = "UPDATE kategoriler SET kategori_adi='$category' WHERE id='$id'";
    $sonuc = mysqli_query($baglanti, $query);

    mysqli_close($baglanti);

    return $sonuc;
}


function deleteCategory(int $id)
{
    include 'ayar.php';

    $query = "DELETE from kategoriler WHERE id='$id'";
    $sonuc = mysqli_query($baglanti, $query);

    mysqli_close($baglanti);

    return $sonuc;
}


function createCategory(string $kategori)
{
    include 'ayar.php';

    $query = "INSERT INTO kategoriler(kategori_adi) VALUES (?)";
    $stmt = mysqli_prepare($baglanti, $query);

    mysqli_stmt_bind_param($stmt, 's', $kategori);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $stmt;
}


function getCourses()
{
    include 'ayar.php';

    $query = "SELECT k.id,k.baslik,k.resim,k.onay,c.kategori_adi from kurslar k inner join kategoriler c on k.kategori_id=c.id";
    $sonuc = mysqli_query($baglanti, $query);

    mysqli_close($baglanti);

    return $sonuc;
}


function createCourse(string $baslik, string $altBaslik, string $resim, int $kategori_id, int $yorumSayisi = 0, int $begeniSayisi = 0, int $onay = 0)
{
    include 'ayar.php';

    $query = "INSERT INTO kurslar(baslik,altBaslik,resim,kategori_id,yorumSayisi,begeniSayisi,onay) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($baglanti, $query);

    mysqli_stmt_bind_param($stmt, 'sssiiii', $baslik, $altBaslik, $resim, $kategori_id, $yorumSayisi, $begeniSayisi, $onay);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $stmt;
}


function getCourseById(int $id)
{
    include 'ayar.php';

    $query = "SELECT * from kurslar WHERE id='$id'";
    $sonuc = mysqli_query($baglanti, $query);

    mysqli_close($baglanti);

    return $sonuc;
}


function editCourse(int $id, string $baslik, string $altBaslik, string $resim, int $kategori_id, int $onay)
{
    include 'ayar.php';

    $query = "UPDATE kurslar SET baslik='$baslik', altBaslik='$altBaslik', resim='$resim', kategori_id=$kategori_id, onay=$onay WHERE id=$id";
    $sonuc = mysqli_query($baglanti, $query);

    mysqli_close($baglanti);

    return $sonuc;
}


function uploadImage(array $file)
{
    if (isset($file)) {
        $destPath = "./img/";
        $fileName = $file["name"];
        $fileSourcePath = $file["tmp_name"];
        $fileDestPath = $destPath.$fileName;

        move_uploaded_file($fileSourcePath, $fileDestPath);
    }
}


function getDb()
{
    $myFile = fopen("db.json", "r");
    $fileSize = filesize("db.json");
    $data = json_decode(fread($myFile, $fileSize), true);
    fclose($myFile);
    return $data;
}


function kursEkle(string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $begeniSayisi = 0, int $yorumSayisi = 0, bool $onay = true)
{
    $db = getDb();

    array_push($db["kurslar"], array(
            "baslik" => $baslik,
            "altBaslik" => $altBaslik,
            "resim" => $resim,
            "yayinTarihi" => $yayinTarihi,
            "begeniSayisi" => $begeniSayisi,
            "yorumSayisi" => $yorumSayisi,
            "onay" => $onay,
        )
    );

    $myFile = fopen("db.json", "w");
    fwrite($myFile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myFile);
}


function urlDuzenle($baslik)
{
    return str_replace([" ", "@", "."], ["-", "", "-"], strtolower($baslik));       // baslikdaki bazı karakterler istenilen karakterler ile değiştirilir
}


function kisaAciklama($altBaslik)
{
    if (strlen($altBaslik) > 50) {
        return substr($altBaslik, 0, 50) . "...";
    } else {
        return $altBaslik;
    }
}


function safe_html($data)
{
    $data = trim($data);                // girilen değerin başındaki ve sonundaki boşlukları siler
    $data = stripslashes($data);        // gönderilen veri üzerinden sql injection'a karşı bir süzme işlemi yapar
    $data = htmlspecialchars($data);    // etiketlerin html entity karşılığını getirir
    return $data;
}

?>