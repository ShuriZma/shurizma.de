<?php
  $bg = array('shurizma_header_0001.png', 'shurizma_header_0002.png', 'shurizma_header_0003.png', 'shurizma_header_0004.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<header id="header" class="bg-white">
    <div class="header-bg" style="background: url('img/<?php echo $selectedBg; ?>') center center no-repeat; height: 300px; background-size: contain;">
        <a href="?f=home&lang=<?php echo $_SESSION['lang'] ?>">
            <div class="logo-wrapper">

                <img class="logo-img" src="img/shurizma.png">

                <div class="logo-title">
                    <h1><?php echo $header_lang['shurizma'] ?></h1>
                    <h2><?php echo $header_lang['header'] ?></h2>
                </div>

            </div>
        </a>
    </div>
</header>
