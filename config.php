<?php
/* Sprache mit Cookies */
if (isset($_COOKIE['lang'])) {
    if (($_COOKIE['lang']) == null) {
        setcookie('lang', 'de');
    }
} else {
    setcookie('lang', 'de');
}

/* Font mit Cookies */
if (isset($_COOKIE['font'])) {
    if (($_COOKIE['font']) == null) {
        setcookie('font', 'PT Sans');
    }
} else {
    setcookie('font', 'PT Sans');
}

if (isset($_GET['page'])) {
    if (isset($_COOKIE['lang'])) {
        if (($_COOKIE['lang']) == null) {
            require_once 'php/languages/'. $_GET['page'] . '.de.lang.php';
        } else {
            require_once "php/languages/". $_GET['page'] . '.' . $_COOKIE['lang'] . ".lang.php";
        }
    } else {
        require_once 'php/languages/'. $_GET['page'] . '.de.lang.php';
    }
} else {
    if (isset($_COOKIE['lang'])) {
        if (($_COOKIE['lang']) == null) {
            require_once 'php/languages/home.de.lang.php';
        } else {
            require_once 'php/languages/home.' . $_COOKIE['lang'] . '.lang.php';
        }
    } else {
        require_once 'php/languages/home.de.lang.php';
    }
}

if (isset($_COOKIE['lang'])) {
    if (($_COOKIE['lang']) == null) {
        require_once 'php/languages/head.de.lang.php';
        require_once 'php/languages/header.de.lang.php';
        require_once 'php/languages/navbar.de.lang.php';
        require_once 'php/languages/footer.de.lang.php';
    } else {
        require_once 'php/languages/head.' . $_COOKIE['lang'] . '.lang.php';
        require_once 'php/languages/header.' . $_COOKIE['lang'] . '.lang.php';
        require_once 'php/languages/navbar.' . $_COOKIE['lang'] . '.lang.php';
        require_once 'php/languages/footer.' . $_COOKIE['lang'] . '.lang.php';
    }
} else {
    require_once 'php/languages/head.de.lang.php';
    require_once 'php/languages/header.de.lang.php';
    require_once 'php/languages/navbar.de.lang.php';
    require_once 'php/languages/footer.de.lang.php';
}
?>
