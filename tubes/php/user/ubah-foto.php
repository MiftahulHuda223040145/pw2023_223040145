<?php

session_start();

require('../functions.php');

$conn = koneksi();

$id = $_SESSION['id'];

$dbusers = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST['upload'])) {
    if (ubahGambar($_POST) > 0) {
        echo "<script>
                alert('Foto berhasil diubah');
                document.location.href = 'account-information-users.php?id=" . $dbusers['id'] . "';
            </script>";
    } else {
        echo "<script>
                alert('Foto gagal diubah');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM | Ubah Foto</title>
    <link rel="stylesheet" href="../../css/ubah-foto.css">
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="upload-box">
                <input type="file" accept="image/*" hidden name="gambar" id="gambar">
                <img src="" alt="">
                <p>Cari File</p>
            </div>
            <div class="content">
                <div class="row sizes">
                    <input type="hidden" id="id" name="id" value="<?= $dbusers['id']; ?>">
                    <input type="hidden" class="input-field" id="email" name="email" placeholder="Email"
                        value="<?= $dbusers['email']; ?>">
                    <input type="hidden" class="input-field" id="username" name="username" placeholder="Username"
                        value="<?= $dbusers['username']; ?>">
                    <input type="hidden" class="input-field" id="password" name="password" placeholder="password"
                        value="<?= $dbusers['password']; ?>">
                    <input type="hidden" class="input-field" name="gambarLama" value="<?= $dbusers['gambar']; ?>">
                    <div class="column width">
                        <label></label>
                        <input type="number">
                    </div>
                    <div class="column height">
                        <label></label>
                        <input type="number">
                    </div>
                </div>
                <div class="row checkboxes">
                </div>
                <button class="download-btn" name="upload" id="upload">Upload</button>
            </div>
        </form>
    </div>
    <script src="../../js/ubah-foto.js"></script>
</body>

</html>