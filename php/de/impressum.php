<!doctype html>
<html lang="de">
     <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>ShuriZma: Impressum</title>
        <link rel="apple-touch-icon" sizes="57x57" href="../../img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../../img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../../img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../../img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../../img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../../img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../../img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../../img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../../img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../../img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../../img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../../js/manifest.json">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
        <script>
            window.addEventListener("load", function(){
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                  "background": "#000"
                },
                "button": {
                  "background": "transparent",
                  "text": "#f1d600",
                  "border": "#f1d600"
                }
              },
              "position": "top",
              "content": {
                "message": "Diese Website verwendet Cookies, um sicherzustellen, dass du die bestmögliche Erfahrung auf unserer Website machen kannst.",
                "dismiss": "Verstanden!",
                "link": "Erfahre mehr"
              }
            })});
        </script>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
		<link rel="stylesheet" href="../../css/styles.css">
    </head>

    <body class="default-font">
        <div class="wrapper">

			<header id="header" class="bg-white">
				<div class="header-bg">
                    <a href="../../index.php">
                        <div class="logo-wrapper">

                            <img class="logo-img" src="../../img/shurizma.png">

                            <div class="logo-title">
                                <h1>ShuriZma</h1>
                                <h2>Offizielle Homepage</h2>
                            </div>

                        </div>
                    </a>
                </div>
			</header>

			<nav class="nav-wrapper bg-white">

				<ul>
					<li><a href="../../index.php"><span class="a-index fas"></span>Startseite</a></li>
					<li>
						<a><span class="a-index fas"></span>Info</a>
						<ul>
							<li><a class="no-text-transform" href="wer-ist-shurizma.php"><span class="a-index fas"></span>Wer ist ShuriZma</a></li>
							<li><a class="no-text-transform" href="streaming-info.php"><span class="a-index fas"></span>Streaming-Info</a></li>
                            <li><a class="no-text-transform" href="partner.php"><span class="a-index fas"></span>Partner</a></li>
						</ul>
					</li>
					<li><a href="https://forum.shurizma.de"><span class="a-index fas"></span>Forum</a></li>
					<li>
						<a><span class="a-index fas"></span>Font</a>
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
                                }else{
                                    localStorage.setItem('font', '');
                                }


                                selector.onchange = function(){
                                    var family = this.value;
                                    asd.style.fontFamily = family;
                                    localStorage.font = family;
                                }
							</script>
						</ul>
					</li>
					<li>
                        <a class="a-index fas"><img src="../../img/lang/de_flagge.png"/></a>

                        <ul>
                            <li><a class="a-index fas"  href="../en/legal-notice.php"><img src="../../img/lang/en_flagge.svg.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>

			<div id="content" class="bg-white">
                <h1>Impressum</h1>

                <h2>Angaben gem&auml;&szlig; &sect; 5 TMG</h2>
                <p>Markus Heß<br>
                    An der Wuhlheide 148<br>
                    12459 Berlin</p>

                <h2>Kontakt</h2>
                <p>Telefon: +49 (0) 176 21 40 88 50<br>
                    E-Mail: shurizma@shurizma.de</p>
			</div>
			<div >
                <a class="a-index fas footer-link" href="datenschutz.php">Datenschutzerklärung</a>
                <a class="a-index fas footer-link" href="impressum.php">Impressum</a>
                <p class="footer">&copy;2018-<?php echo date("Y"); ?> Copyright ShuriZma, All Rights Reserved.</p>
				<div class="container-hypesquad">
                    <a href="https://discord.claudespeed.de">
                        <img class="hypesquad" src="../../img/hypesquad-white.png">
                        <p class="hypesquad">Join our Discord</p>
                    </a>
				</div>
            </div>
		</div>
    </body>
</html>
