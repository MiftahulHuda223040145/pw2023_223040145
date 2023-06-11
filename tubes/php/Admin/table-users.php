<?php
require('../functions.php');

$dbusers = query("SELECT * FROM users");

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
    <link rel="stylesheet" href="../../css/admin.css">
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
    <title>SOM | Data Users</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="../../assets/img/logohitam.png" alt="" class="logo">
            <div class="logo_name">Sense Of Mip</div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>

        <ul class="nav-list">
            <li id="btn-dash">
                <a href="admin.php" class="link-list">
                    <i class="fa-solid fa-table-columns"></i>
                    <span class="list_name">Dashboard</span>
                </a>

            </li>
            <li id="btn-users">
                <a href="table-users.php" class="link-list">
                    <i class="fa-solid fa-users"></i>
                    <span class="list_name">Users</span>
                </a>
            </li>
            <li id="btn-setting">
                <a href="table-users.php" class="link-list">
                    <i class="fa-solid fa-gear"></i>
                    <span class="list_name">Setting</span>
                </a>
            </li>

            <li class="profile">
                <a href="" class="link-profile">
                    <div class="profile-details">
                        <img src="../../assets/img/profile.jpg" alt="">
                        <div class="name_desc">
                            <div class="name">Admin</div>
                            <div class="desc">Lorem Ipsum</div>
                        </div>
                    </div>
                </a>
                <a href="" class="link-logout">
                    <i class="fa-solid fa-right-from-bracket" id="log_out"></i>
                </a>
            </li>
        </ul>
    </div>
    <!--========== End Side Bar ==========-->

    <section class="title-user">
        <h1>Data User</h1>
    </section>

    <section class="users_content" id="users">
        <div class="users_container">
            <div class="users_search">
                <div class="users_searchcontent">
                    <form class="form-search" action="" method="post">
                        <h2>Cari User</h2>
                        <input type="text" id="keyword" name="keyword" autofocus placeholder="Cari" autocomplete="off">
                        <button type="submit" id="search" name="search"><i class="fa-solid fa-magnifying-glass"
                                style="color: white;"></i></button>
                    </form>
                    <div class="tambah-data">
                        <a href="add-data.php"><i class="fa-solid fa-user-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="table">
                <div class="users_table" id="table">
                    <?php if ($dbusers): ?>
                        <table border="1" cellspacing="0">
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Foto Profil</th>
                                <th>Aksi</th>
                            </tr>
                            <?php $no = 1; ?>
                            <?php foreach ($dbusers as $users): ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td>
                                        <?= $users['username']; ?>
                                    </td>
                                    <td>
                                        <?= $users['email']; ?>
                                    </td>
                                    <td class="pass">
                                        <?= $users['password']; ?>
                                    </td>
                                    <td>
                                        <img src="../../assets/img/<?= $users['gambar']; ?>" alt="">
                                    </td>
                                    <td><a href="account-information-dashboard.php?id=<?= $users['id']; ?>"
                                            onclick=" return confirm ('apakah yakin ingin mengubah datanya?');"><i
                                                class="fa-solid fa-gear" id="users_gear"></i></a>
                                        <a href="delete-data.php?id=<?= $users['id']; ?>"
                                            onclick=" return confirm ('apakah yakin ingin menghapus datanya?');">
                                            <i class="fa-solid fa-trash" id="users_trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach ?>
                        </table>
                    <?php endif; ?>
                </div>
                <div>
                </div>
    </section>

    <!--========== Link Javascript ==========-->
    <script src="../../js/dashboard.js"></script>
</body>

</html>