<?php

require "libs/variables.php";
require "libs/functions.php";

session_start();

$id = $_GET["id"];

if (deleteCategory($id)) {
    $_SESSION["message"] = $id . " numralı kategori silindi";
    $_SESSION["type"] = "danger";

    header('Location: admin-categories.php');
} else {
    echo "hata";
}