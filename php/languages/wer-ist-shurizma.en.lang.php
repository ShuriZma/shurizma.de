<?php

$birthDate = explode("/", "04/12/2001");
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));

$lang = array(
    "whois" => "ShuriZma: Who is ShuriZma",
    "whois-title" => "Who is ShuriZma?",
    "whois-p1" => "That's actually not a bad question!",
    "whois-p2" => "First of all here some basic information about me:",
    "whois-ul1" => '<li>At the moment I\'m ' . $age . ' years old</li>
        <li>I live in Berlin</li>
        <li>ShuriZma is not my real name (not everybody knows that)</li>
        <li>I am too lazy to update my age every year<span class="red-link">*</span></li>',
    "whois-p3" => "As soon as I have clarified the most important things we can go on.",
    "whois-p4" => "At the moment I'm still going to school (hopefully not for long, because I have more fun working), which is why I, like many others, don't have time for the really important things in life until the afternoon.",
    "whois-p5" => "For all of you who now say that this will not change when I go to work. But of course this changes, after all work is one of the important things in life.",
    "whois-p6" => "So that would be now clarified further in the text.",
    "whois-p7" => "Question is just what people want to know about me, if they want to know anything about me at all.",
    "whois-p8" => "Then I just start with my hobbies.",
    "whois-p9" => "In fact I have a lot of fun writing websites and learning and testing new things in the field of web development/design. I have a certificate in HTML, CSS as well as in PHP and Java-Script.",
    "whois-p10" => 'I am a big fan of formal languages<span class="red-link">**</span>. I\'m also currently practicing system administration.',
    "whois-p11" => "But also outside computer science I have hobbies (would be bad if not (real No-Lifer)).",
    "whois-p12" => "For example, I like to play with buddies (and then stream my non-existent gameplays), mostly co-op like Payday 2 and prefered stealth :P.",
    "whois-p13" => "But even more than anything I LOVE to listen to music. People always ask me what I like to hear. There is actually no answer to that, since I listen to almost everything, in continuous loop, day and night, 24/7, non-stop.",
    "whois-p14" => "Actually, there's nothing else to say about me. I'm just a normal boy, except for the fact that I'm not as toxic as many others and don't have to insult and troll 24/7 (I don't like that, so leave it with me. Otherwise ban :P).",
    "whois-p15" => "My age is being updated by PHP now.",
    "whois-p16" => "formal languages are programming languages, languages like German and English are called natural languages.",
);
?>
