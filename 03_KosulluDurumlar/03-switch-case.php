<?php

$sayi = 6;

//if ($sayi == 5) {
//    echo "beş";
//} elseif ($sayi == 6) {
//    echo "altı";
//} else {
//    echo "yanlış veri";
//}
//echo "<br>";


// switch case
switch ($sayi) {
    case 5:
        echo "beş";
        break;
    case 6:
        echo "altı";
        break;
    default:
        echo "yanlış veri";
}
echo "<br>";

$not = 50;

//if ($not >= 0 and $not <=50) {
//    echo "kötü";
//} elseif ($not > 50 and $not < 75) {
//    echo "orta";
//}   elseif ($not >= 75 and $not <= 100) {
//    echo "iyi";
//} else {
//    echo "0-100 aralığında değer giriniz.";
//}
//echo "<br>";


// switch case
switch (true) {
    case ($not >= 0 and $not <=50):
        echo "kötü";
        break;
    case ($not > 50 and $not < 75):
        echo "orta";
        break;
    case ($not >= 75 and $not <= 100):
        echo "iyi";
        break;
    default:
        echo "0-100 aralığında değer giriniz.";
}
echo "<br>";


$ay = "ocak";

switch ($ay) {
    case "aralık":
    case "ocak":
    case "şubat":
        echo "kış";
        break;
    case "mart":
    case "nisan":
    case "mayıs":
        echo "ilkbahar";
        break;
    case "haziran":
    case "temmuz":
    case "ağustos":
        echo "yaz";
        break;
    case "eylül":
    case "ekim":
    case "kasım":
        echo "sonbahar";
        break;
    default:
        echo "mevsim yazınız";
}
