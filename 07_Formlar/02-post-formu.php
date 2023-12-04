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

<form action="02-post.php" method="POST">
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>


<!--
verileri aynı sayfa içerisinden çağıracaksak form'da action girmeden de kullanabiliriz
-->
<?php

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . " " . $password;
}

?>

<form method="POST">
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>

</body>
</html>