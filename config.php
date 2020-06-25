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
if ( isset($_GET['font']) ) {
    if ( ($_GET['font']) != NULL ) {
            $_SESSION['font'] = $_GET['font'];
    } else {
        $_SESSION['font'] = "PT Sans";
    }
} else {
    $_SESSION['font'] = "PT Sans";
}
if (isset($_GET['f'])) {
                    require_once "php/languages/". $_GET['f'] . '.' . $_SESSION['lang'] . ".lang.php";
                } else
                    require_once "php/languages/home." . $_SESSION['lang'] . ".lang.php";
require_once "php/languages/head." . $_SESSION['lang'] . ".lang.php";
require_once "php/languages/header." . $_SESSION['lang'] . ".lang.php";
require_once "php/languages/navbar." . $_SESSION['lang'] . ".lang.php";
require_once "php/languages/footer." . $_SESSION['lang'] . ".lang.php";
?>
