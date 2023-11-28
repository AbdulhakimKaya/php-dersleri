<?php

function intro()
{
    $parametreSayisi = func_num_args();
    if ($parametreSayisi == 0) {
        echo "parametre yok" . "<br>";
    } else {
        $parametreler = func_get_args();

        foreach ($parametreler as $parametre) {
            echo $parametre . "<br>";
        }
    }
}

intro();
intro("Abdulhakim", "KAYA", "Diyarbakır", "21");
