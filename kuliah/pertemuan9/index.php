<?php 

    require('functions.php');


    $title = "home";

    $students = [
        [
            "nama" => "Miftahul Huda",
            "npm" => "223040145",
            "email" => "heromiftah2004@gmail.com"
        ],

        [
            "nama" => "Herdy Sya'banul Hakim",
            "npm" => "223040164",
            "email" => "herdy.223040164@mail.unpas.ac.id"
        ],
    ];

    

    require('views/index.view.php');