<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>ShuriZma: Privacy Statement</title>
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
              "position": "top"
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
                            <li><a class="a-index fas"  href="../de/datenschutz.php"><img src="../../img/lang/de_flagge.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>

			<div id="content" class="bg-white">
                <h1>Data protection declaration </h1>
                <h2>1. data protection at a glance</h2>
                <h3>General information </h3>
                <p>The following information provides a simple overview of what happens to your personal information when you visit our website. Personal data is all data with which you can be personally identified. You can find detailed information on the subject of data protection in our data protection declaration listed under this text.</p>
                <h3>Data collection on our website </h3>
                <p><strong>Who is responsible for the data collection on this website?</strong></p>
                <p>The data processing on this website is carried out by the website operator. You can find their contact details in the imprint of this website.</p>
                <p><strong>How do we collect your data?</strong></p>
                <p>Your data will be collected by you communicating it to us. This can be data that you enter in a contact form, for example.</p>
                <p>Other data is automatically collected by our IT systems when you visit the website. These are mainly technical data (e.g. Internet browser, operating system or time of the page call). This data is collected automatically as soon as you enter our website.</p>
                <p><strong>What do we use your data for?</strong></p>
                <p>A portion of the data is collected to ensure that the website is error-free. Other data may be used to analyze your user behavior.</p>
                <p><strong>What rights do you have to your data?</strong></p>
                <p>You have the right at any time and free of charge to obtain information about the origin, recipient and purpose of your stored personal data. You also have the right to demand the correction, blocking or deletion of this data. You can contact us at any time at the address given in the imprint for this and other questions on the subject of data protection. You also have the right to lodge a complaint with the responsible supervisory authority. </p>
                <p>In addition, you have the right, under certain circumstances, to request that the processing of your personal data be restricted. For details, please refer to the data protection statement under &ldquo;Right to limitation of processing&ldquo;.</p>.
                <h2>2. general notes and mandatory information</h2>
                <h3>Privacy protection</h3>
                <p>The operators of these pages take the protection of your personal data very seriously. We treat your personal data confidentially and according to the legal data protection regulations as well as this data protection declaration</p>
                <p>When you use this website, various personal data is collected. Personal data is data with which you can be personally identified. This privacy statement explains what data we collect and for what purpose we use it. It also explains how and for what purpose this is done.</p>
                <p>We would like to point out that data transmission over the Internet (e.g. communication by e-mail) may be subject to security gaps. A complete protection of the data against access by third parties is not possible.
                <h3>Note on the responsible location</h3>
                <p>The party responsible for data processing on this website is: </p>
                <p>Markus Heß<br />
                    An der Wuhlheide 148<br />
                    12459 Berlin</p>

                <p>Telephone: +49 (0) 176 21 40 88 50<br />
                    E-mail: shurizma@shurizma.de</p>
                <p>Responsible body is the natural or legal person who alone or together with others &uuml;decides on the purposes and means of the processing of personal data (e.g. names, e-mail addresses, etc.).</p>
                <h3>Withdrawal of your consent to data processing</h3>
                <p>Many data processing procedures are only possible with your express consent. You can revoke an already given consent at any time. For this purpose, an informal e-mail notification to us is sufficient. The legality of the data processing carried out until the revocation remains unaffected by the revocation.</p>
                <h3>right to object to data collection in special cases and to direct advertising (Art. 21 DSGVO)</h3>
                <p><strong>If data processing is carried out on the basis of Art. 6 Para. 1 lit. e or f DSGVO, you have the right at any time to object to the processing of your personal data for reasons arising from your particular situation; this also applies to profiling based on these provisions. The respective legal basis on which a processing is based can be found in this data protection declaration. If you file an objection, we will no longer process your personal data concerned unless we can prove that there are compelling legitimate reasons for the processing which outweigh your interests, rights and freedoms or the processing serves the assertion, exercise or defence of legal claims (objection according to Art. 21 para. 1 DSGVO). </strong></p>
                <p><strong>If your personal data is processed for the purpose of direct advertising, you have the right at any time to object to the processing of your personal data for the purpose of such advertising; this also applies to profiling insofar as it is connected with such direct advertising. If you object, your personal data will subsequently no longer be used for the purpose of direct advertising (objection according to Art. 21 para. 2 DSGVO).</strong></p>
                <h3>Right of appeal to the competent supervisory authority </h3>
                <p>In the event of violations of the DSGVO, the persons concerned shall have the right to appeal to a supervisory authority, in particular in the Member State of their habitual residence, workplace or place of presumed violation. The right of appeal shall be without prejudice to any other administrative or judicial remedy.</p>
                <h3>right to data transferability</h3>
                <p>You have the right to have data, which we process automatically on the basis of your consent or in fulfilment of a contract, transferred to you or to a third party in a common, machine-readable format. If you request the direct transfer of the data to another responsible person, this will only be done as far as it is technically feasible.
               <h3>SSL or TLS encryption </h3>
                <p>This site uses SSL or TLS encryption for security reasons and to protect the transmission of confidential content, such as orders or requests that you send to us as the site operator. You can recognize an encrypted connection by the fact that the browser's address line changes from &ldquo;http://&rdquo; to &ldquo;https://&rdquo; and the padlock symbol in your browser line.</p>
                <p>If SSL or TLS encryption is enabled, the data you submit to us will not be read by third parties.</p>
                <h3>Information, blocking, cancellation and rectification</h3>
                    <p>You have the right within the scope of the valid legal regulations at any time to free information about your stored personal data, their origin and receiver and the purpose of the data processing and if necessary a right to correction, blockage or deletion of these data. You can contact us at any time at the address given in the imprint for this and other questions on the subject of personal data.</p>
                <h3>Right to restrict processing </h3>
                <p>You have the right to demand the restriction of the processing of your personal data. For this purpose you can contact us at any time at the address given in the imprint. The right to limit the processing consists in the following cases: </p>
                <ul>
                    <li>If you dispute the accuracy of your personal data stored with us, we usually need time to verify this. For the duration of the review, you have the right to request that the processing of your personal data be restricted. </li>
                    <li>If the processing of your personal data has taken place unlawfully, you may request that the data processing be restricted instead of being deleted. </li>
                    <li>If we no longer need your personal data, but you need it to exercise, defend or enforce your rights, you have the right to request that the processing of your personal data be limited instead of being suspended. </li>
                    <li>If you have filed an objection pursuant to Art. 21 Para. 1 DSGVO, a deviation must be made between your and our interests. As long as it is not yet clear whose interests predominate, you have the right to demand the restriction of the processing of your personal data. </li>
                </ul>
                <p>If you have restricted the processing of your personal data, such data may be processed &ndash; except for its storage &ndash; only with your consent or for the purpose of asserting, exercising or defending the rights of another natural or legal person or for the protection of the rights of another natural or legal person or for reasons of an important public interest of the European Union or of a Member State.</p>
                <h2>3. data acquisition on our website</h2>
                <h3>Cookies</h3>
                <p>The Internet pages partly use so-called cookies. Cookies do not damage your computer and do not contain viruses. Cookies serve to make our offer more user-friendly, more effective and safer. Cookies are small text files that are stored on your computer and saved by your browser.</p>
                <p>The majority of the cookies we use are so-called &ldquo;session cookies&rdquo;. They are automatically deleted at the end of your visit. Other cookies remain stored on your terminal until you delete them. These cookies enable us to recognize your browser the next time you visit our site. </p>
                <p>You can set your browser to notify you when cookies are set and to allow cookies only in individual cases, to refuse or accept cookies for specific purposes, and to enable automatic deletion of cookies when you close your browser. If cookies are deactivated, the functionality of this website may be limited. </p>
                <p>Cookies, which are necessary for the execution of the electronic communication process or for the provision of certain functions you have requested (e.g. shopping basket function), are stored on the basis of Art. 6 para. 1 lit. f DSGVO. The website operator has a justified interest in the storage of cookies for the technically error-free and optimised provision of its services. As far as other cookies (e.g. cookies for the analysis of your surfing behaviour) are stored, these are treated separately in this data protection declaration.</p>
                <h3>Server log files</h3>
                <p>The provider of the pages automatically collects and stores information in so-called server log files, which your browser automatically transmits to us. These are:</p>
                <ul>
                    <li>Browser type and browser version</li>
                    <li>operating system used</li>
                    <li>Referrer URL</li>
                    <li>host name of the accessing computer</li>
                    <li>Time of the server request</li>
                    <li>IP address</li>
                </ul>
                <p>A merging of this data with other data sources is not performed.</p>
                <p>This data is collected on the basis of Art. 6 para. 1 lit. f DSGVO. The website operator has a legitimate interest in the technically correct presentation and optimisation of his website &ndash; for this purpose the server log files must be recorded.</p>
                <h3>Contact form</h3>
                <p>If you send us enquiries via the contact form, your details from the enquiry form including the contact data you entered there will be stored by us for the purpose of processing the enquiry and in the event of follow-up questions. These data will not be disclosed without your consent.</p>
                <h2>4. plugins and tools</h2>
                <h3>Google Web Fonts</h3>
                <p>This page uses so-called web fonts provided by Google for the uniform display of fonts. When you open a page, your browser will cache the required web fonts in your browser to display text and fonts correctly.</p>
                <p>For this purpose, the browser you use must establish a connection to the Google servers. This will enable Google to know that your IP address has been used to access our website. The use of Google Web Fonts is in the interest of a uniform and appealing presentation of our online services. This constitutes a legitimate interest within the meaning of Art. 6 Para. 1 lit. f DSGVO.</p>
                <p>If your browser does not support Web Fonts, a default font will be used by your computer.</p>
                <p>Further information on Google Web Fonts can be found at <a href="https://developers.google.com/fonts/faq" target="_blank" rel="noopener">https://developers.google.com/fonts/faq</a> and in Google's privacy policy: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
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
