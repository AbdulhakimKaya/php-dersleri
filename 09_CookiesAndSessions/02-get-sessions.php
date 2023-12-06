<?php

session_start();

if (isset($_SESSION["username"])) {
    echo $_SESSION["username"];
} else {
    echo "username yok";
}

echo $_SESSION["password"];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// session silme

//unset($_SESSION["username"]);


// bütün session'ı silme

//session_unset();
$_SESSION = [];