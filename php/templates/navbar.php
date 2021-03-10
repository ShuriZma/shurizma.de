<nav class="nav-wrapper bg-white">

    <ul>
        <li onclick="" class="navbar-border"><a href="?page=home"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-home'] ?></a></li>
        <li onclick="" class="navbar-border">
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-info'] ?></a>
            <ul>
                <li onclick="" class="navbar-border"><a class="no-text-transform" href="?page=mods"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-mods'] ?></a></li>
                <li onclick="" class="navbar-border"><a class="no-text-transform" href="?page=partner"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-partner'] ?></a></li>
                <li onclick="" class="navbar-border"><a class="no-text-transform" href="?page=specs"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-specs'] ?></a></li>
                <li onclick="" class="navbar-border"><a class="no-text-transform" href="?page=streaming-info"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-stream'] ?></a></li>
                <li onclick="" class="navbar-border"><a class="no-text-transform" href="?page=wer-ist-shurizma"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-whois'] ?></a></li>
            </ul>
        </li>
        <li onclick="" class="navbar-border">
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-games'] ?></a>
            <ul>
                <li onclick="" class="navbar-border"><a class="no-text-transform" href="?page=payday"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-payday'] ?></a></li>
            </ul>
        </li>
        <li onclick="" class="navbar-border">
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-gallery'] ?></a>
            <ul>
                <li onclick="" class="navbar-border"><a class="no-text-transform" href="?page=gta-gallery"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-gta'] ?></a></li>
            </ul>
        </li>
        <li onclick="" class="navbar-border"><a href="https://forum.shurizma.de"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-forum'] ?></a></li>
        <?php
        if ( $_COOKIE['style'] == null ) {
            echo '<li onclick="" class="navbar-border">
                        <a><span class="a-index fas"></span><img src="img/style/light.png" /></a>

                        <ul>
                            <li onclick="" class="navbar-border"><a onclick="Cookies.set(\'style\', \'dark\');" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><span class="a-index fas"></span><img src="img/style/dark.png" /></a></li>
                        </ul>
                    </li>';
        } else if ( $_COOKIE['style'] == "dark" ) {
            echo '<li onclick="" class="navbar-border">
                        <a><span class="a-index fas"></span><img src="img/style/dark.png" /></a>

                        <ul>
                            <li onclick="" class="navbar-border"><a onclick="Cookies.set(\'style\', \'light\')" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><span class="a-index fas"></span><img src="img/style/light.png" /></a></li>
                        </ul>
                    </li>';
        } if ( $_COOKIE['style'] == "light" ) {
            
            echo '<li onclick="" class="navbar-border">
                        <a><span class="a-index fas"></span><img src="img/style/light.png" /></a>

                        <ul>
                            <li onclick="" class="navbar-border"><a onclick="Cookies.set(\'style\', \'dark\')" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><span class="a-index fas"></span><img src="img/style/dark.png" /></a></li>
                        </ul>
                    </li>';
        }
        ?>
        <?php
        if ( $_COOKIE['lang'] == null ) {
            echo '<li onclick="" class="navbar-border">
                        <a><span class="a-index fas"></span><img src="img/lang/de_flagge.png" /></a>

                        <ul>
                            <li onclick="" class="navbar-border"><a onclick="Cookies.set(\'lang\', \'en\');" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><span class="a-index fas"></span><img src="img/lang/en_flagge.svg.png" /></a></li>
                        </ul>
                    </li>';
        } else if ( $_COOKIE['lang'] == "en" ) {
            echo '<li onclick="" class="navbar-border">
                        <a><span class="a-index fas"></span><img src="img/lang/en_flagge.svg.png" /></a>

                        <ul>
                            <li onclick="" class="navbar-border"><a onclick="Cookies.set(\'lang\', \'de\')" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><span class="a-index fas"></span><img src="img/lang/de_flagge.png" /></a></li>
                        </ul>
                    </li>';
        } if ( $_COOKIE['lang'] == "de" ) {
            
            echo '<li onclick="" class="navbar-border">
                        <a><span class="a-index fas"></span><img src="img/lang/de_flagge.png" /></a>

                        <ul>
                            <li onclick="" class="navbar-border"><a onclick="Cookies.set(\'lang\', \'en\')" href="?page=';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo 'home';
                }
                echo '"><span class="a-index fas"></span><img src="img/lang/en_flagge.svg.png" /></a></li>
                        </ul>
                    </li>';
        }
        ?>
        <li onclick="" class="navbar-border">
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-font'] ?></a>
            <ul>
                <form method="post">
                    <input type="hidden" name="page" id="page" value="<?php if (isset($_GET['page'])) {echo $_GET['page'];}else{echo 'home';} ?>">
                    <input type="text" name="font" id="font">
                    <input type="submit" value="Submit" onclick="Cookies.set('font', form.font.value);">
                </form>
            </ul>
        </li>

    </ul>

</nav>
