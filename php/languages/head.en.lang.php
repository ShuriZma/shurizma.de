<?php
$head_lang = array(
    "cookie-consent" => '<script>
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
                "href": "?page=datenschutz&lang=' . $_COOKIE['lang']  . '&font=' . $_COOKIE['font'] . '"
            }
        })});
    </script>',
    "head-description" => "Here you can find some information about ShuriZma, even if you are not interested at all.",
);
