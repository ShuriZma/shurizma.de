<?php

$birthDate = explode("/", "04/12/2001");
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));

$lang = array(
    "shurizma" => "ShuriZma",
    "footer-link1" => "Privacy statement",
    "footer-link2" => "Legal notice",
    "footer-copyright" => "&copy;2018-" . date("Y") . "Copyright ShuriZma, All Rights Reserved.",
    "footer-discord" => "Join our Discord",
    "header" => "Official Homepage",
    "navbar-home" => "Home",
    "navbar-info" => "Info",
    "navbar-whois" => "Who is ShuriZma",
    "navbar-stream" => "Streaming-Info",
    "navbar-partner" => "Partners",
    "navbar-forum" => "Forum",
    "navbar-font" => "Font",
    "homepage" => "ShuriZma: Homepage",
    "home" => "Home",
    "home-p1" => "Welcome to the official website of ShuriZma.",
    "home-p2" => "Here you will find some small information about me and there will be new infos on a regular basis.",
    "partner" => "ShuriZma: Partners",
    "partner-title" => "Partners",
    "partner-list-title" => "Here's a list of all my partners:",
    "stream" => "ShuriZma: Streaming-Info",
    "stream-title" => "Streaming-Info",
    "stream-p1" => "As many of you know I am streaming on Twitch.",
    "stream-p2" => "Some people of you may ask themselves which games I stream.",
    "stream-p3" => 'On <a class="red-link" href="https://twitch.tv/shurizma">ShuriZma</a>, I will play my standard games spielen and sometimes also test some new ones, as long as you guys are interested in it<span class="red-link">*</span>.',
    "stream-p4" => "Which games I'm streaming isn't quite sure yet, but some of them will certainly be BO4, L4D2, Payday 2, MW3 and maybe also Warface.",
    "stream-p5" => 'If I still have a place available in games like L4D2, Payday 2, MW3 Survival or BO4 Zombies<span class="red-link">**</span>, you are always invited to join in. Note, however, that not everyone can always join in!',
    "stream-p6" => "A streaming plan will follow soon!",
    "stream-p7" => "This also means that if you want me to test a game, please feel free to contact me.",
    "stream-p8" => "Of course I will also do private lobbies in PvP and invite viewers there, but in PvE game modes I'm always looking for people.",
    "whois" => "ShuriZma: Who is ShuriZma",
    "whois-title" => "Who is ShuriZma?",
    "whois-p1" => "That's actually not a bad question!",
    "whois-p2" => "First of all here some basic information about me:",
    "whois-ul1" => '<li>At the moment I\'m ' . $age . ' years old</li>
        <li>I live in Berlin</li>
        <li>ShuriZma is not my real name (not everybody knows that)</li>
        <li>I am too lazy every year to update my age<span class="red-link">*</span></li>',
    "whois-p3" => "As soon as I have clarified the most important things we can go on.",
    "whois-p4" => "At the moment I'm still going to school (hopefully not for long, because I have more fun working), which is why I, like many others, don't have time for the really important things in life until the afternoon.",
    "whois-p5" => "For all of you who now say that this will not change when I go to work. But of course this changes, after all work is one of the important things in life.",
    "whois-p6" => "So that would be now clarified further in the text.",
    "whois-p7" => "Question is just what people want to know about me, if they want to know anything about me at all.",
    "whois-p8" => "Then I just start with my hobbies.",
    "whois-p9" => "In fact I have a lot of fun writing websites and learning and testing new things in the field of web development/design. I have a certificate in HTML, CSS as well as in PHP and Java-Script.",
    "whois-p10" => 'I am a big fan of formal languages<span class="red-link">**</span>. I\'m also currently practicing system administration.',
    "whois-p11" => "But also outside computer science I have hobbies (would be bad if not (real No-Lifer)).",
    "whois-p12" => "For example, I like to play with buddies (and then stream my non-existent gameplays), mostly shooters like BO4 and prefer zombies :P.",
    "whois-p13" => "But even more than anything I LOVE to listen to music. People always ask me what I like to hear. There is actually no answer to that, since I listen to almost everything, in continuous loop, day and night, 24/7, non-stop.",
    "whois-p14" => "Actually, there's nothing else to say about me. I'm just a normal boy, except for the fact that I'm not as toxic as many others and don't have to insult and troll 24/7 (I don't like that, so leave it with me. Otherwise ban :P).",
    "whois-p15" => "My age is now updated by PHP.",
    "whois-p16" => "formal languages are programming languages, languages like German and English are called natural languages.",
    "impressum" => "ShuriZma: Legal Notice",
    "impressum-title" => "Legal notice",
    "impressum-content" => "<h2>Information according to &sect; 5 TMG</h2>
    <p>Markus Heß<br>
        An der Wuhlheide 148<br>
        12459 Berlin</p>

    <h2>Contact</h2>
    <p>Telephone: +49 (0) 176 21 40 88 50<br>
        E-Mail: shurizma@shurizma.de</p>",
    "datenschutz-title" => "ShuriZma: Privacy Statement",
    "datenschutz" => '<h1>Data protection declaration </h1>
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
    <p>This site uses SSL or TLS encryption for security reasons and to protect the transmission of confidential content, such as orders or requests that you send to us as the site operator. You can recognize an encrypted connection by the fact that the browser\'s address line changes from &ldquo;http://&rdquo; to &ldquo;https://&rdquo; and the padlock symbol in your browser line.</p>
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
    <p>Further information on Google Web Fonts can be found at <a href="https://developers.google.com/fonts/faq" target="_blank" rel="noopener">https://developers.google.com/fonts/faq</a> and in Google\'s privacy policy: <a href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>.</p>'
);
?>
