<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>ShuriZma: Who is ShuriZma</title>
        <link rel="apple-touch-icon" sizes="57x57" href="../../img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../../img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../../img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../../img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../../img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../../img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../../img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../../img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../../img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="i../../mg/favicon/android-icon-192x192.png">
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
            "href": "https://shurizma.de/php/de/datenschutz.php"
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
                    <a href="../../index_en.php">
                        <div class="logo-wrapper">

                            <img class="logo-img" src="../../img/shurizma.png">

                            <div class="logo-title">
                                <h1>ShuriZma</h1>
                                <h2>Official Homepage</h2>
                            </div>

                        </div>
                    </a>
                </div>
			</header>

			<nav class="nav-wrapper bg-white">

				<ul>
					<li><a href="../../index_en.php"><span class="a-index fas"></span>Home</a></li>
					<li>
						<a><span class="a-index fas"></span>Info</a>
						<ul>
							<li><a class="no-text-transform" href="who-is-shurizma.php"><span class="a-index fas"></span>Who is ShuriZma</a></li>
							<li><a class="no-text-transform" href="streaming-info.php"><span class="a-index fas"></span>Streaming-Info</a></li>
                            <li><a class="no-text-transform" href="partners.php"><span class="a-index fas"></span>Partners</a></li>
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
                        <a class="a-index fas"><img src="../../img/lang/en_flagge.svg.png"/></a>

                        <ul>
                            <li><a class="a-index fas"  href="../de/wer-ist-shurizma.php"><img src="../../img/lang/de_flagge.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>

			<div id="content" class="bg-white">
				<h1>Who is ShuriZma?</h1>
				<p>That's actually not a bad question!</p>
				<p>First of all here some basic information about me:</p>
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
					<li>I live in Berlin</li>
					<li>ShuriZma is not my real name (not everybody knows that)</li>
					<li>I am too lazy every year to update my age<span class="red-link">*</span></li>
				</ul>
				<p>As soon as I have clarified the most important things we can go on.</p>
				<p>At the moment I'm still going to school (hopefully not for long, because I have more fun working), which is why I, like many others, don't have time for the really important things in life until the afternoon.</p>
				<br>
				<p>For all of you who now say that this will not change when I go to work. But of course this changes, after all work is one of the important things in life.</p>
				<br>
				<p>So that would be now clarified further in the text.</p>
				<p>Question is just what people want to know about me, if they want to know anything about me at all.</p>
				<p>Then I just start with my hobbies.</p>
				<p>In fact I have a lot of fun writing websites and learning and testing new things in the field of web development/design. I have a certificate in HTML, CSS as well as in PHP and Java-Script.</p>
				<p>I am a big fan of formal languages<span class="red-link">**</span>. I'm also currently practicing system administration.</p>
				<p>But also outside computer science I have hobbies (would be bad if not (real No-Lifer)).</p>
				<p>For example, I like to gamble with buddies (and then stream my non-existent gameplays), mostly shooters like BO4 and prefer zombies :P.</p>
				<p>But even more than anything I LOVE to listen to music. People always ask me what I like to hear. There is actually no answer to that, since I listen to almost everything, in continuous loop, day and night, 24/7, non-stop.</p>
				<p> Actually, there's nothing else to say about me. I'm just a normal boy, except for the fact that I'm not as toxic as many others and don't have to insult and troll 24/7 (I don't like that, so leave it with me. Otherwise ban :P).</p>
				<br>
				<p class="hinweis"><span class="red-link">*</span>My age is now updated by PHP.</p>
				<p class="hinweis"><span class="red-link">**</span>formal languages are programming languages, languages like German and English are called natural languages.</p>
			</div>
			<div >
                <a class="a-index fas footer-link" href="privacy-statement.php">Privacy Statement</a>
                <a class="a-index fas footer-link" href="legal-notice.php">Legal Notice</a>
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
