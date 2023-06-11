<?php

session_start();

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require('functions.php');

if (isset($_POST['login'])) {

    $conn = koneksi();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['gambar'] = $row['gambar'];

            if (isset($_POST['remember'])) {
                setcookie('id', $row['id']);
                setcookie('key', hash('sha256', $row['username']));
            }

            header("Location: ../index.php");
            exit;
        }
    }
    $error = true;
}

?>

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

            <?php if (isset($error)): ?>
                <p>Username atau Password salah</p>
            <?php endif; ?>

            <form id="login" class="input-group-login" action="" method="post">
                <input type="text" class='input-field' id="username" name="username" placeholder="username" required>
                <input type="password" class="input-field" id="password" name="password" placeholder="Password"
                    required>
                <input type="checkbox" class="check-box" id="remember" name="remember"><span>Ingatkan Saya</span>
                <button type="submit" class="submit-btn" name="login" id="login">Log in</button>
                <p class="link-register">Belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>
    <!--========== End Login Form ==========-->

    <?php require('views/footer_view.php'); ?>