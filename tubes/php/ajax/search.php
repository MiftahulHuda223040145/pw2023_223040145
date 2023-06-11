<?php

require('../functions.php');

$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
                users 
            WHERE 
                email LIKE '%$keyword%' OR
                username LIKE '%$keyword%' OR
                password LIKE '%$keyword%'";
$dbusers = query($query);

if (isset($_POST['search'])) {
    $dbusers = pencarian($_POST['keyword']);
}

?>
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
                    <td><a href="../admin/account-information-dashboard.php?id=<?= $users['id']; ?>"
                            onclick=" return confirm ('apakah yakin ingin mengubah datanya?');"><i class="fa-solid fa-gear"
                                id="users_gear"></i></a>
                        <a href="../admin/delete-data.php?id=<?= $users['id']; ?>"
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