<!doctype html>
<html lang="en">
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

    <body class="default-font">
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
                            <li><a class="a-index fas"  href="../de/termsofservice.php"><img src="../../img/lang/de_flagge.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>

			<div id="content" class="bg-white">
                <h1>Disclaimer</h1>
                <h2>Limitation of liability for own content</h2>

                <p>All contents of our website have been created with care and to the best of our knowledge.<br>
                    A guarantee for the topicality, completeness and correctness of all sides cannot be taken over however.</p>

                <br>

                <p>In accordance with § 7 Abs. 1 TMG we are responsible as a service provider for own contents on these sides after the general laws, after §§ 8 to 10 TMG however not obligated, <br>
                    to monitor the transmitted or stored third-party information. <br>
                    An immediate removal of these contents takes place from the time of the knowledge of a concrete law breaking and we do not stick before the time of the knowledge acquisition.</p>

                <h2>Limitation of liability for external links</h2>

                <p>Our website contains so-called "external links" (links to third-party websites),<br>
                    on whose content we have no influence and for which we assume no liability for this reason. <br>
                    The respective information provider of the linked websites is responsible for the content and correctness of the information. <br>
                    When the link was made, we were not aware of any legal violations. <br>
                    Should we become aware of an infringement, the respective link will be removed from our website immediately. </p>

                <h2>Copyright</h2>

                <p>The contents and works published on this website are subject to German copyright law. <br>
                    Any kind of duplication, processing, <br>
                    Distribution and any kind of use outside the limits of copyright law requires the prior written consent of the respective author or originator.</p>

                <h2>Privacy protection</h2>

                <p>By visiting our website information about the access (date, time, page accessed) can be stored on the server.
                    This does not constitute an evaluation of personal data (e.g. name, address or e-mail address). <br>
                    Insofar as personal data is collected, this is done - if possible - only with the prior consent of the user of the website. <br>
                    The data will not be passed on to third parties without the express consent of the user.</p>
                <br>


                <p>We expressly point out that the transmission of data on the Internet (e.g. by e-mail) can have security gaps. <br>
                    A complete protection of the data against the access of third parties cannot be guaranteed.<br>
                    We cannot accept any liability for the damage caused by such security gaps.</p>

                <br>

                <p>The use of published contact data by third parties for the purpose of advertising is expressly prohibited.<br>
                    We reserve the right to take legal action against unsolicited mailing or e-mailing of spam and other similar advertising materials.</p>
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
