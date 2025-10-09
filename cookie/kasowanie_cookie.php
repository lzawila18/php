<?php
$cookie_name = "user";
setcookie($cookie_name, "", time() - 3600, "/");
if(!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie '" . $cookie_name . "' zostało usunięte!";
} else {
    echo "Ciasteczko '" . $cookie_name . "' nadal istnieje!";
    echo "Wartość ciasteczka: " . $_COOKIE[$cookie_name];
}
?>