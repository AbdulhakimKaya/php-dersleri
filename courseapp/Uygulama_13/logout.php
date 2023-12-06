<?php

//setcookie("username", "", time() - (60 * 60 * 24));
//setcookie("auth", false, time() - (60 * 60 * 24));


// dizinin cookie ile saklanması

setcookie("auth[username]", "", time() - (60 * 60 * 24));
setcookie("auth[name]", "", time() - (60 * 60 * 24));

header("Location: index.php");
