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
                "href": "?f=datenschutz&lang=' . $_SESSION['lang'] . '"
            }
        })});
</script>'
);
