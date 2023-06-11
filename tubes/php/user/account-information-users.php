<?php

session_start();

require('../functions.php');

$id = $_SESSION['id'];

$dbusers = query("SELECT * FROM users WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM | Informasi Akun</title>
    <link rel="stylesheet" href="../../css/account-information.css">
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <nav>
            <div class="back">
                <a href="../../index.php?<?= $_SESSION['id'] ?>"><i class="fa-solid fa-arrow-left-long"></a></i>
            </div>
            <div class="title">
                <h1>Informasi Akun</h1>
            </div>
        </nav>

        <section class="photo-profile">
            <div class="pp-container">
                <?php if (isset($_SESSION['login'])): ?>
                    <img src="../../assets/img/<?= $dbusers['gambar']; ?>" alt="">
                <?php else: ?>
                    <img src="../../assets/img/dummy.jpg" alt="">
                <?php endif; ?>
            </div>
            <div class="pp-edit">
                <a href="ubah-foto.php?id=<?= $dbusers['id']; ?>">
                    <i class="fa-solid fa-pen"></i>
                    <p>Ganti Foto Profil</p>
                </a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="email">
                    <a href="ubah-email.php?id=<?= $dbusers['id']; ?>" name="email" id="email">
                        <h2>Email</h2>
                        <p>
                            <?= $dbusers['email']; ?>
                        </p>
                    </a>
                </div>
                <div class="username">
                    <a href="ubah-username.php?id=<?= $dbusers['id']; ?>" name="username" id="username">
                        <h2>Username</h2>
                        <p>
                            <?= $dbusers['username']; ?>
                        </p>
                    </a>
                </div>
                <div class="password">
                    <a href="ubah-password.php?id=<?= $dbusers['id']; ?>" name="password" id="password">
                        <h2>Password</h2>
                    </a>
                </div>
            </div>
        </section>

        <section class="logout">
            <h1><a href="../logout.php">Logout</a></h1>
        </section>
    </form>
</body>

</html>