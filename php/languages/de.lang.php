<?php

$birthDate = explode("/", "04/12/2001");
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));

$lang = array(
    "shurizma" => "ShuriZma",
    "footer-link1" => "Datenschutzerklärung",
    "footer-link2" => "Impressum",
    "footer-copyright" => "&copy;2018-" . date("Y") . "Copyright ShuriZma, All Rights Reserved.",
    "footer-discord" => "Join our Discord",
    "header" => "Offizielle Homepage",
    "navbar-home" => "Startseite",
    "navbar-info" => "Info",
    "navbar-whois" => "Wer ist ShuriZma",
    "navbar-stream" => "Streaming-Info",
    "navbar-partner" => "Partner",
    "navbar-forum" => "Forum",
    "navbar-font" => "Font",
    "homepage" => "ShuriZma: Startseite",
    "home" => "Startseite",
    "home-p1" => "Willkommen auf der offiziellen Website von ShuriZma.",
    "home-p2" => "Hier findet ihr einige kleinere Informationen zu mir und es werden regelmäßig neue Infos folgen.",
    "partner" => "ShuriZma: Partner",
    "partner-title" => "Partner",
    "partner-list-title" => "Hier ist eine Liste aller meiner Partner:",
    "stream" => "ShuriZma: Streaming-Info",
    "stream-title" => "Streaming-Info",
    "stream-p1" => "Wie viele von euch wissen streame ich auf Twitch.",
    "stream-p2" => "Manche fragen sich jedoch was ich so alles streame.",
    "stream-p3" => 'Auf <a class="red-link" href="https://twitch.tv/shurizma">ShuriZma</a> werde ich meine Standard-Spiele spielen und ab und zu mal ein neues Spiel antesten, insofern Interesse daran besteht<span class="red-link">*</span>.',
    "stream-p4" => "Welche Spiele ich streame steht noch nicht ganz fest, aber einige davon werden sicherlich BO4, L4D2, Payday 2, MW3 und vielleicht auch Warface sein.",
    "stream-p5" => 'Falls ich in Spielen wie L4D2, Payday 2, MW3 Survival oder BO4 Zombies<span class="red-link">**</span> noch einen PLatz frei habe, seid ihr immer herzlichst dazu eingeladen mit zu spielen. Beachtet jedoch, dass nicht immer jeder mitmachen kann!',
    "stream-p6" => "Demnächst folgt hier noch ein Streamingplan!",
    "stream-p7" => "Das Bedeutet auch, dass wenn ihr wollt dass ich ein Spiel teste, könnt ihr das gerne ansprechen.",
    "stream-p8" => "Natürlich werde ich auch mal private Lobbys im PvP machen und dort Zuschauer einladen, aber in PvE Spielmodis suche ich immer Leute.",
    "whois" => "ShuriZma: Wer ist ShuriZma",
    "whois-title" => "Wer ist ShuriZma?",
    "whois-p1" => "Das ist tatsächlich keine schlechte Frage!",
    "whois-p2" => "Hier erst einmal ein paar grundlegende Infos zu mir:",
    "whois-ul1" => '<li>Ich bin aktuell ' . $age . ' Jahre alt</li>
        <li>Ich lebe in Berlin</li>
        <li>ShuriZma ist nicht mein echter Name (das wissen ja nicht alle)</li>
        <li>Ich bin zu faul jedes Jahr mein Alter zu aktualisieren<span class="red-link">*</span></li>',
    "whois-p3" => "So da ich erstmal die wichtigsten Dinge klargestellt habe können wir ja dann weiter machen.",
    "whois-p4" => "Aktuell gehe ich noch zur Schule (hoffentlich aber nicht mehr lange, habe nämlich mehr Spaß am arbeiten), weshalb ich so wie viele andere auch erst am Nachmittag Zeit für die wirklich wichtigen Dinge des Lebens habe.",
    "whois-p5" => "Für alle die jetzt sagen, dass sich das nicht ändern wird wenn ich arbeiten gehe. Doch natürlich ändert sich das, schließlich ist Arbeit eines der wichtigen Dinge im Leben.",
    "whois-p6" => "So da das nun geklärt wäre weiter im Text.",
    "whois-p7" => "Frage ist nur was die Leute überhaupt über mich wissen wollen, falls sie überhaupt etwas über mich wissen wollen.",
    "whois-p8" => "Dann fang ich einfach mal mit meinen Hobbys an.",
    "whois-p9" => "Tatsächlich habe ich eine Menge Spaß daran Websites zu schreiben und immer wieder neues im Bereich Web-Entwicklung/-Design zu lernen und zu testen. Ich habe sowohl in HTML, CSS als auch in PHP und Java-Script ein Zertifikat.",
    "whois-p10" => 'Ich bin ein großer Fan von formellen Sprachen<span class="red-link">**</span>. Zudem übe ich mich aktuell in der Systemadministration.',
    "whois-p11" => "Aber auch außerhalb der Informatik habe ich Hobbies (wäre schlimm wenn nicht (richtiger No-Lifer)).",
    "whois-p12" => "Beispielsweise zocke ich gerne mit Kumpels (und streame dann meine nicht vorhandenen Gameplays), meistens Shooter wie BO4 und bevorzugt Zombies :P.",
    "whois-p13" => "Aber noch viel mehr als alles andere LIEBE ich es Musik zu hören. Die Leute fragen mich immer was ich gerne höre. Darauf gibt es actually gar keine Antwort, da ich beinahe alles höre, in Dauerschleife, Tag und Nacht, 24/7, non-stop.",
    "whois-p14" => "Eigentlich gibt es sonst nichts über mich zu sagen. Ich bin halt ein ganz normaler Junge, bis auf den Fakt, dass ich nicht so toxic bin wie viele anderen und nicht 24/7 beleidigen und trollen muss (darauf steh ich nicht, also lasst es lieber bei mir. Ansonsten Bann :P).",
    "whois-p15" => "Mein Alter wird inzwischen durch PHP aktualisiert.",
    "whois-p16" => "formelle Sprachen sind Programmiersprachen, Sprachen wie Deutsch und Englisch nennt man natürliche Sprachen.",
    "impressum" => "ShuriZma: Impressum",
    "impressum-title" => "Impressum",
    "impressum-content" => "<h2>Angaben gem&auml;&szlig; &sect; 5 TMG</h2>
    <p>Markus Heß<br>
        An der Wuhlheide 148<br>
        12459 Berlin</p>

    <h2>Kontakt</h2>
    <p>Telefon: +49 (0) 176 21 40 88 50<br>
        E-Mail: shurizma@shurizma.de</p>",
    "datenschutz-title" => "ShuriZma: Datenschutz",
    "datenschutz" => '<h1>Datenschutzerkl&auml;rung</h1>
    <h2>1. Datenschutz auf einen Blick</h2>
    <h3>Allgemeine Hinweise</h3>
    <p>Die folgenden Hinweise geben einen einfachen &Uuml;berblick dar&uuml;ber, was mit Ihren  personenbezogenen Daten passiert, wenn Sie unsere Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie pers&ouml;nlich identifiziert werden k&ouml;nnen. Ausf&uuml;hrliche Informationen zum Thema Datenschutz entnehmen Sie unserer unter diesem Text aufgef&uuml;hrten Datenschutzerkl&auml;rung.</p>
    <h3>Datenerfassung auf unserer Website</h3>
    <p><strong>Wer ist verantwortlich f&uuml;r die Datenerfassung auf dieser Website?</strong></p>
    <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten     k&ouml;nnen Sie dem Impressum dieser Website entnehmen.</p>
    <p><strong>Wie erfassen wir Ihre Daten?</strong></p>
    <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z.B. um  Daten handeln, die Sie in ein Kontaktformular eingeben.</p>
    <p>Andere Daten werden automatisch beim Besuch der Website durch unsere IT-Systeme erfasst. Das sind vor    allem technische Daten (z.B. Internetbrowser, Betriebssystem oder Uhrzeit des Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie unsere Website betreten.</p>
    <p><strong>Wof&uuml;r nutzen wir Ihre Daten?</strong></p>
    <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gew&auml;hrleisten.   Andere Daten k&ouml;nnen zur Analyse Ihres Nutzerverhaltens verwendet werden.</p>
    <p><strong>Welche Rechte haben Sie bez&uuml;glich Ihrer Daten?</strong></p>
    <p>Sie haben jederzeit das Recht unentgeltlich Auskunft &uuml;ber Herkunft, Empf&auml;nger und Zweck Ihrer  gespeicherten personenbezogenen Daten zu erhalten. Sie haben au&szlig;erdem ein Recht, die Berichtigung, Sperrung oder L&ouml;schung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen zum Thema Datenschutz k&ouml;nnen Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden. Des Weiteren steht Ihnen ein Beschwerderecht bei der zust&auml;ndigen Aufsichtsbeh&ouml;rde zu.</p>
    <p>Au&szlig;erdem haben Sie das Recht, unter bestimmten Umst&auml;nden die Einschr&auml;nkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen. Details hierzu entnehmen Sie der Datenschutzerkl&auml;rung unter &bdquo;Recht auf Einschr&auml;nkung der Verarbeitung&ldquo;.</p>
    <h2>2. Allgemeine Hinweise und Pflichtinformationen</h2>
    <h3>Datenschutz</h3>
    <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer pers&ouml;nlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerkl&auml;rung.</p>
    <p>Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben. Personenbezogene Daten sind Daten, mit denen Sie pers&ouml;nlich identifiziert werden k&ouml;nnen. Die vorliegende Datenschutzerkl&auml;rung erl&auml;utert, welche Daten wir erheben und wof&uuml;r wir sie nutzen. Sie erl&auml;utert auch, wie und zu welchem Zweck das geschieht.</p>
    <p>Wir weisen darauf hin, dass die Daten&uuml;bertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitsl&uuml;cken aufweisen kann. Ein l&uuml;ckenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht m&ouml;glich.</p>
    <h3>Hinweis zur verantwortlichen Stelle</h3>
    <p>Die verantwortliche Stelle f&uuml;r die Datenverarbeitung auf dieser Website ist:</p>
    <p>Markus Heß<br />
        An der Wuhlheide 148<br />
        12459 Berlin</p>

    <p>Telefon: +49 (0) 176 21 40 88 50<br />
        E-Mail: shurizma@shurizma.de</p>
    <p>Verantwortliche Stelle ist die nat&uuml;rliche oder juristische Person, die allein oder gemeinsam mit anderen &uuml;ber die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z.B. Namen, E-Mail-Adressen o. &Auml;.) entscheidet.</p>
    <h3>Widerruf Ihrer Einwilligung zur Datenverarbeitung</h3>
    <p>Viele Datenverarbeitungsvorg&auml;nge sind nur mit Ihrer ausdr&uuml;cklichen Einwilligung m&ouml;glich. Sie k&ouml;nnen eine bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtm&auml;&szlig;igkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unber&uuml;hrt.</p>
    <h3>Widerspruchsrecht gegen die Datenerhebung in besonderen F&auml;llen sowie gegen Direktwerbung (Art. 21 DSGVO)</h3>
    <p><strong>Wenn die Datenverarbeitung auf Grundlage von Art. 6 Abs. 1 lit. e oder f DSGVO erfolgt, haben Sie jederzeit das Recht, aus Gr&uuml;nden, die sich aus Ihrer besonderen Situation ergeben, gegen die Verarbeitung Ihrer personenbezogenen Daten Widerspruch einzulegen; dies gilt auch f&uuml;r ein auf diese Bestimmungen gest&uuml;tztes Profiling. Die jeweilige Rechtsgrundlage, auf denen eine Verarbeitung beruht, entnehmen Sie dieser Datenschutzerkl&auml;rung. Wenn Sie Widerspruch einlegen, werden wir Ihre betroffenen personenbezogenen Daten nicht mehr verarbeiten, es sei denn, wir k&ouml;nnen zwingende schutzw&uuml;rdige Gr&uuml;nde f&uuml;r die Verarbeitung nachweisen, die Ihre Interessen, Rechte und Freiheiten &uuml;berwiegen oder die Verarbeitung dient der Geltendmachung, Aus&uuml;bung oder Verteidigung von Rechtsanspr&uuml;chen (Widerspruch nach Art. 21 Abs. 1 DSGVO).</strong></p>
    <p><strong>Werden Ihre personenbezogenen Daten verarbeitet, um Direktwerbung zu betreiben, so haben Sie das Recht, jederzeit Widerspruch gegen die Verarbeitung Sie betreffender personenbezogener Daten zum Zwecke derartiger Werbung einzulegen; dies gilt auch f&uuml;r das Profiling, soweit es mit solcher Direktwerbung in Verbindung steht. Wenn Sie widersprechen, werden Ihre personenbezogenen Daten anschlie&szlig;end nicht mehr zum Zwecke der Direktwerbung verwendet (Widerspruch nach Art. 21 Abs. 2 DSGVO).</strong></p>
    <h3>Beschwerderecht bei der zust&auml;ndigen Aufsichtsbeh&ouml;rde</h3>
    <p>Im Falle von Verstößen gegen die DSGVO steht den Betroffenen ein Beschwerderecht bei einer Aufsichtsbehörde, insbesondere in dem Mitgliedstaat ihres gewöhnlichen Aufenthalts, ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes zu. Das Beschwerderecht besteht unbeschadet anderweitiger verwaltungsrechtlicher oder gerichtlicher Rechtsbehelfe.</p>
    <h3>Recht auf Daten&uuml;bertragbarkeit</h3>
    <p>Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erf&uuml;llung eines Vertrags automatisiert verarbeiten, an sich oder an einen Dritten in einem g&auml;ngigen, maschinenlesbaren Format aush&auml;ndigen zu lassen. Sofern Sie die direkte &Uuml;bertragung der Daten an einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>

    <h3>SSL- bzw. TLS-Verschl&uuml;sselung</h3>
    <p>Diese Seite nutzt aus Sicherheitsgr&uuml;nden und zum Schutz der &Uuml;bertragung vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL-bzw. TLS-Verschl&uuml;sselung. Eine verschl&uuml;sselte Verbindung erkennen Sie daran, dass die Adresszeile des Browsers von &ldquo;http://&rdquo; auf &ldquo;https://&rdquo; wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.</p>
    <p>Wenn die SSL- bzw. TLS-Verschl&uuml;sselung aktiviert ist, k&ouml;nnen die Daten, die Sie an uns &uuml;bermitteln, nicht von Dritten mitgelesen werden.</p>

    <h3>Auskunft, Sperrung, L&ouml;schung und Berichtigung</h3>
    <p>Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf unentgeltliche Auskunft &uuml;ber Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empf&auml;nger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder L&ouml;schung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten k&ouml;nnen Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden.</p>
    <h3>Recht auf Einschr&auml;nkung der Verarbeitung</h3>
    <p>Sie haben das Recht, die Einschr&auml;nkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen. Hierzu k&ouml;nnen Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden. Das Recht auf Einschr&auml;nkung der Verarbeitung besteht in folgenden F&auml;llen:</p>
    <ul>
        <li>Wenn Sie die Richtigkeit Ihrer bei uns gespeicherten personenbezogenen Daten bestreiten, ben&ouml;tigen wir in der Regel Zeit, um dies zu &uuml;berpr&uuml;fen. F&uuml;r die Dauer der Pr&uuml;fung haben Sie das Recht, die Einschr&auml;nkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
        <li>Wenn die Verarbeitung Ihrer personenbezogenen Daten unrechtm&auml;&szlig;ig geschah / geschieht, k&ouml;nnen Sie statt der L&ouml;schung die Einschr&auml;nkung der Datenverarbeitung verlangen.</li>
        <li>Wenn wir Ihre personenbezogenen Daten nicht mehr ben&ouml;tigen, Sie sie jedoch zur Aus&uuml;bung, Verteidigung oder Geltendmachung von Rechtsanspr&uuml;chen ben&ouml;tigen, haben Sie das Recht, statt der L&ouml;schung die Einschr&auml;nkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
        <li>Wenn Sie einen Widerspruch nach Art. 21 Abs. 1 DSGVO eingelegt haben, muss eine Abw&auml;gung zwischen Ihren und unseren Interessen vorgenommen werden. Solange noch nicht feststeht, wessen Interessen &uuml;berwiegen, haben Sie das Recht, die Einschr&auml;nkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
    </ul>
    <p>Wenn Sie die Verarbeitung Ihrer personenbezogenen Daten eingeschr&auml;nkt haben, d&uuml;rfen diese Daten &ndash; von ihrer Speicherung abgesehen &ndash; nur mit Ihrer Einwilligung oder zur Geltendmachung, Aus&uuml;bung oder Verteidigung von Rechtsanspr&uuml;chen oder zum Schutz der Rechte einer anderen nat&uuml;rlichen oder juristischen Person oder aus Gr&uuml;nden eines wichtigen &ouml;ffentlichen Interesses der Europ&auml;ischen Union oder eines Mitgliedstaats verarbeitet werden.</p>
    <h2>3. Datenerfassung auf unserer Website</h2>
    <h3>Cookies</h3>
    <p>Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert.</p>
    <p>Die meisten der von uns verwendeten Cookies sind so genannte &ldquo;Session-Cookies&rdquo;. Sie werden nach Ende Ihres Besuchs automatisch gel&ouml;scht. Andere Cookies bleiben auf Ihrem Endger&auml;t gespeichert bis Sie diese l&ouml;schen. Diese Cookies erm&ouml;glichen es uns, Ihren Browser beim n&auml;chsten Besuch wiederzuerkennen.</p>
    <p>Sie k&ouml;nnen Ihren Browser so einstellen, dass Sie &uuml;ber das Setzen von Cookies informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies f&uuml;r bestimmte F&auml;lle oder generell ausschlie&szlig;en sowie das automatische L&ouml;schen der Cookies beim Schlie&szlig;en des Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalit&auml;t dieser Website eingeschr&auml;nkt sein.</p>
    <p>Cookies, die zur Durchf&uuml;hrung des elektronischen Kommunikationsvorgangs oder zur Bereitstellung bestimmter, von Ihnen erw&uuml;nschter Funktionen (z.B. Warenkorbfunktion) erforderlich sind, werden auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Der Websitebetreiber hat ein berechtigtes Interesse an der Speicherung von Cookies zur technisch fehlerfreien und optimierten Bereitstellung seiner Dienste. Soweit andere Cookies (z.B. Cookies zur Analyse Ihres Surfverhaltens) gespeichert werden, werden diese in dieser Datenschutzerkl&auml;rung gesondert behandelt.</p>
    <h3>Server-Log-Dateien</h3>
    <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten Server-Log-Dateien, die Ihr Browser automatisch an uns &uuml;bermittelt. Dies sind:</p>
    <ul>
        <li>Browsertyp und Browserversion</li>
        <li>verwendetes Betriebssystem</li>
        <li>Referrer URL</li>
        <li>Hostname des zugreifenden Rechners</li>
        <li>Uhrzeit der Serveranfrage</li>
        <li>IP-Adresse</li>
    </ul>
    <p>Eine Zusammenf&uuml;hrung dieser Daten mit anderen Datenquellen wird nicht vorgenommen.</p>
    <p>Die Erfassung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse an der technisch fehlerfreien Darstellung und der Optimierung seiner Website &ndash; hierzu m&uuml;ssen die Server-Log-Files erfasst werden.</p>
    <h3>Kontaktformular</h3>
    <p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und f&uuml;r den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.</p>
    <p>Die Verarbeitung der in das Kontaktformular eingegebenen Daten erfolgt somit ausschlie&szlig;lich auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Sie k&ouml;nnen diese Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtm&auml;&szlig;igkeit der bis zum Widerruf erfolgten Datenverarbeitungsvorg&auml;nge bleibt vom Widerruf unber&uuml;hrt.</p>
    <p>Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur L&ouml;schung auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck f&uuml;r die Datenspeicherung entf&auml;llt (z.B. nach abgeschlossener Bearbeitung Ihrer Anfrage). Zwingende gesetzliche Bestimmungen &ndash; insbesondere Aufbewahrungsfristen &ndash; bleiben unber&uuml;hrt.</p>
    <h3>Anfrage per E-Mail, Telefon oder Telefax</h3>
    <p>Wenn Sie uns per E-Mail, Telefon oder Telefax kontaktieren, wird Ihre Anfrage inklusive aller daraus hervorgehenden personenbezogenen Daten (Name, Anfrage) zum Zwecke der Bearbeitung Ihres Anliegens bei uns gespeichert und verarbeitet. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.</p>
    <p>Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre Anfrage mit der Erf&uuml;llung eines Vertrags zusammenh&auml;ngt oder zur Durchf&uuml;hrung vorvertraglicher Ma&szlig;nahmen erforderlich ist. In allen &uuml;brigen F&auml;llen beruht die Verarbeitung auf Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO) und / oder auf unseren berechtigten Interessen (Art. 6 Abs. 1 lit. f DSGVO), da wir ein berechtigtes Interesse an der effektiven Bearbeitung der an uns gerichteten Anfragen haben.</p>
    <p>Die von Ihnen an uns per Kontaktanfragen &uuml;bersandten Daten verbleiben bei uns, bis Sie uns zur L&ouml;schung auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck f&uuml;r die Datenspeicherung entf&auml;llt (z. B. nach abgeschlossener Bearbeitung Ihres Anliegens). Zwingende gesetzliche Bestimmungen &ndash; insbesondere gesetzliche Aufbewahrungsfristen &ndash; bleiben unber&uuml;hrt.</p>
    <h2>4. Plugins und Tools</h2>
    <h3>Google Web Fonts</h3>
    <p>Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Web Fonts, die von Google bereitgestellt werden. Beim Aufruf einer Seite l&auml;dt Ihr Browser die ben&ouml;tigten Web Fonts in ihren Browsercache, um Texte und Schriftarten korrekt anzuzeigen.</p>
    <p>Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern von Google aufnehmen. Hierdurch erlangt Google Kenntnis dar&uuml;ber, dass &uuml;ber Ihre IP-Adresse unsere Website aufgerufen wurde. Die Nutzung von Google Web Fonts erfolgt im Interesse einer einheitlichen und ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.</p>
    <p>Wenn Ihr Browser Web Fonts nicht unterst&uuml;tzt, wird eine Standardschrift von Ihrem Computer genutzt.</p>
    <p>Weitere Informationen zu Google Web Fonts finden Sie unter<a href="https://developers.google.com/fonts/faq" target="_blank" rel="noopener">https://developers.google.com/fonts/faq</a> und in der Datenschutzerkl&auml;rung von Google: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>'
);
?>
