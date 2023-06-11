<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SOM | Admin</title>

	<!--========== Link CSS ==========-->
	<link rel="stylesheet" href="../../css/admin.css">
	<!--========== Link Icons ==========-->
	<script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

	<!--========== Side Bar ==========-->
	<div class="sidebar">
		<div class="logo-details">
			<img src="../../assets/img/logohitam.png" alt="" class="logo">
			<div class="logo_name">Sense Of Mip</div>
			<i class="fa-solid fa-bars" id="btn"></i>
		</div>

		<ul class="nav-list">
			<li id="btn-dash">
				<a href="#dashboard" class="link-list">
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
				<a href="#setting" class="link-list">
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

	<!--========== Dashboard ==========-->
	<section class="dashboard_content" id="dashboard">
		<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ullam.</h1>
	</section>



	<!--========== End Content ==========-->

	<!-- setting -->
	<section class="setting-content" id="setting">
		<h1>setting</h1>
	</section>
	<!-- setting end -->

	<!--========== Link JQuery ==========-->
	<script src="../../js/code.jquery.com_jquery-3.7.0.min.js"></script>
	<!--========== Link Javascript ==========-->
	<script src="../../js/dashboard.js"></script>
</body>

</html>