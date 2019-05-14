<!doctype html>
<html lang="de">
     <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>ShuriZma: Terms of Service</title>
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
                "link": "Erfahre mehr",
                "href": "https://shurizma.de/php/de/datenschutz.php"
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
                    <a href="../../index.html">
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
                            <li><a class="a-index fas"  href="../en/termsofservice.php"><img src="../../img/lang/en_flagge.svg.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>

			<div id="content" class="bg-white">

                <h1>Disclaimer</h1>
                <h2>Haftungsbeschränkung für eigene Inhalte</h2>

                <p>Alle Inhalte unseres Internetauftritts wurden mit Sorgfalt und nach bestem Gewissen erstellt.<br>
                    Eine Gewähr für die Aktualität, Vollständigkeit und Richtigkeit sämtlicher Seiten kann jedoch nicht übernommen werden.</p>

                <br>

                <p>Gemäß § 7 Abs. 1 TMG sind wir als Dienstanbieter für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich, nach den §§ 8 bis 10 TMG jedoch nicht verpflichtet,<br>
                    die übermittelten oder gespeicherten fremden Informationen zu überwachen. <br>
                    Eine umgehende Entfernung dieser Inhalte erfolgt ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung und wir haften nicht vor dem Zeitpunkt der Kenntniserlangung.</p>

                <h2>Haftungsbeschränkung für externe Links</h2>

                <p>Unsere Website enthält sog. „externe Links“ (Verknüpfungen zu Websites Dritter),<br>
                    auf deren Inhalt wir keinen Einfluss haben und für den wir aus diesem Grund keine Gewähr übernehmen. <br>
                    Für die Inhalte und Richtigkeit der Informationen ist der jeweilige Informationsanbieter der verlinkten Websites verantwortlich. <br>
                    Als die Verlinkung vorgenommen wurde, waren für uns keine Rechtsverstöße erkennbar. <br>
                    Sollte uns eine Rechtsverletzung bekannt werden, wird der jeweilige Link umgehend von uns entfernt.</p>

                <h2>Urheberrecht</h2>

                <p>Die auf dieser Website veröffentlichten Inhalte und Werke unterliegen dem deutschen Urheberrecht. <br>
                    Jede Art der Vervielfältigung, Bearbeitung, <br>
                    Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechts bedarf der vorherigen schriftlichen Zustimmung des jeweiligen Urhebers bzw. Autors.</p>

                <h2>Datenschutz</h2>

                <p>Durch den Besuch unseres Internetauftritts können Informationen über den Zugriff (Datum, Uhrzeit, aufgerufene Seite) auf dem Server gespeichert werden.<br>
                    Dies stellt keine Auswertung personenbezogener Daten (z.B. Name, Anschrift oder E-Mail Adresse) dar. <br>
                    Sofern personenbezogene Daten erhoben werden, erfolgt dies – sofern möglich – nur mit dem vorherigen Einverständnis des Nutzers der Website. <br>
                    Eine Weiterleitung der Daten an Dritte findet ohne ausdrückliche Zustimmung des Nutzers nicht statt.</p>
                <br>


                <p>Wir weisen ausdrücklich darauf hin, dass die Übertragung von Daten im Internet (z.B. per E-Mail) Sicherheitslücken aufweisen kann. <br>
                    Ein lückenloser Schutz der Daten vor dem Zugriff Dritter kann nicht gewährleistet werden.<br>
                    Wir können keine Haftung für die durch solche Sicherheitslücken entstehenden Schäden übernehmen.</p>

                <br>

                <p>Der Verwendung veröffentlichter Kontaktdaten durch Dritte zum Zwecke von Werbung wird ausdrücklich widersprochen.<br>
                    Wir behalten uns rechtliche Schritte für den Fall der unverlangten Zusendung von Werbeinformationen, z.B. durch Spam-Mails, vor.</p>

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
