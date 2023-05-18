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
        <form id="register" class="input-group-register" action="" method="post">
            <input type="text" class="input-field" placeholder="Nama Depan" required>
            <input type="text" class="input-field" placeholder="Nama Belakang" required>
            <input type="email" class="input-field" placeholder="Email" required>
            <input type="password" class="input-field" placeholder="Password" required>
            <input type="password" class="input-field" placeholder="Konfirmasi Password" required>
            <input type="checkbox" class="check-box"><span>Setuju dan Lanjutkan</span>
            <button type="submit" class="submit-btn">Register</button>
            <p class="link-login">Sudah punya akun? <a href="login.php">Log In</a></p>
        </form>
    </div>
</div>
<!--========== End Register ==========-->

<?php require('../views/footer_view.php'); ?>