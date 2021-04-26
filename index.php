<?php

require_once __DIR__ . "/vendor/autoload.php";

my_site([
    head([
        metaGroup("Free html system","html, php, css, javascript","Ramiro G"),
        title("Http Requests & JavaScript"),
        lnk("rstylesheet|happ.css"),
        script([
            get_simple(1,['getBtn'],['get-btn'],['getData'],"https://reqres.in/api/users"),
            false
        ])
    ]),
    body([
        section([
            button("GET Data","iget-btn"),
            button("POST Data","ipost-btn")
        ],"icontrol-center")
    ])
],'len');