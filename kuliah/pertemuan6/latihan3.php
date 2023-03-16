<?php
//ARRAY ASSOCIATIVE
// array yang index
$mahasiswa = [['nama' => 'Miftahul', 'binatang' => '🦍💨', 'makanan' => ['🤏', '🍒']], 
['nama' => 'Dicky', 'binatang' => '🐃💨', 'makanan' => ['🍜']], 
['nama' => 'Herdy', 'binatang' => '🦕💨', 'makanan' => ['🦪']], 
['nama' => 'Ryan', 'binatang' => '🦡💨', 'makanan' => ['🫔']], 
['nama' => 'Sena', 'binatang' => '🐒💨', 'makanan' => ['🥠', '🍑']]]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $profile) { ?>
    <ul>
        <li>Nama: <?= $profile['nama']; ?></li>
        <li>Makanan Favorit: 
            <?php foreach ($profile['makanan'] as $foods) {
                echo $foods;
            } ?>
         </li>
        <li>Peliharaan: <?= $profile['binatang']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>