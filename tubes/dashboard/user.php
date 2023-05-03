<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User</title>

<!--========== Link CSS ==========-->
    <link rel="stylesheet" href="user.css"> 
<!--========== Link Icons ==========-->
	<script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

<!--========== Side Bar ==========-->
  	<div class="sidebar">
		<div class="logo-details">
		<img src=".././assets/img/logohitam.png" alt="" class="logo">
			<div class="logo_name">Sense Of Mip</div>
			<i class="fa-solid fa-bars" id="btn"></i>
		</div>

		<ul class="nav-list">
			<li>
				<i class="fa-solid fa-magnifying-glass"></i>
				<input type="text" placeholder="Search...">
			</li>
			<li>
				<a href="#" class="link-list">
					<i class="fa-solid fa-table-columns"></i>
					<span class="list_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#" class="link-list">
					<i class="fa-solid fa-gear"></i>
					<span class="list_name">Setting</span>
				</a>
			</li>

			<li class="profile">
				<a href="" class="link-profile">
					<div class="profile-details">
						<img src=".././assets/img/profile.jpg" alt="">
						<div class="name_desc">
							<div class="name">User</div>
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
  	<section class="content">
		<h1></h1>
  	</section>
<!--========== End Content ==========-->

<!--========== Link Javascript ==========-->
	<script src="dashboard.js"></script>
</body>
</html>
