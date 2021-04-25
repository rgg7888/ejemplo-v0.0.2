<?php

require_once __DIR__ . "/vendor/autoload.php";

pagina([
    head([
        metaGroup("Free html system","html, php, css, javascript","Ramiro G"),
        title("Http Requests & JavaScript"),
        lnk("rstylesheet|happ.css"),
        script("sxhr.js|d")
    ]),
    body([
        section([
            button("GET Data","iget-btn"),
            button("POST Data","ipost-btn")
        ],"icontrol-center")
    ])
],'len');