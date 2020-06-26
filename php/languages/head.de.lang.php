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
                "message": "Diese Website verwendet Cookies, um sicherzustellen, dass du die bestmögliche Erfahrung auf unserer Website machen kannst.",
                "dismiss": "Verstanden!",
                "link": "Erfahre mehr",
                "href": "?page=datenschutz&lang=' . $_COOKIE['lang']  . '&font=' . $_COOKIE['font'] . '"
            }
        })});
</script>'
);
