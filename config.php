<?php
session_start();

if ( isset($_GET['lang']) ) {
    if ( ($_GET['lang']) != NULL ) {
        if ($_GET['lang'] == "de")
            $_SESSION['lang'] = "de";
        else if ($_GET['lang'] == "en")
            $_SESSION['lang'] = "en";
        else
            $_SESSION['lang'] = "de";
    } else {
        $_SESSION['lang'] = "de";
    }
} else {
    $_SESSION['lang'] = "de";
}
require_once "php/languages/" . $_SESSION['lang'] . ".lang.php";
?>
