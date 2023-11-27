<?php

$username = "admin";
$password = "12345";

if ($username != "admin") {
    echo "kullanici adi hatali";
} elseif ($password != "12345") {
    echo "parola hatali";
} else {
    echo "Giris basarili";
}
