<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM | LogIn</title>

<!--========== Link CSS ==========-->
    <link rel="stylesheet" href="../css/login.css">

<!--========== Link Icons ==========-->
<script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

<!--========== Login Form ==========-->
    <div id="login-form" class="login-page">
        <div class="form-box">
            <h2>Log In</h2>
            <form id="login" class="input-group-login" action="" method="post">
                <input type="text" class='input-field' placeholder="Email" required >
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Ingatkan Saya</span>
                <button type="submit" class="submit-btn">Log in</button>
                <p class="link-register">Belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>
<!--========== End Login Form ==========-->

<?php require('../views/footer_view.php'); ?>