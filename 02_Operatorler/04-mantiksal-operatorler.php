<?php

/*
    and -> x ve y nin true olmasıyla sonuç true olur
    or  -> x ve y den herhangi birinin true olmasıyla sonuç true olur
    xor -> x ve y den herhangi biri true ise sonuç true olur, ikisi de true veya false ise sonuç false döner
    !x  -> x in tersini alır
*/

$yas = 20;
$mezuniyet = "lise";

$sonuc = ($yas >= 18) and ($mezuniyet == "lise");   // true
$sonuc = ($yas >= 18) and ($mezuniyet == "lise" or $mezuniyet == "üniversite" or $mezuniyet == "yüksek lisans");    // true

/*
    xor
    false & false -> false
    false & true  -> true
    true & false  -> true
    true & true   -> false
*/
$sonuc = ($yas >= 18) xor ($mezuniyet == "lise");

$sonuc = !(true);

echo var_dump($sonuc);
echo "<br>";

