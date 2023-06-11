<?php

require('../functions.php');

if (isset($_POST['add'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
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
    <title>SOM | Add Data</title>
    <link rel="stylesheet" href="../../css/add-data.css">
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="add-form" class="add-page">
        <div class="form-box">
            <h2>Add Data</h2>
            <form id="add" class="input-group-add" action="" method="post">
                <input type="email" class="input-field" id="email" name="email" placeholder="Email" required>
                <input type="text" class="input-field" id="username" name="username" placeholder="Username" required>
                <input type="password" class="input-field" id="password" name="password" placeholder="Password"
                    required>
                <input type="password" class="input-field" id="password2" name="password2"
                    placeholder="Konfirmasi Password" required>
                <button type="submit" class="submit-btn" name="add" id="add">Add</button>
                <a href="table-users.php" class="back-btn"><i class="fa-solid fa-arrow-left-long"></a></i>
            </form>
        </div>
    </div>
</body>

</html>