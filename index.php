<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?PHP require 'headerlink.php' ?>
    <title>Home Dashboard</title>
</head>
<body>
     <!--SIDE BAR-->
<section id="sidebar">
		<a href="index.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>

		<ul class="side-menu top">
			<li >
				<a  href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text home">Dashboard</span>
				</a>
			</li>
			<li >
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">New Registry</span>
				</a>
			</li>
			
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span id="na" class="text" >New Appointment</span>
				</a>
			</li>
			<li >
				<a  href="#">
					<i class='bx bxs-message-dots' ></i>
					<span id="ds" class="text">Summary Report</span>
				</a>
			</li>
			<li class="active">
				<a  href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">New User</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
  <!--end of sidebar-->
<section id="content">
		<!-- NAVBAR -->
		<nav id="navID">
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" id="idSearch" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="user1-br.png">
			</a>
		</nav>
		<!-- NAVBAR -->

        <?php require 'user.php' ?>
</body>
</html>