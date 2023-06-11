<?php

session_start();

require('../functions.php');

$id = $_SESSION['id'];

$dbusers = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST['update'])) {
    if (ubahPassword($_POST) > 0) {
        echo "<script>
                alert('Password berhasil diubah');
                document.location.href = 'account-information-users.php?id=" . $dbusers['id'] . "';
            </script>";
    } else {
        echo "<script>
                alert('Password gagal diubah');
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
                <input type="hidden" class="input-field" id="email" name="email" placeholder="Email"
                    value="<?= $dbusers['email']; ?>">
                <input type="hidden" class="input-field" id="username" name="username" placeholder="Username"
                    value="<?= $dbusers['username']; ?>">
                <p>Masukkan Password Baru</p>
                <input type="password" class="input-field" id="password" name="password" placeholder="Password"
                    required>
                <input type="password" class="input-field" id="password2" name="password2"
                    placeholder="Konfirmasi Password" required>
                <button type="submit" class="submit-btn" name="update" id="update">Update</button>
                <a href="account-information-users.php" class="back-btn"><i class="fa-solid fa-arrow-left-long"></a></i>
            </form>
        </div>
    </div>
</body>

</html>