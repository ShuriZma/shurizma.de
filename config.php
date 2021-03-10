<?php
/* Sprache mit Cookies */
if (isset($_COOKIE['lang'])) {
    if (($_COOKIE['lang']) == null) {
        setcookie('lang', 'de', time()+60*60*24*6004);
    }
} else {
    setcookie('lang', 'de', time()+60*60*24*6004);
}

if (isset($_COOKIE['mode'])) {
    if (($_COOKIE['mode']) == null) {
        setcookie('mode', '', time()+60*60*24*6004);
    }
} else {
    setcookie('mode', '', time()+60*60*24*6004);
}

if (isset($_COOKIE['style'])) {
    if (($_COOKIE['style']) == null) {
        setcookie('style', 'dark', time()+60*60*24*6004);
    }
} else {
    setcookie('style', 'dark', time()+60*60*24*6004);
}

/* Font mit Cookies */
if (isset($_COOKIE['font'])) {
    if (($_COOKIE['font']) == null) {
        setcookie('font', 'PT Sans', time()+60*60*24*6004);
    }
} else {
    setcookie('font', 'PT Sans', time()+60*60*24*6004);
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
