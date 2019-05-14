<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>ShuriZma: Wer ist ShuriZma</title>
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
                "link": "Erfahre mehr"
              }
            })});
        </script>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
		<link rel="stylesheet" href="../../css/styles.css">
    </head>

    <body id="edit">
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
                            <li><a class="a-index fas"  href="../en/who-is-shurizma.php"><img src="../../img/lang/en_flagge.svg.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>

			<div id="content" class="bg-white">
				<h1>Wer ist ShuriZma?</h1>
				<p>Das ist tatsächlich keine schlechte Frage!</p>
				<p>Hier erst einmal ein paar grundlegende Infos zu mir:</p>
				<ul>
					<li>Ich bin aktuell <?php
                          //date in mm/dd/yyyy format; or it can be in other formats as well
                          $birthDate = "04/12/2001";
                          //explode the date to get month, day and year
                          $birthDate = explode("/", $birthDate);
                          //get age from date or birthdate
                          $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                            ? ((date("Y") - $birthDate[2]) - 1)
                            : (date("Y") - $birthDate[2]));
                          echo $age;
                        ?> Jahre alt</li>
					<li>Ich lebe in Berlin</li>
					<li>ShuriZma ist nicht mein echter Name (das  wissen ja nicht alle)</li>
					<li>Ich bin zu faul jedes Jahr mein Alter zu aktualisieren<span class="red-link">*</span></li>
				</ul>
				<p>So da ich erstmal die wichtigsten Dinge klargestellt habe können wir ja dann weiter machen.</p>
				<p>Aktuell gehe ich noch zur Schule (hoffentlich aber nicht mehr lange, habe nämlich mehr Spaß am arbeiten), weshalb ich so wie viele andere auch erst am Nachmittag Zeit für die wirklich wichtigen Dinge des Lebens habe.</p>
				<br>
				<p>Für alle die jetzt sagen, dass sich das nicht ändern wird wenn ich arbeiten gehe. Doch natürlich ändert sich das, schließlich ist Arbeit eines der wichtigen Dinge im Leben.</p>
				<br>
				<p>So da das nun geklärt wäre weiter im Text.</p>
				<p>Frage ist nur was die Leute überhaupt über mich wissen wollen, falls sie überhaupt etwas über mich wissen wollen.</p>
				<p>Dann fang ich einfach mal mit meinen Hobbys an.</p>
				<p>Tatsächlich habe ich eine Menge Spaß daran Websites zu schreiben und immer wieder neues im Bereich Web-Entwicklung/-Design zu lernen und zu testen. Ich habe sowohl in HTML, CSS als auch in PHP und Java-Script ein Zertifikat.</p>
				<p>Ich bin ein großer Fan von formellen Sprachen<span class="red-link">**</span>. Zudem übe ich mich aktuell in der Systemadministration.</p>
				<p>Aber auch außerhalb der Informatik habe ich Hobbies (wäre schlimm wenn nicht (richtiger No-Lifer)).</p>
				<p>Beispielsweise zocke ich gerne mit Kumpels (und streame dann meine nicht vorhandenen Gameplays), meistens Shooter wie BO4 und bevorzugt Zombies :P.</p>
				<p>Aber noch viel mehr als alles andere LIEBE ich es Musik zu hören. Die Leute fragen mich immer was ich gerne höre. Darauf gibt es actually gar keine Antwort, da ich beinahe alles höre, in Dauerschleife, Tag und Nacht, 24/7, non-stop.</p>
				<p>Eigentlich gibt es sonst nichts über mich zu sagen. Ich bin halt ein ganz normaler Junge, bis auf den Fakt, dass ich nicht so toxic bin wie viele anderen und nicht 24/7 beleidigen und trollen muss (darauf steh ich nicht, also lasst es lieber bei mir. Ansonsten Bann :P).</p>
				<br>
				<p class="hinweis"><span class="red-link">*</span>Mein Alter wird inzwischen durch PHP aktualisiert.</p>
				<p class="hinweis"><span class="red-link">**</span>formelle Sprachen sind Programmiersprachen, Sprachen wie Deutsch und Englisch nennt man natürliche Sprachen.</p>
			</div>
			<div >
                <a class="footer-link" href="datenschutz.php"><span class="a-index fas"></span>Datenschutzerklärung</a>
                <a class="footer-link" href="impressum.php"><span class="a-index fas"></span>Impressum</a>
                <p class="footer">&copy;2018-<?php echo date("Y"); ?> Copyright ShuriZma, All Rights Reserved.</p>
				<div class="container-hypesquad">
                    <a href="https://discord.shurizma.de">
                    <img class="hypesquad" src="../../img/hypesquad-white.png">
                        <p class="hypesquad">Join our Discord</p>
                    </a>
				</div>
            </div>
		</div>
    </body>
</html>
