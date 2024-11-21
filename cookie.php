<?php
//Information stored as cache in user's web browser
//Can be seen on application then cookies
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "mojito", time() + (86400 * 3), "/");

foreach ($_COOKIE as $key => $value) {
    echo "$key = $value <br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo " {$_COOKIE["fav_food"]} ";
}
