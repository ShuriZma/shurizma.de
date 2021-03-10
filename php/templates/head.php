<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="img/favicon/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="Fuhrpark"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />
<script type="text/javascript" src="js/toggle.js"></script>
<link rel="stylesheet" type="text/css"  href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<?php echo $head_lang['cookie-consent'] ?>
<script type="module" src="js/js.cookie.js"></script>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
<meta name="description" content="<?php echo $head_lang['head-description'] ?>" />
<meta name="twitter:image" content="/img/unity.png" />
<meta property="og:image" content="/img/unity.png" />
<?php
    if (isset($_COOKIE['style'])) {
        if (($_COOKIE['style']) == null) {
            echo '<link rel="stylesheet" href="css/dark-styles.css.php">';
        } else if (($_COOKIE['style']) == 'light') {
            echo '<link rel="stylesheet" href="css/light-styles.css.php">';
        } else if (($_COOKIE['style']) == 'dark') {
            echo '<link rel="stylesheet" href="css/dark-styles.css.php">';
        }
    } else {
        echo '<link rel="stylesheet" href="css/dark-styles.css.php">';
    }
?>
<!-- ShuriZma Analytics -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analyze.shurizma.de/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analyze.shurizma.de/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End ShuriZma Analytics Code -->
