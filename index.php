<?php
    require "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require('php/templates/head.php'); ?>
    </head>

    <body id="edit" style="font-family: <?php echo $_COOKIE['font'] ?>;">
        <div class="wrapper">

			<?php require('php/templates/header.php'); ?>

			<?php require('php/templates/navbar.php'); ?>

            <?php
            /**
             * Namenskonventionen
             *
             * Dateien, die immer inkludiert werden müssen, enden auf .inc.php
             * Dateien, die Seiten darstellen, enden auf .page.php
             *
             * Aufruf einer Unterseite: https://example.org/?page=whatever
             *
             * Alle zu inkludierenden Dateien sind im Unterverzeichnis /includes/ gespeichert.
             */

            $includes = glob(__DIR__.'/php/*.inc.php');

            # alle $includes laden
            foreach ($includes as $script) {
              include $script;
            }

            # Seiten finden
            $pages = array();

            # Liste mit Seiten befüllen
            foreach (glob(__DIR__.'/php/*.page.php') as $p) {

                # Schlüssel für Dateinamen ermitteln ("home" für "home.page.php")
                $v = preg_replace('~(?i)(?:.*/)?([^.]+)\.page\.php$~', '$1', $p);

                $pages[$v] = $p;
            }

            # anzuzeigende Seite ermitteln
            $page = 'home'; # Standard

            # soll eine bestimmte Seite eingebunden werden?
            if (array_key_exists('page', $_GET)) {

              $page = 'home'; # sollte die geforderte Seite nicht existieren

              # gewünschte Datei finden
              foreach (array_keys($pages) as $p) {

                # ist das die gewünschte Datei?
                if ($p == $_GET['page']) {
                  # übernehmen
                  $page = $p;
                }
              }
            }

            # Seite inkludieren
            include $pages[$page];
            ?>

            <?php require('php/templates/footer.php'); ?>
		</div>
    </body>
</html>
