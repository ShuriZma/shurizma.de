<!doctype html>
<html lang="de">
     <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>ShuriZma: Datenschutz</title>
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
                            <li><a class="a-index fas"  href="../en/forum_privacy-statement.php"><img src="../../img/lang/en_flagge.svg.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>


			<div id="content" class="bg-white">
                <h2>
                    1. Datenschutz auf einen Blick
                </h2>
                <h3>
                    Allgemeine Hinweise
                </h3>
                <p>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten passiert, wenn Sie unsere Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können. Ausführliche Informationen zum Thema Datenschutz entnehmen Sie unserer unter diesem Text aufgeführten Datenschutzerklärung.</p>
                <h3>
                    Datenerfassung auf unserer Website
                </h3>
                <p><strong>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</strong></p>
                <p><br></p>
                <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten können Sie dem Impressum dieser Website entnehmen.</p>
                <p><br></p>
                <p><strong>Wie erfassen wir Ihre Daten?</strong></p>
                <p><br></p>
                <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z.B. um Daten handeln, die Sie in ein Kontaktformular eingeben.</p>
                <p><br></p>
                <p>Andere Daten werden automatisch beim Besuch der Website durch unsere IT-Systeme erfasst. Das sind vor    allem technische Daten (z.B. Internetbrowser, Betriebssystem oder Uhrzeit des Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie unsere Website betreten.</p>
                <p><br></p>
                <p><strong>Wofür nutzen wir Ihre Daten?</strong></p>
                <p><br></p>
                <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten. Andere Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.</p>
                <p><br></p>
                <p><strong>Welche Rechte haben Sie bezüglich Ihrer Daten?</strong></p>
                <p><br></p>
                <p>Sie haben jederzeit das Recht unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die Berichtigung, Sperrung oder Löschung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen zum Thema Datenschutz können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden. Des Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.</p>
                <p><br></p>
                <p>Außerdem haben Sie das Recht, unter bestimmten Umständen die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen. Details hierzu entnehmen Sie der Datenschutzerklärung unter „Recht auf Einschränkung der Verarbeitung“.</p>
                <h2>
                    2. Allgemeine Hinweise und Pflichtinformationen
                </h2>
                <h3>
                    Datenschutz
                </h3>
                <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>
                <p><br></p>
                <p>Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben. Personenbezogene Daten sind Daten, mit denen Sie persönlich identifiziert werden können. Die vorliegende Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen. Sie erläutert auch, wie und zu welchem Zweck das geschieht.</p>
                <p><br></p>
                <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>
                <h3>
                    Hinweis zur verantwortlichen Stelle
                </h3>
                <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
                <p><br></p>
                <p>Markus Heß<br />
                    An der Wuhlheide 148<br />
                    12459 Berlin</p>
                <p><br></p>
                <p>Telefon: +49 (0) 176 21 40 88 50<br>
                    E-Mail: shurizma@shurizma.de</p>
                <p><br></p>
                <p>Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z.B. Namen, E-Mail-Adressen o. Ä.) entscheidet.</p>
                <h3>
                    Widerruf Ihrer Einwilligung zur Datenverarbeitung
                </h3>
                <p>Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie können eine bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>
                <h3>
                    Widerspruchsrecht gegen die Datenerhebung in besonderen Fällen sowie gegen Direktwerbung (Art. 21 DSGVO)
                </h3>
                <p><strong>Wenn die Datenverarbeitung auf Grundlage von Art. 6 Abs. 1 lit. e oder f DSGVO erfolgt, haben Sie jederzeit das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, gegen die Verarbeitung Ihrer personenbezogenen Daten Widerspruch einzulegen; dies gilt auch für ein auf diese Bestimmungen gestütztes Profiling. Die jeweilige Rechtsgrundlage, auf denen eine Verarbeitung beruht, entnehmen Sie dieser Datenschutzerklärung. Wenn Sie Widerspruch einlegen, werden wir Ihre betroffenen personenbezogenen Daten nicht mehr verarbeiten, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die Ihre Interessen, Rechte und Freiheiten überwiegen oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen (Widerspruch nach Art. 21 Abs. 1 DSGVO).</strong></p>
                <p><br></p>
                <p><strong>Werden Ihre personenbezogenen Daten verarbeitet, um Direktwerbung zu betreiben, so haben Sie das Recht, jederzeit Widerspruch gegen die Verarbeitung Sie betreffender personenbezogener Daten zum Zwecke derartiger Werbung einzulegen; dies gilt auch für das Profiling, soweit es mit solcher Direktwerbung in Verbindung steht. Wenn Sie widersprechen, werden Ihre personenbezogenen Daten anschließend nicht mehr zum Zwecke der Direktwerbung verwendet (Widerspruch nach Art. 21 Abs. 2 DSGVO).</strong></p>
                <h3>
                    Beschwerderecht bei der zuständigen Aufsichtsbehörde
                </h3>
                <p>Im Falle von Verstößen gegen die DSGVO steht den Betroffenen ein Beschwerderecht bei einer Aufsichtsbehörde, insbesondere in dem Mitgliedstaat ihres gewöhnlichen Aufenthalts, ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes zu. Das Beschwerderecht besteht unbeschadet anderweitiger verwaltungsrechtlicher oder gerichtlicher Rechtsbehelfe.</p>
                <h3>
                    Recht auf Datenübertragbarkeit
                </h3>
                <p>Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines Vertrags automatisiert verarbeiten, an sich oder an einen Dritten in einem gängigen, maschinenlesbaren Format aushändigen zu lassen. Sofern Sie die direkte Übertragung der Daten an einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>
                <h3>
                    Auskunft, Sperrung, Löschung und Berichtigung
                </h3>
                <p>Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden.</p>
                <h3>
                    Recht auf Einschränkung der Verarbeitung
                </h3>
                <p>Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen. Hierzu können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden. Das Recht auf Einschränkung der Verarbeitung besteht in folgenden Fällen:</p>
                <ul>
                    <li>Wenn Sie die Richtigkeit Ihrer bei uns gespeicherten personenbezogenen Daten bestreiten, benötigen wir in der Regel Zeit, um dies zu überprüfen. Für die Dauer der Prüfung haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
                    <li>Wenn die Verarbeitung Ihrer personenbezogenen Daten unrechtmäßig geschah / geschieht, können Sie statt der Löschung die Einschränkung der Datenverarbeitung verlangen.</li>
                    <li>Wenn wir Ihre personenbezogenen Daten nicht mehr benötigen, Sie sie jedoch zur Ausübung, Verteidigung oder Geltendmachung von Rechtsansprüchen benötigen, haben Sie das Recht, statt der Löschung die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
                    <li>Wenn Sie einen Widerspruch nach Art. 21 Abs. 1 DSGVO eingelegt haben, muss eine Abwägung zwischen Ihren und unseren Interessen vorgenommen werden. Solange noch nicht feststeht, wessen Interessen überwiegen, haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
                </ul>
                <p>Wenn Sie die Verarbeitung Ihrer personenbezogenen Daten eingeschränkt haben, dürfen diese Daten – von ihrer Speicherung abgesehen – nur mit Ihrer Einwilligung oder zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen oder zum Schutz der Rechte einer anderen natürlichen oder juristischen Person oder aus Gründen eines wichtigen öffentlichen Interesses der Europäischen Union oder eines Mitgliedstaats verarbeitet werden.</p>
                <h2>
                    3. Datenerfassung auf unserer Website
                </h2>
                <h3>
                    Cookies
                </h3>
                <p>Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert.</p>
                <p><br></p>
                <p>Die meisten der von uns verwendeten Cookies sind so genannte “Session-Cookies”. Sie werden nach Ende Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert bis Sie diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.</p>
                <p><br></p>
                <p>Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell ausschließen sowie das automatische Löschen der Cookies beim Schließen des Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalität dieser Website eingeschränkt sein.</p>
                <p><br></p>
                <p>Cookies, die zur Durchführung des elektronischen Kommunikationsvorgangs oder zur Bereitstellung bestimmter, von Ihnen erwünschter Funktionen (z.B. Warenkorbfunktion) erforderlich sind, werden auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Der Websitebetreiber hat ein berechtigtes Interesse an der Speicherung von Cookies zur technisch fehlerfreien und optimierten Bereitstellung seiner Dienste. Soweit andere Cookies (z.B. Cookies zur Analyse Ihres Surfverhaltens) gespeichert werden, werden diese in dieser Datenschutzerklärung gesondert behandelt.</p>
                <h3>
                    Server-Log-Dateien
                </h3>
                <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
                <ul>
                    <li>Browsertyp und Browserversion</li>
                    <li>verwendetes Betriebssystem</li>
                    <li>Referrer URL</li>
                    <li>Hostname des zugreifenden Rechners</li>
                    <li>Uhrzeit der Serveranfrage</li>
                    <li>IP-Adresse</li>
                </ul>
                <p>Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen.</p>
                <p><br></p>
                <p>Die Erfassung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse an der technisch fehlerfreien Darstellung und der Optimierung seiner Website – hierzu müssen die Server-Log-Files erfasst werden.</p>
                <h3>
                    Kontaktformular
                </h3>
                <p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.</p>
                <p><br></p>
                <p>Die Verarbeitung der in das Kontaktformular eingegebenen Daten erfolgt somit ausschließlich auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Sie können diese Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.</p>
                <p><br></p>
                <p>Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur Löschung auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung entfällt (z.B. nach abgeschlossener Bearbeitung Ihrer Anfrage). Zwingende gesetzliche Bestimmungen – insbesondere Aufbewahrungsfristen – bleiben unberührt.</p>
                <h3>
                    Registrierung auf dieser Website
                </h3>
                <p>Sie können sich auf unserer Website registrieren, um zusätzliche Funktionen auf der Seite zu nutzen. Die dazu eingegebenen Daten verwenden wir nur zum Zwecke der Nutzung des jeweiligen Angebotes oder Dienstes, für den Sie sich registriert haben. Die bei der Registrierung abgefragten Pflichtangaben müssen vollständig angegeben werden. Anderenfalls werden wir die Registrierung ablehnen.</p>
                <p><br></p>
                <p>Für wichtige Änderungen etwa beim Angebotsumfang oder bei technisch notwendigen Änderungen nutzen wir die bei der Registrierung angegebene E-Mail-Adresse, um Sie auf diesem Wege zu informieren.</p>
                <p><br></p>
                <p>Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.</p>
                <p><br></p>
                <p>Die bei der Registrierung erfassten Daten werden von uns gespeichert, solange Sie auf unserer Website registriert sind und werden anschließend gelöscht. Gesetzliche Aufbewahrungsfristen bleiben unberührt.</p>
                <h3>
                    Registrierung mit Facebook Connect
                </h3>
                <p>Statt einer direkten Registrierung auf unserer Website können Sie sich mit Facebook Connect registrieren. Anbieter dieses Dienstes ist die Facebook Ireland Limited, 4 Grand Canal Square, Dublin 2, Irland.</p>
                <p><br></p>
                <p>Wenn Sie sich für die Registrierung mit Facebook Connect entscheiden, werden Sie automatisch auf die Plattform von Facebook weitergeleitet. Dort können Sie sich mit Ihren Nutzungsdaten anmelden. Dadurch wird Ihr Facebook-Profil mit unserer Website bzw. unseren Diensten verknüpft. Durch diese Verknüpfung erhalten wir Zugriff auf Ihre bei Facebook hinterlegten Daten. Dies sind vor allem:</p>
                <ul>
                    <li>Facebook-Name</li>
                    <li>Facebook-Profilbild</li>
                    <li>bei Facebook hinterlegte E-Mail-Adresse</li>
                    <li>Facebook-ID</li>
                    <li>Geburtstag</li>
                    <li>Geschlecht</li>
                    <li>Land</li>
                </ul>
                <p>Diese Daten werden zur Einrichtung, Bereitstellung und Personalisierung Ihres Accounts genutzt.</p>
                <p><br></p>
                <p>Die Registrierung mit Facebook-Connect und die damit verbundenen Datenverarbeitungsvorgänge erfolgen auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Diese Einwilligung können Sie jederzeit mit Wirkung für die Zukunft widerrufen.</p>
                <p><br></p>
                <p>Weitere Informationen finden Sie in den Facebook-Nutzungsbedingungen und den Facebook-Datenschutzbestimmungen. Diese finden Sie unter: <a href="https://de-de.facebook.com/about/privacy/" target="_blank" rel="noopener">https://de-de.facebook.com/about/privacy/</a> und <a href="https://de-de.facebook.com/legal/terms/" target="_blank" rel="noopener">https://de-de.facebook.com/legal/terms/</a>.</p>
                <h3>
                    Registrierung mit Google+
                </h3>
                <p>Statt einer direkten Registrierung auf unserer Website können Sie sich mit Google+ registrieren. Anbieter dieses Dienstes ist die Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</p>
                <p><br></p>
                <p>Wenn Sie sich für die Registrierung mit Google+ entscheiden, werden Sie automatisch auf die Plattform von Google+ weitergeleitet. Dort können Sie sich mit Ihren Nutzungsdaten anmelden. Dadurch wird Ihr Google+-Profil mit unserer Website bzw. unseren Diensten verknüpft. Durch diese Verknüpfung erhalten wir Zugriff auf Ihre bei Google+ hinterlegten Daten. Dies sind vor allem:</p>
                <ul>
                    <li>Google+-Profilbild</li>
                    <li>bei Google+ hinterlegte E-Mail-Adresse</li>
                    <li>Google+-ID</li>
                    <li>Geburtstag</li>
                    <li>Geschlecht</li>
                    <li>Land</li>
                </ul>
                <p>Diese Daten werden zur Einrichtung, Bereitstellung und Personalisierung Ihres Accounts genutzt.</p>
                <p><br></p>
                <p>Die Registrierung mit Google+ und die damit verbundenen Datenverarbeitungsvorgänge erfolgen auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Diese Einwilligung können Sie jederzeit mit Wirkung für die Zukunft widerrufen.</p>
                <p><br></p>
                <p>Weitere Informationen finden Sie in den Google-Nutzungsbedingungen, Google+-Nutzungsbedingungen und den Google-Datenschutzbestimmungen. Diese finden Sie unter: <a href="https://policies.google.com/terms?hl=de" target="_blank" rel="noopener">https://policies.google.com/terms?hl=de</a>, <a href="https://www.google.com/intl/de/+/policy/pagesterms.html" target="_blank" rel="noopener">https://www.google.com/intl/de/+/policy/pagesterms.html</a> und <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
                <h3>
                    Registrierung mit Twitter
                </h3>
                <p>Statt einer direkten Registrierung auf unserer Website können Sie sich mit Twitter registrieren. Anbieter dieses Dienstes ist die Twitter Inc., 1355 Market Street, Suite 900, San Francisco, CA 94103, USA.</p>
                <p><br></p>
                <p>Wenn Sie sich für die Registrierung mit Twitter entscheiden, werden Sie automatisch auf die Plattform von Twitter weitergeleitet. Dort können Sie sich mit Ihren Nutzungsdaten anmelden. Dadurch wird Ihr Twitter-Profil mit unserer Website bzw. unseren Diensten verknüpft. Durch diese Verknüpfung erhalten wir Zugriff auf Ihre bei Twitter hinterlegten Daten. Dies sind vor allem:</p>
                <ul>
                    <li>Twitter-Name</li>
                    <li>Twitter-Profilbild</li>
                    <li>bei Twitter hinterlegte E-Mail-Adresse</li>
                    <li>Twitter-ID</li>
                    <li>Geburtstag</li>
                    <li>Geschlecht</li>
                    <li>Land</li>
                </ul>
                <p>Diese Daten werden zur Einrichtung, Bereitstellung und Personalisierung Ihres Accounts genutzt.</p>
                <p><br></p>
                <p>Die Registrierung mit Twitter und die damit verbundenen Datenverarbeitungsvorgänge erfolgen auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Diese Einwilligung können Sie jederzeit mit Wirkung für die Zukunft widerrufen.</p>
                <p><br></p>
                <p>Weitere Informationen finden Sie in den Twitter-Nutzungsbedingungen und den Twitter-Datenschutzbestimmungen. Diese finden Sie unter: <a href="https://twitter.com/de/tos" target="_blank" rel="noopener">https://twitter.com/de/tos</a> und <a href="https://twitter.com/de/privacy" target="_blank" rel="noopener">https://twitter.com/de/privacy</a>.</p>
                <h3>
                    Registrierung mit GitHub
                </h3>
                <p>Statt einer direkten Registrierung auf unserer Website können Sie sich mit GitHub registrieren. Anbieter dieses Dienstes ist die GitHub, Inc, 88 Colin P Kelly Jr St, San Francisco, CA 94107, USA.</p>
                <p><br></p>
                <p>Wenn Sie sich für die Registrierung mit GitHub entscheiden, werden Sie automatisch auf die Plattform von GitHub weitergeleitet. Dort können Sie sich mit Ihren Nutzungsdaten anmelden. Dadurch wird Ihr GitHub-Profil mit unserer Website bzw. unseren Diensten verknüpft. Durch diese Verknüpfung erhalten wir Zugriff auf Ihre bei GitHub hinterlegten Daten. Dies sind vor allem:</p>
                <ul>
                    <li>GitHub-Name</li>
                    <li>GitHub-Profilbild</li>
                    <li>bei GitHub hinterlegte E-Mail-Adresse</li>
                    <li>GitHub-ID</li>
                    <li>Geburtstag</li>
                    <li>Geschlecht</li>
                    <li>Land</li>
                </ul>
                <p>Diese Daten werden zur Einrichtung, Bereitstellung und Personalisierung Ihres Accounts genutzt.</p>
                <p><br></p>
                <p>Die Registrierung mit GitHub und die damit verbundenen Datenverarbeitungsvorgänge erfolgen auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Diese Einwilligung können Sie jederzeit mit Wirkung für die Zukunft widerrufen.</p>
                <p><br></p>
                <p>Weitere Informationen finden Sie in den GitHub-Nutzungsbedingungen und den GitHub-Datenschutzbestimmungen. Diese finden Sie unter: <a href="https://help.github.com/articles/github-terms-of-service/" target="_blank" rel="noopener">https://help.github.com/articles/github-terms-of-service/</a> und <a href="https://help.github.com/articles/github-privacy-statement/" target="_blank" rel="noopener">https://help.github.com/articles/github-privacy-statement/</a>.</p>
                <h3>
                    Verarbeiten von Daten (Kunden- und Vertragsdaten)
                </h3>
                <p>Wir erheben, verarbeiten und nutzen personenbezogene Daten nur, soweit sie für die Begründung, inhaltliche Ausgestaltung oder Änderung des Rechtsverhältnisses erforderlich sind (Bestandsdaten). Dies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet. Personenbezogene Daten über die Inanspruchnahme unserer Internetseiten (Nutzungsdaten) erheben, verarbeiten und nutzen wir nur, soweit dies erforderlich ist, um dem Nutzer die Inanspruchnahme des Dienstes zu ermöglichen oder abzurechnen.</p>
                <p><br></p>
                <p>Die erhobenen Kundendaten werden nach Abschluss des Auftrags oder Beendigung der Geschäftsbeziehung gelöscht. Gesetzliche Aufbewahrungsfristen bleiben unberührt.</p>
                <h3>
                    Datenübermittlung bei Vertragsschluss für Dienstleistungen und digitale Inhalte
                </h3>
                <p>Wir übermitteln personenbezogene Daten an Dritte nur dann, wenn dies im Rahmen der Vertragsabwicklung notwendig ist, etwa an das mit der Zahlungsabwicklung beauftragte Kreditinstitut.</p>
                <p><br></p>
                <p>Eine weitergehende Übermittlung der Daten erfolgt nicht bzw. nur dann, wenn Sie der Übermittlung ausdrücklich zugestimmt haben. Eine Weitergabe Ihrer Daten an Dritte ohne ausdrückliche Einwilligung, etwa zu Zwecken der Werbung, erfolgt nicht.</p>
                <p><br></p>
                <p>Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.</p>
                <h2>
                    4. Newsletter
                </h2>
                <h3>
                    Newsletterdaten
                </h3>
                <p>Wenn Sie den auf der Website angebotenen Newsletter beziehen möchten, benötigen wir von Ihnen eine E-Mail-Adresse sowie Informationen, welche uns die Überprüfung gestatten, dass Sie der Inhaber der angegebenen E-Mail-Adresse sind und mit dem Empfang des Newsletters einverstanden sind. Weitere Daten werden nicht bzw. nur auf freiwilliger Basis erhoben. Diese Daten verwenden wir ausschließlich für den Versand der angeforderten Informationen und geben diese nicht an Dritte weiter.</p>
                <p><br></p>
                <p>Die Verarbeitung der in das Newsletteranmeldeformular eingegebenen Daten erfolgt ausschließlich auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Die erteilte Einwilligung zur Speicherung der Daten, der E-Mail-Adresse sowie deren Nutzung zum Versand des Newsletters können Sie jederzeit widerrufen, etwa über den "Austragen"-Link im Newsletter. Die Rechtmäßigkeit der bereits erfolgten Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.</p>
                <p><br></p>
                <p>Die von Ihnen zum Zwecke des Newsletter-Bezugs bei uns hinterlegten Daten werden von uns bis zu Ihrer Austragung aus dem Newsletter gespeichert und nach der Abbestellung des Newsletters gelöscht. Daten, die zu anderen Zwecken bei uns gespeichert wurden bleiben hiervon unberührt.</p>
                <h2>
                    5. Plugins und Tools
                </h2>
                <h3>
                    YouTube
                </h3>
                <p>Unsere Website nutzt Plugins der von Google betriebenen Seite YouTube. Betreiber der Seiten ist die YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem YouTube-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von YouTube hergestellt. Dabei wird dem YouTube-Server mitgeteilt, welche unserer Seiten Sie besucht haben.</p>
                <p><br></p>
                <p>Des Weiteren kann Youtube verschiedene Cookies auf Ihrem Endgerät speichern. Mit Hilfe dieser Cookies kann Youtube Informationen über Besucher unserer Website erhalten. Diese Informationen werden u. a. verwendet, um Videostatistiken zu erfassen, die Anwenderfreundlichkeit zu verbessern und Betrugsversuchen vorzubeugen. Die Cookies verbleiben auf Ihrem Endgerät, bis Sie sie löschen.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem YouTube-Account eingeloggt sind, ermöglichen Sie YouTube, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem YouTube-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von YouTube erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von YouTube unter: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
                <h3>
                    Vimeo
                </h3>
                <p>Unsere Website nutzt Plugins des Videoportals Vimeo. Anbieter ist die Vimeo Inc., 555 West 18th Street, New York, New York 10011, USA.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem Vimeo-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von Vimeo hergestellt. Dabei wird dem Vimeo-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt Vimeo Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei Vimeo eingeloggt sind oder keinen Account bei Vimeo besitzen. Die von Vimeo erfassten Informationen werden an den Vimeo-Server in den USA übermittelt.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem Vimeo-Account eingeloggt sind, ermöglichen Sie Vimeo, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem Vimeo-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von Vimeo erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Vimeo unter: <a href="https://vimeo.com/privacy" target="_blank" rel="noopener">https://vimeo.com/privacy</a>.</p>
                <h3>
                    Google Web Fonts
                </h3>
                <p>Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Web Fonts, die von Google bereitgestellt werden. Beim Aufruf einer Seite lädt Ihr Browser die benötigten Web Fonts in ihren Browsercache, um Texte und Schriftarten korrekt anzuzeigen.</p>
                <p><br></p>
                <p>Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern von Google aufnehmen. Hierdurch erlangt Google Kenntnis darüber, dass über Ihre IP-Adresse unsere Website aufgerufen wurde. Die Nutzung von Google Web Fonts erfolgt im Interesse einer einheitlichen und ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Wenn Ihr Browser Web Fonts nicht unterstützt, wird eine Standardschrift von Ihrem Computer genutzt.</p>
                <p><br></p>
                <p>Weitere Informationen zu Google Web Fonts finden Sie unter <a href="https://developers.google.com/fonts/faq" target="_blank" rel="noopener">https://developers.google.com/fonts/faq</a> und in der Datenschutzerklärung von Google: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
                <h3>
                    Google Maps
                </h3>
                <p>Diese Seite nutzt über eine API den Kartendienst Google Maps. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</p>
                <p><br></p>
                <p>Zur Nutzung der Funktionen von Google Maps ist es notwendig, Ihre IP Adresse zu speichern. Diese Informationen werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Der Anbieter dieser Seite hat keinen Einfluss auf diese Datenübertragung.</p>
                <p><br></p>
                <p>Die Nutzung von Google Maps erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote und an einer leichten Auffindbarkeit der von uns auf der Website angegebenen Orte. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Mehr Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Google: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
                <h3>
                    Google reCAPTCHA
                </h3>
                <p>Wir nutzen “Google reCAPTCHA” (im Folgenden “reCAPTCHA”) auf unseren Websites. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA (“Google”).</p>
                <p><br></p>
                <p>Mit reCAPTCHA soll überprüft werden, ob die Dateneingabe auf unseren Websites (z.B. in einem Kontaktformular) durch einen Menschen oder durch ein automatisiertes Programm erfolgt. Hierzu analysiert reCAPTCHA das Verhalten des Websitebesuchers anhand verschiedener Merkmale. Diese Analyse beginnt automatisch, sobald der Websitebesucher die Website betritt. Zur Analyse wertet reCAPTCHA verschiedene Informationen aus (z.B. IP-Adresse, Verweildauer des Websitebesuchers auf der Website oder vom Nutzer getätigte Mausbewegungen). Die bei der Analyse erfassten Daten werden an Google weitergeleitet.</p>
                <p><br></p>
                <p>Die reCAPTCHA-Analysen laufen vollständig im Hintergrund. Websitebesucher werden nicht darauf hingewiesen, dass eine Analyse stattfindet.</p>
                <p><br></p>
                <p>Die Datenverarbeitung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse daran, seine Webangebote vor missbräuchlicher automatisierter Ausspähung und vor SPAM zu schützen.</p>
                <p><br></p>
                <p>Weitere Informationen zu Google reCAPTCHA sowie die Datenschutzerklärung von Google entnehmen Sie folgenden Links: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a> und <a href="https://www.google.com/recaptcha/intro/android.html" target="_blank" rel="noopener">https://www.google.com/recaptcha/intro/android.html</a>.</p>
                <h3>
                    SoundCloud
                </h3>
                <p>Auf unseren Seiten können Plugins des sozialen Netzwerks SoundCloud (SoundCloud Limited, Berners House, 47-48 Berners Street, London W1T 3NF, Großbritannien.) integriert sein. Die SoundCloud-Plugins erkennen Sie an dem SoundCloud-Logo auf den betroffenen Seiten.</p>
                <p><br></p>
                <p>Wenn Sie unsere Seiten besuchen, wird nach Aktivierung des Plugin eine direkte Verbindung zwischen Ihrem Browser und dem SoundCloud-Server hergestellt. SoundCloud erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse unsere Seite besucht haben. Wenn Sie den “Like-Button” oder “Share-Button” anklicken während Sie in Ihrem SoundCloud- Benutzerkonto eingeloggt sind, können Sie die Inhalte unserer Seiten mit Ihrem SoundCloud-Profil verlinken und/oder teilen. Dadurch kann SoundCloud Ihrem Benutzerkonto den Besuch unserer Seiten zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch SoundCloud erhalten.</p>
                <p><br></p>
                <p>Die Nutzung von SoundCloud erfolgt auf Grundlage des Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse an einer möglichst umfangreichen Sichtbarkeit in den Sozialen Medien.</p>
                <p><br></p>
                <p>Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von SoundCloud unter: <a href="https://soundcloud.com/pages/privacy" target="_blank" rel="noopener">https://soundcloud.com/pages/privacy</a>.</p>
                <p><br></p>
                <p>Wenn Sie nicht wünschen, dass SoundCloud den Besuch unserer Seiten Ihrem SoundCloud- Benutzerkonto zuordnet, loggen Sie sich bitte aus Ihrem SoundCloud-Benutzerkonto aus bevor Sie Inhalte des SoundCloud-Plugins aktivieren.</p>
                <h3>
                    Veoh
                </h3>
                <p>Unsere Website nutzt Plugins des Videoportals Veoh. Anbieter ist die FC2, 4730 South Fort Apache Road, Suite 300, Las Vegas, NV 89147, USA.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem Veoh-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von Veoh hergestellt. Dabei wird dem Veoh-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt Veoh Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei Veoh eingeloggt sind oder keinen Account bei Veoh besitzen. Die von Veoh erfassten Informationen werden an den Veoh-Server in den USA übermittelt.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem Veoh-Account eingeloggt sind, ermöglichen Sie Veoh, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem Veoh-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von Veoh erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Veoh unter: <a href="https://www.veoh.com/corporate/privacypolicy" target="_blank" rel="noopener">https://www.veoh.com/corporate/privacypolicy</a>.</p>
                <h3>
                    Dailymotion
                </h3>
                <p>Unsere Website nutzt Plugins des Videoportals Dailymotion. Anbieter ist Dailymotion, 140 boulevard Malesherbes, 75017 Paris, Frankreich.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem Dailymotion-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von Dailymotion hergestellt. Dabei wird dem Dailymotion-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt Dailymotion Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei Dailymotion eingeloggt sind oder keinen Account bei Dailymotion besitzen.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem Dailymotion-Account eingeloggt sind, ermöglichen Sie Dailymotion, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem Dailymotion-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von Dailymotion erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Dailymotion unter: <a href="https://www.dailymotion.com/legal/privacy" target="_blank" rel="noopener">https://www.dailymotion.com/legal/privacy</a>.</p>
                <h3>
                    GitHub
                </h3>
                <p>Unsere Website nutzt Plugins des Online-Dienstes GitHub. Anbieter ist GitHub, Inc, 88 Colin P Kelly Jr St, San Francisco, CA 94107, USA.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem GitHub-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von GitHub hergestellt. Dabei wird dem GitHub-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt GitHub Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei GitHub eingeloggt sind oder keinen Account bei GitHub besitzen. Die von GitHub erfassten Informationen werden an den GitHub-Server in den USA übermittelt.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem GitHub-Account eingeloggt sind, ermöglichen Sie GitHub, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem GitHub-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von GitHub erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von GitHub unter: <a href="https://help.github.com/articles/github-privacy-statement/" target="_blank" rel="noopener">https://help.github.com/articles/github-privacy-statement/</a>.</p>
                <h3>
                    Spotify
                </h3>
                <p>Unsere Website nutzt Plugins des Online-Dienstes Spotify. Anbieter ist die Spotify AB, Birger Jarlsgatan 61, 113 56 Stockholm, Schweden.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem Spotify-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von Spotify hergestellt. Dabei wird dem Spotify-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt Spotify Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei Spotify eingeloggt sind oder keinen Account bei Spotify besitzen.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem Spotify-Account eingeloggt sind, ermöglichen Sie Spotify, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem Spotify-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von Spotify erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Spotify unter: <a href="https://www.spotify.com/de/legal/privacy-policy/" target="_blank" rel="noopener">https://www.spotify.com/de/legal/privacy-policy/</a>.</p>
                <h3>
                    Instagram
                </h3>
                <p>Unsere Website nutzt Plugins des Online-Dienstes Instagram. Anbieter ist Instagram Inc., 1601 Willow Road, Menlo Park, CA 94025, USA.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem Instagram-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von Instagram hergestellt. Dabei wird dem Instagram-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt Instagram Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei Instagram eingeloggt sind oder keinen Account bei Instagram besitzen. Die von Instagram erfassten Informationen werden an den Instagram-Server in den USA übermittelt.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem Instagram-Account eingeloggt sind, ermöglichen Sie Instagram, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem Instagram-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von Instagram erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Instagram unter: <a href="https://instagram.com/about/legal/privacy/" target="_blank" rel="noopener">https://instagram.com/about/legal/privacy/</a>.</p>
                <h3>
                    Imgur
                </h3>
                <p>Unsere Website nutzt Plugins des Online-Dienstes Imgur. Anbieter ist Imgur, Inc., 415 Jackson Street, 2nd Floor, Suite 200, San Francisco, CA 94111, USA.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem Imgur-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von Imgur hergestellt. Dabei wird dem Imgur-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt Imgur Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei Imgur eingeloggt sind oder keinen Account bei Imgur besitzen. Die von Imgur erfassten Informationen werden an den Imgur-Server in den USA übermittelt.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem Imgur-Account eingeloggt sind, ermöglichen Sie Imgur, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem Imgur-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von Imgur erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Imgur unter: <a href="https://imgur.com/privacy" target="_blank" rel="noopener">https://imgur.com/privacy</a>.</p>
                <h3>
                    Twitch
                </h3>
                <p>Unsere Website nutzt Plugins des Online-Dienstes Twitch. Anbieter ist Twitch Interactive, Inc., 225 Bush Street, 6th Floor, San Francisco, CA 94104, USA.</p>
                <p><br></p>
                <p>Wenn Sie eine unserer mit einem Twitch-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von Twitch hergestellt. Dabei wird dem Twitch-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Zudem erlangt Twitch Ihre IP-Adresse. Dies gilt auch dann, wenn Sie nicht bei Twitch eingeloggt sind oder keinen Account bei Twitch besitzen. Die von Twitch erfassten Informationen werden an den Twitch-Server in den USA übermittelt.</p>
                <p><br></p>
                <p>Wenn Sie in Ihrem Twitch-Account eingeloggt sind, ermöglichen Sie Twitch, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus Ihrem Twitch-Account ausloggen.</p>
                <p><br></p>
                <p>Die Nutzung von Twitch erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne des Art. 6 Abs. 1 lit. f DSGVO dar.</p>
                <p><br></p>
                <p>Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Twitch unter: <a href="https://www.twitch.tv/p/legal/privacy-policy/" target="_blank" rel="noopener">https://www.twitch.tv/p/legal/privacy-policy/</a>.</p>
                <h2>
                    6. Zahlungsanbieter
                </h2>
                <h3>
                    PayPal
                </h3>
                <p>Auf unserer Website bieten wir u.a. die Bezahlung via PayPal an. Anbieter dieses Zahlungsdienstes ist die PayPal (Europe) S.à.r.l. et Cie, S.C.A., 22-24 Boulevard Royal, L-2449 Luxembourg (im Folgenden “PayPal”).</p>
                <p><br></p>
                <p>Wenn Sie die Bezahlung via PayPal auswählen, werden die von Ihnen eingegebenen Zahlungsdaten an PayPal übermittelt.</p>
                <p><br></p>
                <p>Die Übermittlung Ihrer Daten an PayPal erfolgt auf Grundlage von Art. 6 Abs. 1 lit. a DSGVO (Einwilligung) und Art. 6 Abs. 1 lit. b DSGVO (Verarbeitung zur Erfüllung eines Vertrags). Sie haben die Möglichkeit, Ihre Einwilligung zur Datenverarbeitung jederzeit zu widerrufen. Ein Widerruf wirkt sich auf die Wirksamkeit von in der Vergangenheit liegenden Datenverarbeitungsvorgängen nicht aus.</p>
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

