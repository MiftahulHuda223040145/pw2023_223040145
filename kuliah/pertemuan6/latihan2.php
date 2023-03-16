<?php
$mahasiswa = [['Miftahul', '🦍💨', '🤏'], 
['Dicky', '🐃💨', '🍜'], 
['Herdy', '🦕💨', '🦪'], 
['Ryan', '🦡💨', '🫔'], 
['Sena', '🐒💨', '🥠']]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $profile) { ?>
    <ul>
        <li>Nama: <?= $profile[0]; ?></li>
        <li>Makanan Favorit: <?= $profile[2]; ?> </li>
        <li>Peliharaan: <?= $profile[1]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>