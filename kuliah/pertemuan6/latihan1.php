<?php 
$mahasiswa = ['Miftahul', 'Dicky', 'Herdy', 'Ryan', 'Sena'];
$binatang = ['🦍💨', '🐃💨', '🦕💨', '🦡💨', '🐒💨'];
$makanan = ['🤏', '🍜', '🦪', '🫔', '🥠'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $key => $name) { ?>
    <ul>
        <li>Nama: <?= $name; ?></li>
        <li>Makanan Favorit: <?= $makanan[$key]; ?> </li>
        <li>Peliharaan: <?= $binatang[$key]; ?></li>
    </ul>
    <?php } ?>

    <hr>
//cara ke 2 menggunakan for tetapi lebih benar menggunakan foreach
    <h2>Daftar Mahasiswa</h2>
    <?php for($i = 0; $i < 5; $i++) { ?>
    <ul>
        <li>Nama: <?= $mahasiswa[$i]; ?></li>
        <li>Makanan Favorit: <?= $makanan[$i]; ?> </li>
        <li>Peliharaan: <?= $binatang[$i]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>