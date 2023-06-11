<?php

session_start();

require('../php/functions.php');
$dbusers = query("SELECT * FROM users")[0];

if (isset($_POST['search'])) {
    $dbusers = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM</title>

    <!--========== Link CSS ==========-->
    <link rel="stylesheet" href="../css/style.css">

    <!--========== Link Icons ==========-->
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--========== Navigation Bar ==========-->
    <header>
        <nav>
            <div class="logo-pict">
                <img src="../assets/img/logoputih.png" alt="">
            </div>

            <div class="searchbox">
                <form action="" method="post">
                    <input type="search" id="keyword" name="keyword" autofocus placeholder="Sorry Not Working Yet"
                        autocomplete="off" disabled>
                    <button id="search" name="search" id="search"><i class="fa-solid fa-magnifying-glass"
                            style="color: black;"></i></button>
                </form>
            </div>

            <div class="nav-list"></div>
            <ul>
                <li><a href="../index.php#berita-trending" class="nav-content">Trending</a></li>
                <li><a href="../index.php#recomendation" class="nav-content">Rekomendasi</a></li>
                <li><a href="../index.php#berita-video" class="nav-content">Video</a></li>
                <li><a href="../index.php#random" class="nav-content">For You</a></li><button>
                    <?php if (isset($_SESSION['login'])): ?>
                        <a href="../php/user/account-information-users.php?id=<?= $_SESSION['id'] ?>" class="btnaccif">
                            <img src="../assets/img/<?= $_SESSION['gambar']; ?>" alt=""> <?= $_SESSION['username']; ?></a>
                    <?php else: ?>
                        <a href="login.php">
                            <button class="btn-login">
                                <p>Login</p>
                            </button>
                            <a>
                            <?php endif; ?>
                </button></li>
            </ul>
            </div>

            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>