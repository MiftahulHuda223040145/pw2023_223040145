<?php

session_start();

require('../functions.php');

$id = $_GET['id'];

$dbusers = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST['update'])) {
    if (ubahEmail($_POST) > 0) {
        echo "<script>
                alert('Email berhasil diubah');
                document.location.href = 'account-information-dashboard.php?id=" . $dbusers['id'] . "';
            </script>";
    } else {
        echo "<script>
                alert('Email gagal diubah');
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
    <title>SOM | Ubah Data</title>
    <link rel="stylesheet" href="../../css/update-data.css">
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="add-form" class="add-page">
        <div class="form-box">
            <h2>Update Data</h2>
            <form id="add" class="input-group-add" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?= $dbusers['id']; ?>">
                <input type="hidden" class="input-field" name="gambarLama" value="<?= $dbusers['gambar']; ?>">
                <input type="hidden" class="input-field" name="gambar" value="<?= $dbusers['gambar']; ?>">
                <input type="hidden" class="input-field" id="username" name="username" placeholder="Username"
                    value="<?= $dbusers['username']; ?>">
                <input type="hidden" class="input-field" id="password" name="password" placeholder="Password"
                    value="<?= $dbusers['password']; ?>">
                <p>Saat ini</p>
                <input type="email" class="input-field" id="disabled" name="email" disabled
                    value="<?= $dbusers['email']; ?>">
                <p>Baru</p>
                <input type="email" class="input-field" id="email" name="email" placeholder="Email" required
                    value="<?= $dbusers['email']; ?>">
                <button type="submit" class="submit-btn" name="update" id="update">Update</button>
                <a href="account-information-dashboard.php" class="back-btn"><i
                        class="fa-solid fa-arrow-left-long"></a></i>
            </form>
        </div>
    </div>
</body>

</html>