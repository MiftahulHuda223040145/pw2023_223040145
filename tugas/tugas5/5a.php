<?php 

$mahasiswa = [
    [
        "nama" => "Herdy Sya'banul Hakim",
        "nrp" => "223040164",
        "email" => "herdy.223040164@mail.unpas.ac.id"
    ],

    [
        "nama" => "Andre Prayogasmara",
        "nrp" => "2230100012",
        "email" => "andreprayogasmara100@gmail.com"
    ],

    [
        "nama" => "Muhamad Rinaldi Agus Pratama",
        "nrp" => "2230440166",
        "email" => "rinaldi.223040166@mail.unpas.ac.id"
    ],

    [
        "nama" => "Ilman Hanifa",
        "nrp" => "223040165",
        "email" => "ilman.223040165@mail.unpas.ac.id"
    ],

    [
        "nama" => "Annisa septiyani",
        "nrp" => "223040172",
        "email" => "annisa.233040172@mail.unpas.ac.id"
    ],

    [
        "nama" => "Genta Sena Irasta",
        "nrp" => "223040168",
        "email" => "genta.223040168@mail.unpas.ac.id"
    ],

    [
        "nama" => "Ryan Hidayat",
        "nrp" => "223040173",
        "email" => "ryan.223040173@mail.unpas.ac.id"
    ],

    [
        "nama" => "Dicky Dwi Dermawan",
        "nrp" => "223040150",
        "email" => "dicky.223040150@mail.unpas.ac.id"
    ],

    [
        "nama" => "Muhammad Rizki Fadillah",
        "nrp" => "226010015",
        "email" => "rizkifadillah.id@gmail.com"
    ],

    [
        "nama" => "Mochamad Fitrajaya Perkasa",
        "nrp" => "223060005",
        "email" => "Fitrajaya.223060005@mail.unpas.ac.id"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?= $mhs ['nama']; ?></li>
        <li>NRP: <?= $mhs ['nrp']; ?></li>
        <li>Email: <?= $mhs ['email']; ?></li>
    </ul>
    <?php } ?>
    
</body>
</html>