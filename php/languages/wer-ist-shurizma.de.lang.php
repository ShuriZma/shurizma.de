<?php

$birthDate = explode("/", "04/12/2001");
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));

$lang = array(
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


);
