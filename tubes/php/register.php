<?php

require('functions.php');

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "<script>
            alert('Anda berhasil melakukan Registrasi');
            document.location.href = 'login.php';
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
    <title>SOM | Register</title>

    <!--========== Link CSS ==========-->
    <link rel="stylesheet" href="../css/register.css">

    <!--========== Link Icons ==========-->
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--========== Register Form ==========-->
    <div id="register-form" class="register-page">
        <div class="form-box">
            <h2>Register</h2>
            <form id="register" class="input-group-register" action="" method="post" enctype="multipart/form-data">
                <input type="email" class="input-field" id="email" name="email" placeholder="Email" required>
                <input type="text" class="input-field" id="username" name="username" placeholder="Username" required>
                <input type="password" class="input-field" id="password" name="password" placeholder="Password"
                    required>
                <input type="password" class="input-field" id="password2" name="password2"
                    placeholder="Konfirmasi Password" required>
                <input type="checkbox" class="check-box" required><span>Setuju dan Lanjutkan</span>
                <button type="submit" class="submit-btn" id="register" name="register" onclick="">Register</button>
                <p class="link-login">Sudah punya akun? <a href="login.php">Log In</a></p>
            </form>
        </div>
    </div>
    <!--========== End Register ==========-->

    <?php require('views/footer_view.php'); ?>