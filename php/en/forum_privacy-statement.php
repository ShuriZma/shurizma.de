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
                            <li><a class="a-index fas"  href="../de/forum_datenschutz.php"><img src="../../img/lang/de_flagge.png"/></a></li>
                        </ul>
                    </li>
				</ul>

			</nav>

			<div id="content" class="bg-white">
                <h2>
                    1. Data protection at a glance
                </h2>
                <h3>
                    General information
                </h3>
                <p>The following information provides a simple overview of what happens to your personal information when you visit our website. Personal information is any information that personally identifies you. Detailed information on the subject of data protection can be found in our data protection declaration listed under this text.</p>
                <h3>
                    Data collection on our website
                </h3>
                <p><strong>Who is responsible for the data collection on this website?</strong></p>
                <p><br></p>
                <p>The data processing on this website is carried out by the website operator. You can find his contact data in the imprint of this website. </p>
                <p><br></p>
                <p><strong>How do we collect your data?</strong></p>
                <p><br></p>
                <p>Your data will be collected, on the one hand, by you communicating it to us. This can be data that you enter in a contact form, for example.</p>
                <p><br></p>
                <p>Other data is automatically collected by our IT systems when you visit the website. These are mainly technical data (e.g. Internet browser, operating system or time of the page call). This data is collected automatically as soon as you enter our website.</p>
                <p><br></p>
                <p><strong>What do we use your data for? </strong></p>
                <p><br></p>
                <p>A part of the data is collected to ensure that the website is error-free. Other data may be used to analyze your user behavior.</p>
                <p><br></p>
                <p><strong>What rights do you have to your data?</strong></p>
                <p><br></p>
                <p>You have the right at any time and free of charge to receive information about the origin, recipient and purpose of your stored personal data. You also have the right to demand the correction, blocking or deletion of this data. You can contact us at any time at the address given in the imprint for this and other questions on the subject of data protection. In addition, you have the right to appeal to the responsible supervisory authority.</p>
                <p><br></p>
                <p>You also have the right, under certain circumstances, to ask for the processing of your personal data to be restricted. For details, please refer to the Privacy Policy under "Right to Restrict Processing".</p>
                <h2>
                    2. general information and mandatory information
                </h2>
                <h3>
                    data protection
                </h3>
                <p>The operators of these pages take the protection of your personal data very seriously. We treat your personal data confidentially and according to the legal data protection regulations as well as this data protection explanation.</p>
                <p><br></p>
                <p>When you use this website, various personal data is collected. Personal data is data with which you can be personally identified. This privacy statement explains what information we collect and how we use it. It also explains how and for what purpose this happens.</p>
                <p><br></p>
                <p>We would like to point out that data transmission over the Internet (e.g. communication by e-mail) can be subject to security gaps. A complete protection of the data against access by third parties is not possible.</p>
                <h3>
                    Note on the responsible body
                </h3>
                <p>The entity responsible for data processing on this website is:</p>
                <p><br></p>
                <p>Markus Heß<br />
                    An der Wuhlheide 148<br />
                    12459 Berlin</p>
                <p><br></p>
                <p>Telephone: +49 (0) 176 21 40 88 50<br>
                E-mail: shurizma@shurizma.de</p>
                <p><br></p>
                <p>Responsible body is the natural or legal person who alone or jointly with others decides on the purposes and means of processing personal data (e.g. names, e-mail addresses, etc.).
                <h3>
                    Revocation of your consent to data processing
                </h3>
                <p>Many data processing operations are only possible with your express consent. You can revoke your consent at any time. For this purpose, an informal e-mail notification to us is sufficient. The legality of the data processing carried out until the revocation remains unaffected by the revocation.</p>
                <h3>
                    Right to object to data collection in special cases and to direct advertising (Art. 21 DSGVO)
                </h3>
                <p><strong>If data processing is carried out on the basis of Art. 6 para. 1 lit. e or f DSGVO, you have the right at any time to object to the processing of your personal data for reasons arising from your particular situation; this also applies to profiling based on these provisions. The respective legal basis on which a processing is based can be found in this data protection declaration. If you file an objection, we will no longer process your personal data concerned unless we can prove compelling reasons for the processing worthy of protection which outweigh your interests, rights and freedoms or the processing serves the assertion, exercise or defence of legal claims (objection according to Art. 21 para. 1 DSGVO).</strong></p>
                <p><br></p>
                <p><strong>If your personal data is processed for the purpose of direct advertising, you have the right at any time to object to the processing of your personal data for the purpose of such advertising; this also applies to profiling insofar as it is connected with such direct advertising. If you object, your personal data will subsequently no longer be used for the purpose of direct advertising (objection according to Art. 21 para. 2 DSGVO).</strong></p>
                <h3>
                    Right of appeal to the competent supervisory authority
                </h3>
                <p>In the event of infringements of the DSGVO, the persons concerned have the right to appeal to a supervisory authority, in particular in the Member State of their habitual residence, workplace or place of presumed infringement. The right of appeal shall be without prejudice to any other administrative or judicial remedy.</p>
                <h3>
                    Right to data transferability
                </h3>
                <p>You have the right to have data which we process automatically on the basis of your consent or in fulfilment of a contract handed over to you or to a third party in a common, machine-readable format. If you request the direct transfer of the data to another responsible person, this will only be done as far as it is technically feasible.</p>
                <h3>
                    Information, blocking, deletion and correction
                </h3>
                <p>You have the right within the scope of the valid legal regulations at any time to free information about your stored personal data, their origin and receiver and the purpose of the data processing and if necessary a right to correction, blockage or deletion of these data. You can contact us at any time at the address given in the imprint for this and other questions on the subject of personal data.</p>
                <h3>
                    Right to limitation of processing
                </h3>
                <p>You have the right to request the restriction of the processing of your personal data. You can contact us at any time at the address given in the imprint. The right to restriction of the processing exists in the following cases: </p>
                <ul>
                    <li>If you dispute the accuracy of your personal data stored with us, we usually need time to verify this. For the duration of the check, you have the right to demand the restriction of the processing of your personal data.</li>
                    <li>If the processing of your personal data happened / happens unlawfully, you can request the restriction of data processing instead of deletion.</li>
                    <li>If we no longer need your personal data, but you need it for the exercise, defence or assertion of legal claims, you have the right to demand the restriction of the processing of your personal data instead of deletion.
                    <li>If you have filed an objection in accordance with Art. 21 Para. 1 DSGVO, you must weigh your interests against ours. As long as it is not yet clear whose interests predominate, you have the right to demand the restriction of the processing of your personal data.</li>
                </ul>
               <p>If you have restricted the processing of your personal data, such data may only be processed - apart from its storage - with your consent or for the purpose of asserting, exercising or defending legal claims or protecting the rights of another natural or legal person or for reasons of an important public interest of the European Union or a Member State.</p>
                <h2>
                    3. data collection on our website
                </h2>
                <h3>
                    cookies
                </h3>
                <p>The Internet pages partly use so-called cookies. Cookies do not damage your computer and do not contain viruses. Cookies serve to make our offer more user-friendly, more effective and safer. Cookies are small text files that are stored on your computer and saved by your browser.</p>
                <p><br></p>
                <p> Most of the cookies we use are so-called "session cookies". They are automatically deleted at the end of your visit. Other cookies remain stored on your device until you delete them. These cookies enable us to recognize your browser the next time you visit our site.</p>
                <p><br></p>
                <p>You can set your browser so that you are informed when cookies are set and only allow cookies in individual cases, exclude the acceptance of cookies for certain cases or generally and activate the automatic deletion of cookies when you close your browser. When cookies are disabled, the functionality of this website may be limited.</p>
                <p><br></p>
                <p>Cookies, which are necessary for the execution of the electronic communication process or for the provision of certain functions desired by you (e.g. shopping basket function), are stored on the basis of Art. 6 para. 1 lit. f DSGVO. The website operator has a justified interest in the storage of cookies for the technically error-free and optimised provision of his services. As far as other cookies (e.g. cookies for the analysis of your surfing behaviour) are stored, these will be treated separately in this privacy policy.
                <h3>
                    Server log files
                </h3>
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
                <p><br></p>
                <p>These data are collected on the basis of Art. 6 para. 1 lit. f DSGVO. The website operator has a justified interest in the technically error-free presentation and optimization of his website - for this the server log files must be recorded.
                <h3>
                    contact form
                </h3>
                <p>If you send us enquiries via the contact form, your details from the enquiry form including the contact data you entered there will be stored by us for the purpose of processing the enquiry and in the event of follow-up questions. These data will not be passed on without your consent. </p>
                <p><br></p>
                <p>The processing of the data entered in the contact form is therefore carried out exclusively on the basis of your consent (Art. 6 Para. 1 lit. a DSGVO). You can revoke this consent at any time. For this purpose, an informal notification by e-mail to us is sufficient. The legality of the data processing operations carried out until the revocation shall remain unaffected by the revocation.</p>
                <p><br></p>
                <p>The data entered by you in the contact form will remain with us until you request deletion, revoke your consent to storage or the purpose for data storage no longer applies (e.g. after your request has been processed). Mandatory legal provisions - in particular retention periods - remain unaffected. </p>
                <h3>
                    Registration on this website
                </h3>
                <p>You can register on our website to use additional features on the site. We use the data entered for this purpose only for the purpose of using the respective offer or service for which you have registered. The mandatory information requested during registration must be provided in full. Otherwise we will refuse the registration.</p>
                <p><br></p>
                <p>We will use the e-mail address provided during registration to inform you in this way about important changes, for example in the scope of our services or in the case of technically necessary changes. </p>
                <p><br></p>
                <p>The basis for data processing is Art. 6 para. 1 lit. b DSGVO, which permits the processing of data for the fulfilment of a contract or pre-contractual measures.</p>
                <p><br></p>
                <p>The data collected during registration will be stored by us as long as you are registered on our website and will then be deleted. Legal retention periods remain unaffected.</p>
                <h3>
                    Register with Facebook Connect
                </h3>
                <p>You can register with Facebook Connect by registering directly on our website. Provider of this service is Facebook Ireland Limited, 4 Grand Canal Square, Dublin 2, Ireland.</p>
                <p><br></p>
                <p>If you decide to register with Facebook Connect, you will automatically be redirected to the Facebook platform. There you can log in with your usage data. This links your Facebook profile to our website or services. This link gives us access to your data stored on Facebook. These are mainly:</p>
                <ul>
                    <li>Facebook name</li>
                    <li>Facebook profile picture</li>
                    <li>Email address stored on Facebook</li>
                    <li>Facebook ID</li>
                    <li>Birthday</li>
                    <li>Gender</li>
                    <li>Country</li>
                </ul>
                <p>This data will be used to set up, provision and personalize your account.</p>
                <p><br></p>
                <p>Registration with Facebook-Connect and the associated data processing procedures are based on your consent (Art. 6 para. 1 lit. a DSGVO). You may revoke this consent at any time with effect for the future.</p>
                <p><br></p>
                <p>For more information, see the Facebook Terms of Use and Facebook Privacy Policy. These can be found under: <a href="https://de-de.facebook.com/about/privacy/" target="_blank" rel="noopener">https://de-de.facebook.com/about/privacy/</a> and <a href="https://de-de.facebook.com/legal/terms/" target="_blank" rel="noopener">https://de-de.facebook.com/legal/terms/</a>.</p>
                <h3>
                    Registration with Google+
                </h3>
                <p>You can register with Google+ by registering directly on our website. Provider of this service is Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</p>
                <p><br></p>
                <p>If you decide to register with Google+, you will be automatically redirected to the Google+ platform. There you can log in with your usage data. This will link your Google+ profile to our website or services. This link gives us access to your data stored on Google+. These are mainly:</p>
                <ul>
                    <li>Google+-Profile picture</li>
                    <li>Email address deposited with Google+</li>
                    <li>Google+-ID</li>
                    <li>Birthday</li>
                    <li>Gender</li>
                    <li>Country</li>
                </ul>
                <p>This data will be used to set up, provision and personalize your account.</p>
                <p><br></p>
                <p>Registration with Google+ and the associated data processing operations are based on your consent (Art. 6 para. 1 lit. a DSGVO). You may revoke this consent at any time with effect for the future.</p>
                <p><br></p>
                <p>For more information, see the Google Terms of Use, Google+ Terms of Use, and Google Privacy Policy. These can be found under: <a href="https://policies.google.com/terms?hl=en" target="_blank" rel="noopener">https://policies.google.com/terms?hl=de</a>, <a href="https://www.google.com/intl/de/+/policy/pagesterms.html" target="_blank" rel="noopener">https://www.google.com/intl/de/+/policy/pagesterms.html</a> and <a href="https://policies.google.com/privacy?hl=en" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
                <h3>
                    Registration with Twitter
                </h3>
                <p>You can register with Twitter by registering directly on our website. Provider of this service is Twitter Inc., 1355 Market Street, Suite 900, San Francisco, CA 94103, USA.</p>
                <p><br></p>
                <p>If you decide to register with Twitter, you will be automatically redirected to the Twitter platform. There you can log in with your usage data. This will link your Twitter profile to our website or services. This link gives us access to your data stored on Twitter. These are mainly:</p>
                <ul>
                    <li>Twitter name</li>
                    <li>Twitter profile image</li>
                    <li> email address stored on Twitter</li>
                    <li>Twitter ID</li>
                    <li>Birthday</li>
                    <li>Gender</li>
                    <li>Country</li>
                </ul>
                <p>This data will be used to set up, provision and personalize your account.</p>
                <p><br></p>
                <p>Registration with Twitter and the associated data processing operations are based on your consent (Art. 6 para. 1 lit. a DSGVO). You may revoke this consent at any time with effect for the future.</p>
                <p><br></p>
                <p>Further information can be found in the Twitter Terms of Use and the Twitter Privacy Policy. These can be found under: <a href="https://twitter.com/de/tos" target="_blank" rel="noopener">https://twitter.com/de/tos</a> and <a href="https://twitter.com/de/privacy" target="_blank" rel="noopener">https://twitter.com/de/privacy</a>.</p>
                <h3>
                    Registration with GitHub
                </h3>
                <p>You can register with GitHub instead of registering directly on our website. Provider of this service is GitHub, Inc, 88 Colin P Kelly Jr St, San Francisco, CA 94107, USA.</p>
                <p><br></p>
                <p>If you decide to register with GitHub, you will be automatically redirected to the GitHub platform. There you can log in with your usage data. This will link your GitHub profile to our website or services. This link gives us access to your data stored at GitHub. These are mainly:</p>
                <ul>
                    <li>GitHub name</li>
                    <li>GitHub profile image</li>
                    <li>Email address deposited with GitHub</li>
                    <li>GitHub ID</li>
                    <li>Birthday</li>
                    <li>Gender</li>
                    <li>Country</li>
                </ul>
                <p>This data will be used to set up, provision and personalize your account.</p>
                <p><br></p>
                <p>Registration with GitHub and the associated data processing operations are based on your consent (Art. 6 para. 1 lit. a DSGVO). You may revoke this consent at any time with effect for the future.</p>
                <p><br></p>
                <p>Further information can be found in the GitHub Terms of Use and the GitHub Privacy Policy. These can be found under: <a href="https://help.github.com/articles/github-terms-of-service/" target="_blank" rel="noopener">https://help.github.com/articles/github-terms-of-service/</a> and <a href="https://help.github.com/articles/github-privacy-statement/" target="_blank" rel="noopener">https://help.github.com/articles/github-privacy-statement/</a>.</p>
                <h3>
                    Processing of data (customer and contract data)
                </h3>
                <p>We collect, process and use personal data only to the extent necessary for the establishment, content or modification of the legal relationship (inventory data). This is done on the basis of Art. 6 para. 1 lit. b DSGVO, which permits the processing of data for the fulfilment of a contract or pre-contractual measures. We collect, process and use personal data about the use of our Internet pages (usage data) only to the extent necessary to enable the user to make use of the service or to bill the user.</p>
                <p><br></p>
                <p>The collected customer data will be deleted after completion of the order or termination of the business relationship. Legal retention periods remain unaffected.</p>
                <h3>
                    Data transmission at contract conclusion for services and digital content
                </h3>
                <p>We transmit personal data to third parties only if this is necessary in the context of contract processing, such as to the credit institution responsible for payment processing.</p>
                <p><br></p>
                <p>A further transmission of the data does not take place or only if you have expressly agreed to the transmission. Your data will not be passed on to third parties without your express consent, for example for advertising purposes.</p>
                <p><br></p>
                <p>The basis for data processing is Art. 6 para. 1 lit. b DSGVO, which permits the processing of data for the fulfilment of a contract or pre-contractual measures.</p>
                <h2>
                    4th Newsletter
                </h2>
                <h3>
                    newsletter data
                </h3>
                <p>If you would like to receive the newsletter offered on the website, we require an e-mail address from you as well as information that allows us to verify that you are the owner of the e-mail address provided and that you agree to receive the newsletter. Further data will not be collected or will only be collected on a voluntary basis. We use these data exclusively for the dispatch of the requested information and do not pass these on to third parties.</p>
                <p><br></p>
                <p>The processing of the data entered in the newsletter registration form takes place exclusively on the basis of your consent (Art. 6 para. 1 lit. a DSGVO). You can revoke your consent to the storage of data, e-mail address and their use to send the newsletter at any time, for example via the "Unsubscribe" link in the newsletter. The legality of the data processing operations that have already taken place remains unaffected by the revocation.</p>
                <p><br></p>
                <p>The data that you have stored with us for the purpose of subscribing to the newsletter will be stored by us until you unsubscribe from the newsletter and deleted after unsubscribing from the newsletter. Data stored by us for other purposes shall remain unaffected by this.</p>
                <h2>
                    5. plugins and tools
                </h2>
                <h3>
                    YouTube
                </h3>
                <p>Our website uses plugins from the YouTube page operated by Google. The site is operated by YouTube, LLC, 901 Cherry Ave, San Bruno, CA 94066, USA.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with a YouTube plugin, a connection will be established to the YouTube servers. The YouTube server will be informed which of our pages you have visited.</p>
                <p><br></p>
                <p>Youtube can also store various cookies on your end device. With the help of these cookies, Youtube can receive information about visitors to our website. This information is used, among other things, to collect video statistics, improve usability and prevent fraud. The cookies remain on your device until you delete them.</p>
                <p><br></p>
                <p>If you are logged in to your YouTube account, you can enable YouTube to assign your surfing behavior directly to your personal profile. You can prevent this by logging out of your YouTube account.</p>
                <p><br></p>
                <p>YouTube is used in the interest of an appealing presentation of our online offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For further information on the handling of user data, please refer to YouTube's privacy policy: <a href="https://policies.google.com/privacy?hl=en" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=en</a>.</p>
                <h3>
                    Vimeo
                </h3>
                <p>Our website uses plugins of the video portal Vimeo. The provider is Vimeo Inc., 555 West 18th Street, New York, New York 10011, USA.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with a Vimeo plugin, you will be connected to Vimeo's servers. The Vimeo server will be informed which of our pages you have visited. Vimeo also obtains your IP address. This also applies if you are not logged in to Vimeo or do not have an account with Vimeo. The information collected by Vimeo is transmitted to the Vimeo server in the USA.</p>
                <p><br></p>
                <p>If you are logged in to your Vimeo account, you allow Vimeo to assign your surfing behavior directly to your personal profile. You can prevent this by logging out of your Vimeo account.</p>
                <p><br></p>
                <p>The use of Vimeo takes place in the interest of an appealing representation of our on-line offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For more information on the handling of user data, please refer to Vimeo's Privacy Policy: <a href="https://vimeo.com/privacy" target="_blank" rel="noopener">https://vimeo.com/privacy</a>.</p>
                <h3>
                    Google Web Fonts
                </h3>
                <p>This page uses so-called web fonts provided by Google for the uniform display of fonts. When you open a page, your browser loads the web fonts you need into its browser cache to display text and fonts correctly.</p>
                <p><br></p>
                <p>For this purpose, the browser you are using must connect to Google's servers. This gives Google knowledge that our website has been accessed via your IP address. The use of Google Web Fonts is in the interest of a uniform and appealing presentation of our online offerings. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>If your browser does not support Web Fonts, a default font will be used by your computer.</p>
                <p><br></p>
                <p>Further information on Google Web Fonts can be found at <a href="https://developers.google.com/fonts/faq" target="_blank" rel="noopener">https://developers.google.com/fonts/faq</a> and in Google's privacy policy: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
                <h3>
                    Google Maps
                </h3>
                <p>This page uses the Google Maps map service via an API. Provider is Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</p>
                <p><br></p>
                <p>To use the functions of Google Maps it is necessary to save your IP address. This information is usually transferred to a Google server in the USA and stored there. The provider of this page has no influence on this data transfer. </p>
                <p><br></p>
                <p>The use of Google Maps takes place in the interest of an appealing representation of our online offers and at an easy findability of the places indicated by us on the website. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>More information about handling user data can be found in Google's privacy policy: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>
                <h3>
                    Google reCAPTCHA
                </h3>
                <p>We use "Google reCAPTCHA" (hereinafter referred to as "reCAPTCHA") on our websites. Provider is Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA ("Google").</p>
                <p><br></p>
                <p>With reCAPTCHA it should be checked whether the data input on our websites (e.g. in a contact form) is done by a person or by an automated program. For this purpose, reCAPTCHA analyzes the behavior of the website visitor on the basis of various characteristics. This analysis starts automatically as soon as the website visitor enters the website. For analysis, reCAPTCHA evaluates various information (e.g. IP address, length of stay of the website visitor on the website or mouse movements made by the user). The data collected during the analysis will be forwarded to Google.</p>
                <p><br></p>
                <p>The reCAPTCHA analyses run completely in the background. Website visitors are not advised that an analysis is taking place.</p>
                <p><br></p>
                <p>Data processing is based on Art. 6 para. 1 lit. f DSGVO. The website operator has a legitimate interest in protecting his website from abusive automated spying and SPAM.</p>
                <p><br></p>
                <p>Further information about Google reCAPTCHA and Google's privacy policy can be found at the following links: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a> and <a href="https://www.google.com/recaptcha/intro/android.html" target="_blank" rel="noopener">https://www.google.com/recaptcha/intro/android.html</a>.</p>
                <h3>
                    SoundCloud
                </h3>
                <p>Plugins of the social network SoundCloud (SoundCloud Limited, Berners House, 47-48 Berners Street, London W1T 3NF, Great Britain.) can be integrated on our pages. You can recognize the SoundCloud plugins by the SoundCloud logo on the affected pages.</p>
                <p><br></p>
                <p>When you visit our pages, a direct connection is established between your browser and the SoundCloud server after activation of the plugin. SoundCloud receives the information that you have visited our site with your IP address. If you click the "Like" or "Share" button while logged into your SoundCloud account, you can link and/or share the content of our pages with your SoundCloud profile. This allows SoundCloud to associate visiting our sites with your user account. We would like to point out that as the provider of the pages, we do not have any knowledge of the content of the transmitted data or its use by SoundCloud.</p>
                <p><br></p>
                <p>The use of SoundCloud is based on Art. 6 para. 1 lit. f DSGVO. The website operator has a legitimate interest in the widest possible visibility in the social media.</p>
                <p><br></p>
                <p>For more information, please refer to the SoundCloud Privacy Policy: <a href="https://soundcloud.com/pages/privacy" target="_blank" rel="noopener">https://soundcloud.com/pages/privacy</a>.</p>
                <p><br></p>
                <p>If you do not want SoundCloud to associate your visit to our site with a SoundCloud account, please log out of your SoundCloud account before activating any SoundCloud plugin content.</p>
                <h3>
                    Veoh
                </h3>
                <p>Our website uses plugins of the video portal Veoh. Provider is FC2, 4730 South Fort Apache Road, Suite 300, Las Vegas, NV 89147, USA.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with a Veoh plugin, you will be connected to Veoh's servers. The Veoh server will be informed which of our pages you have visited. Veoh also obtains your IP address. This also applies if you are not logged in to Veoh or do not have an account with Veoh. The information collected by Veoh is transmitted to the Veoh server in the USA.</p>
                <p><br></p>
                <p>If you are logged in to your Veoh account, you allow Veoh to assign your surfing behavior directly to your personal profile. You can prevent this by logging out of your Veoh account.</p>
                <p><br></p>
                <p>The use of Veoh is in the interest of an appealing presentation of our online offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For further information on the handling of user data, please refer to Veoh's data protection declaration: <a href="https://www.veoh.com/corporate/privacypolicy" target="_blank" rel="noopener">https://www.veoh.com/corporate/privacypolicy</a>.</p>
                <h3>
                    dailymotion
                </h3>
                <p>Our website uses plugins of the video portal Dailymotion. Provider is Dailymotion, 140 boulevard Malesherbes, 75017 Paris, France.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with a Dailymotion plugin, you will be connected to the Dailymotion servers. The Dailymotion server will be informed which of our pages you have visited. Dailymotion also obtains your IP address. This also applies if you are not logged in at Dailymotion or do not have an account at Dailymotion.</p>
                <p><br></p>
                <p>If you are logged in to your Dailymotion account, you can enable Dailymotion to assign your surfing behaviour directly to your personal profile. You can prevent this by logging out of your Dailymotion account.</p>
                <p><br></p>
                <p>The use of Dailymotion is in the interest of an appealing presentation of our online offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For more information on the handling of user data, please refer to Dailymotion's privacy policy: <a href="https://www.dailymotion.com/legal/privacy" target="_blank" rel="noopener">https://www.dailymotion.com/legal/privacy</a>.</p>
                <h3>
                    GitHub
                </h3>
                <p>Our website uses plugins of the online service GitHub. Provider is GitHub, Inc, 88 Colin P Kelly Jr St, San Francisco, CA 94107, USA.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with a GitHub plugin, you will be connected to the GitHub servers. The GitHub server will be informed which of our pages you have visited. GitHub also obtains your IP address. This applies even if you are not logged in to GitHub or do not have a GitHub account. The information collected by GitHub is transmitted to the GitHub server in the USA.</p>
                <p><br></p>
                <p>If you are logged in to your GitHub account, you allow GitHub to assign your surfing behavior directly to your personal profile. You can prevent this by logging out of your GitHub account.</p>
                <p><br></p>
                <p>The use of GitHub takes place in the interest of an appealing representation of our on-line offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For more information on the handling of user data, please refer to GitHub's privacy policy: <a href="https://help.github.com/articles/github-privacy-statement/" target="_blank" rel="noopener">https://help.github.com/articles/github-privacy-statement/</a>.</p>
                <h3>
                    spotify
                </h3>
                <p>Our website uses plugins of the online service Spotify. The provider is Spotify AB, Birger Jarlsgatan 61, 113 56 Stockholm, Sweden.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with a Spotify plugin, a connection is established to the servers of Spotify. The Spotify server will be informed which of our pages you have visited. In addition, Spotify obtains your IP address. This also applies if you are not logged in to Spotify or do not have an account with Spotify.</p>
                <p><br></p>
                <p>If you are logged in to your Spotify account, you enable Spotify to assign your surfing behavior directly to your personal profile. You can prevent this by logging out of your Spotify account.</p>
                <p><br></p>
                <p>The use of Spotify is in the interest of an appealing presentation of our online offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>Further information on the handling of user data can be found in Spotify's data protection declaration: <a href="https://www.spotify.com/de/legal/privacy-policy/" target="_blank" rel="noopener">https://www.spotify.com/de/legal/privacy-policy/</a>.</p>
                <h3>
                    instagram
                </h3>
                <p>Our website uses plugins from the Instagram online service. Provider is Instagram Inc., 1601 Willow Road, Menlo Park, CA 94025, USA.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with an Instagram plugin, you will be connected to Instagram's servers. This will tell the Instagram server which of our pages you have visited. In addition, Instagram obtains your IP address. This also applies if you are not logged in to Instagram or do not have an account with Instagram. The information collected by Instagram is sent to the Instagram server in the USA.</p>
                <p><br></p>
                <p>If you are logged into your Instagram account, you can allow Instagram to associate your surfing behavior directly with your personal profile. You can prevent this by logging out of your Instagram account.</p>
                <p><br></p>
                <p>The use of Instagram is in the interest of an appealing presentation of our online offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For more information on how we handle user data, please see Instagram's Privacy Policy at: <a href="https://instagram.com/about/legal/privacy/" target="_blank" rel="noopener">https://instagram.com/about/legal/privacy/</a>.</p>
                <h3>
                    Imgur
                </h3>
                <p>Our website uses plugins of the online service Imgur. Provider is Imgur, Inc., 415 Jackson Street, 2nd Floor, Suite 200, San Francisco, CA 94111, USA.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with an Imgur plugin, a connection to the servers of Imgur will be established. The Imgur server will be informed which of our pages you have visited. Imgur also obtains your IP address. This also applies if you are not logged in at Imgur or do not have an account at Imgur. The information collected by Imgur is transmitted to the Imgur server in the USA.</p>
                <p><br></p>
                <p>If you are logged in to your Imgur account, you allow Imgur to assign your surfing behavior directly to your personal profile. You can prevent this by logging out of your Imgur account.</p>
                <p><br></p>
                <p>The use of Imgur takes place in the interest of an appealing representation of our on-line offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For more information on the handling of user data, please refer to Imgur's privacy policy: <a href="https://imgur.com/privacy" target="_blank" rel="noopener">https://imgur.com/privacy</a>.</p>
                <h3>
                    twitch
                </h3>
                <p>Our website uses plugins from the Twitch online service. Provider is Twitch Interactive, Inc., 225 Bush Street, 6th Floor, San Francisco, CA 94104, USA.</p>
                <p><br></p>
                <p>When you visit one of our pages equipped with a Twitch plugin, you will be connected to the Twitch servers. The Twitch server will be informed which of our pages you have visited. Twitch also obtains your IP address. This also applies if you are not logged in to Twitch or do not have a Twitch account. The information collected by Twitch is transmitted to the Twitch server in the USA.</p>
                <p><br></p>
                <p>If you are logged in to your Twitch account, you allow Twitch to assign your surfing behavior directly to your personal profile. You can prevent this by logging out of your Twitch account.</p>
                <p><br></p>
                <p>The use of Twitch is in the interest of an appealing presentation of our online offers. This constitutes a legitimate interest within the meaning of Art. 6 para. 1 lit. f DSGVO.</p>
                <p><br></p>
                <p>For further information on the handling of user data, please refer to Twitch's privacy policy: <a href="https://www.twitch.tv/p/legal/privacy-policy/" target="_blank" rel="noopener">https://www.twitch.tv/p/legal/privacy-policy/</a>.</p>
                <h2>
                    6. payment provider
                </h2>
                <h3>
                    PayPal
                </h3>
                <p>On our website we offer payment via PayPal. This payment service is provided by PayPal (Europe) S.à.r.l. et Cie, S.C.A., 22-24 Boulevard Royal, L-2449 Luxembourg (hereinafter referred to as "PayPal").</p>
                <p><br></p>
                <p>If you choose to pay via PayPal, the payment information you enter will be sent to PayPal.</p>
                <p><br></p>
                <p>The transfer of your data to PayPal is based on Art. 6 para. 1 lit. a DSGVO (consent) and Art. 6 para. 1 lit. b DSGVO (processing to fulfill a contract). You have the possibility to revoke your consent to data processing at any time. A revocation does not affect the effectiveness of past data processing operations.</p>
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
