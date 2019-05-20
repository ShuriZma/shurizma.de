<nav class="nav-wrapper bg-white">

    <ul>
        <li><a href="?f=home&lang=<?php echo $_SESSION['lang'] ?>"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-home'] ?></a></li>
        <li>
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-info'] ?></a>
            <ul>
                <li><a class="no-text-transform" href="?f=partner&lang=<?php echo $_SESSION['lang'] ?>"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-partner'] ?></a></li>
                <li><a class="no-text-transform" href="?f=speccs&lang=<?php echo $_SESSION['lang'] ?> "><span class="a-index fas"></span><?php echo $navbar_lang['navbar-speccs'] ?></a></li>
                <li><a class="no-text-transform" href="?f=streaming-info&lang=<?php echo $_SESSION['lang'] ?>"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-stream'] ?></a></li>
                <li><a class="no-text-transform" href="?f=wer-ist-shurizma&lang=<?php echo $_SESSION['lang'] ?> "><span class="a-index fas"></span><?php echo $navbar_lang['navbar-whois'] ?></a></li>
            </ul>
        </li>
        <li><a href="https://forum.shurizma.de"><span class="a-index fas"></span><?php echo $navbar_lang['navbar-forum'] ?></a></li>
        <li>
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-font'] ?></a>
            <ul>
                <select id="selecth1FontFamily">
                    <option value="Comic Sans MS">Comic Sans MS</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Arial">Arial</option>
                    <option value="Arial Black">Arial Black</option>
                    <option value="Impact">Impact</option>
                    <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                    <option value="Tahoma">Tahoma</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Courier New">Courier New</option>
                    <option value="Lucida Console">Lucida Console</option>
                    <option value="PT Sans">PT Sans</option>>
                </select>

                <script>
                    var selector = document.getElementById('selecth1FontFamily');
                    var asd = document.getElementById('edit');

                    if (localStorage.length != 0) {
                        asd.style.fontFamily = localStorage.font;
                        asd.value = localStorage.font;
                    } else {
                        localStorage.setItem('font', '');
                    }


                    selector.onchange = function() {
                        var family = this.value;
                        asd.style.fontFamily = family;
                        localStorage.font = family;
                    }

                </script>
            </ul>
        </li>
        <?php
        if ( $_SESSION['lang'] == "de" ) {
            echo '<li>
                        <a class="a-index fas"><img src="img/lang/de_flagge.png" /></a>

                        <ul>
                            <li><a class="a-index fas" href="?';

                if (isset($_GET['f'])) {
                    echo 'f=' . $_GET['f'] . '&';
                } else
                    echo 'f=home&';

                echo 'lang=en"><img src="img/lang/en_flagge.svg.png" /></a></li>
                        </ul>
                    </li>';
        } else if ( $_SESSION['lang'] == "en" ) {
            echo '<li>
                        <a class="a-index fas"><img src="img/lang/en_flagge.svg.png" /></a>

                        <ul>
                            <li><a class="a-index fas" href="?';

                if (isset($_GET['f'])) {
                    echo 'f=' . $_GET['f'] . '&';
                } else
                    echo 'f=home&';

                            echo 'lang=de"><img src="img/lang/de_flagge.png" /></a></li>
                        </ul>
                    </li>';
        }
        ?>

    </ul>

</nav>
