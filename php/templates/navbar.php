<nav class="nav-wrapper bg-white">

    <ul>
        <li><a href="?page=home"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-home'] ?></a></li>
        <li>
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-info'] ?></a>
            <ul>
                <li><a class="no-text-transform" href="?page=mods"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-mods'] ?></a></li>
                <li><a class="no-text-transform" href="?page=partner"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-partner'] ?></a></li>
                <li><a class="no-text-transform" href="?page=specs"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-specs'] ?></a></li>
                <li><a class="no-text-transform" href="?page=streaming-info"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-stream'] ?></a></li>
                <li><a class="no-text-transform" href="?page=wer-ist-shurizma"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-whois'] ?></a></li>
            </ul>
        </li>
        <li>
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-games'] ?></a>
            <ul>
                <li><a class="no-text-transform" href="?page=payday"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-payday'] ?></a></li>
            </ul>
        </li>
        <li>
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-gallery'] ?></a>
            <ul>
                <li><a class="no-text-transform" href="?page=gta-gallery"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-gta'] ?></a></li>
            </ul>
        </li>
        <li><a href="https://forum.shurizma.de"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-forum'] ?></a></li>
        <li>
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-font'] ?></a>
            <ul>
                <form method="post">
                    <input type="hidden" name="page" id="page" value="<?php if (isset($_GET['page'])) {echo $_GET['page'];}else{echo 'home';} ?>">
                    <input type="text" name="font" id="font">
                    <input type="submit" value="Submit" onclick="Cookies.set('font', form.font.value);">
                </form>
            </ul>
        </li>
        <?php
        if ( $_COOKIE['lang'] == "de" ) {
            echo '<li>
                        <a class="a-index fas"><img src="img/lang/de_flagge.png" /></a>

                        <ul>
                            <li><a class="a-index fas" onclick="Cookies.set(\'lang\', \'en\');" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><img src="img/lang/en_flagge.svg.png" /></a></li>
                        </ul>
                    </li>';
        } else if ( $_COOKIE['lang'] == "en" ) {
            echo '<li>
                        <a class="a-index fas"><img src="img/lang/en_flagge.svg.png" /></a>

                        <ul>
                            <li><a class="a-index fas" onclick="Cookies.set(\'lang\', \'de\');" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><img src="img/lang/de_flagge.png" /></a></li>
                        </ul>
                    </li>';
        }
        ?>

    </ul>

</nav>
