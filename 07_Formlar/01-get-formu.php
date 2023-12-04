<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>

    <title>Title</title>
</head>
<body>

<form action="01-get.php" method="GET">
    <input type="text" name="q">
    <input type="text" name="category">
    <button type="submit">Gönder</button>
</form>


<!--
verileri aynı sayfa içerisinden çağıracaksak form'da action girmeden de kullanabiliriz
-->
<?php

if ($_GET) {
    $query = $_GET['q'];
    $product = $_GET['product'];

    echo $query;
    echo "<br>";
    echo $product;
}

?>

<form method="GET">
    <input type="text" name="q">
    <input type="text" name="product">
    <button type="submit">Gönder</button>
</form>

</body>
</html>