<head>
    <title><?php echo $lang['homepage'] ?></title>
</head>
<div id="content" class="bg-white">
    <h1><?php echo $lang['home'] ?></h1>
    <div class="activity-feed">
        <br>
        <p><?php echo $lang['home-p1'] ?></p>
        <p><?php echo $lang['home-p2'] ?></p>
        <br>

    </div>
    <div class="activity-feed">
        <br>
        <p class="hinweis"><?php echo $lang['home-übersicht-datum'] ?></p>
        <h3><?php echo $lang['home-übersicht'] ?></h3>
        <ul class="no-dots-ul">
            <li>
                <h4><a class="no-text-transform" href="?f=home&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home-übersicht-home'] ?></a></h4>
                <p><?php echo $lang['home-übersicht-home-p1'] ?></p>
            </li>
            <li>
                <h4><?php echo $lang['home-übersicht-info'] ?></h4>
                <p><?php echo $lang['home-übersicht-info-p1'] ?></p>
                <ul class="no-dots-ul">
                    <li>
                        <h4><a class="no-text-transform" href="?f=featured&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home-übersicht-info-featured'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-info-featured-p1'] ?></p>
                    </li>
                    <li>
                        <h4><a class="no-text-transform" href="?f=mods&lang=<?php echo $_SESSION['lang'] ?> "><?php echo $lang['home-übersicht-info-mods'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-info-mods-p1'] ?></p>
                    </li>
                    <li>
                        <h4><a class="no-text-transform" href="?f=partner&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home-übersicht-info-partner'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-info-partner-p1'] ?></p>
                        <p><?php echo $lang['home-übersicht-info-partner-p2'] ?></p>
                    </li>
                    <li>
                        <h4><a class="no-text-transform" href="?f=specs&lang=<?php echo $_SESSION['lang'] ?> "><?php echo $lang['home-übersicht-info-specs'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-info-specs-p1'] ?></p>
                    </li>
                    <li>
                        <h4><a class="no-text-transform" href="?f=streaming-info&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home-übersicht-info-streaming'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-info-streaming-p1'] ?></p>
                    </li>
                    <li>
                        <h4><a class="no-text-transform" href="?f=wer-ist-shurizma&lang=<?php echo $_SESSION['lang'] ?> "><?php echo $lang['home-übersicht-info-whois'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-info-whois-p1'] ?></p>
                    </li>
                </ul>
            </li>
            <li>
                <h4><?php echo $lang['home-übersicht-spiele'] ?></h4>
                <p><?php echo $lang['home-übersicht-spiele-p1'] ?></p>
                <ul class="no-dots-ul">
                    <li>
                        <h4><a class="no-text-transform" href="?f=payday&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home-übersicht-spiele-payday2'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-spiele-payday2-p1'] ?></p>
                    </li>
                </ul>
            </li>
            <li>
                <h4><?php echo $lang['home-übersicht-galerie'] ?></h4>
                <p><?php echo $lang['home-übersicht-galerie-p1'] ?></p>
                <ul class="no-dots-ul">
                    <li>
                        <h4><a class="no-text-transform" href="?f=gta-gallery&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home-übersicht-galerie-gta'] ?></a></h4>
                        <p><?php echo $lang['home-übersicht-galerie-gta-p1'] ?></p>
                        <p><?php echo $lang['home-übersicht-galerie-gta-p2'] ?></p>
                    </li>
                </ul>
            </li>
            <li>
                <h4><a href="https://forum.shurizma.de"><?php echo $lang['home-übersicht-forum'] ?></a></h4>
                <p><?php echo $lang['home-übersicht-forum-p1'] ?></p>
            </li>
            <li>
                <h4><?php echo $lang['home-übersicht-font'] ?></h4>
                <p><?php echo $lang['home-übersicht-font-p1'] ?></p>
                <p><?php echo $lang['home-übersicht-font-p2'] ?></p>
            </li>
            <li>
                <h4><?php echo $lang['home-übersicht-sprache'] ?></h4>
                <p><?php echo $lang['home-übersicht-sprache-p1'] ?></p>
                <p><?php echo $lang['home-übersicht-sprache-p2'] ?></p>
            </li>
        </ul>
        <br>

    </div>
    <br>
</div>
