<?php 
require ('functions.php');
$dbusers = query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SOM | Admin</title>

<!--========== Link CSS ==========-->
    <link rel="stylesheet" href="../css/admin.css"> 
<!--========== Link Icons ==========-->
	<script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

<!--========== Side Bar ==========-->
  	<div class="sidebar">
		<div class="logo-details">
		<img src="../assets/img/logohitam.png" alt="" class="logo">
			<div class="logo_name">Sense Of Mip</div>
			<i class="fa-solid fa-bars" id="btn"></i>
		</div>

		<ul class="nav-list">
			<li>
				<i class="fa-solid fa-magnifying-glass"></i>
				<input type="text" placeholder="Search...">
			</li>
			<li onclick="dash" id="btn-dash">
				<a href="#" class="link-list">
					<i class="fa-solid fa-table-columns"></i>
					<span class="list_name">Dashboard</span>
				</a>
			</li>
			<li onclick="userss" id="btn-users">
				<a href="#users" class="link-list">
					<i class="fa-solid fa-users"></i>
					<span class="list_name">Users</span>
				</a>
			</li>
			<li>
				<a href="" class="link-list">
					<i class="fa-solid fa-gear"></i>
					<span class="list_name">Setting</span>
				</a>
			</li>

			<li class="profile">
				<a href="" class="link-profile">
					<div class="profile-details">
						<img src=".././assets/img/profile.jpg" alt="">
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

<!--========== Content ==========-->
	<section class="hero">
	</section>

	<section class="dashboard_content" id="dashboard">
		<h1>dashboard</h1>
	</section>

  	<section class="users_content" id="users">
		  <div class="users_container">
			<div class="users_search">
				<div class="users_searchcontent">
					<h2>Cari User</h2>
					<input type="search" placeholder="Cari">
					<button id="search"><i class="fa-solid fa-magnifying-glass" style="color: white;"></i></button>
				</div>
			</div>

			<div class="users_table">
				<table border="1" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Password</th>
						<th>Aksi</th>
					</tr>
					<?php $no = 1; ?>
					<?php foreach ($dbusers as $users) { ?>
					<tr>
						<td><?= $users ["No"]; ?></td>
						<td><?= $users ["Nama"]; ?></td>
						<td><?= $users ["Email"]; ?></td>
						<td><?= $users ["Password"]; ?></td>
						<td><a href=""><i class="fa-solid fa-gear" id="users_gear"></i></a>
						<a href=""><i class="fa-solid fa-trash" id="users_trash"></i></a></td>
					</tr>
					<?php $no++; ?>
					<?php } ?>
				</table>
			</div>
		</div>
  	</section>

<!--========== End Content ==========-->

<!--========== Link Javascript ==========-->
	<script src="../js/dashboard.js"></script>
</body>
</html>
