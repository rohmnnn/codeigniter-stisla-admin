<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Admin Dashboard &mdash; Stisla</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/ionicons201/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/izitoast/dist/css/iziToast.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/izitoast/dist/css/iziToast.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/weathericons/css/weather-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/weathericons/css/weather-icons-wind.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/flag-icon-css/css/flag-icon.min.css">




	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/summernote/dist/summernote-bs4.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
</head>

<body style="margin-top: 4px;">
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
					</ul>
					<div class="search-element">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
						<div class="search-backdrop"></div>
						<div class="search-result">
							<div class="search-header">
								Histories
							</div>
							<div class="search-item">
								<a href="#">How to hack NASA using CSS</a>
								<a href="#" class="search-close"><i class="fas fa-times"></i></a>
							</div>
						</div>
					</div>
				</form>

				<ul class="navbar-nav navbar-right">
					<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Notifications
								<div class="float-right">
									<a href="#">Mark All As Read</a>
								</div>
							</div>
							<div class="dropdown-list-content dropdown-list-icons">
								<a href="#" class="dropdown-item dropdown-item-unread">
									<div class="dropdown-item-icon bg-primary text-white">
										<i class="fas fa-code"></i>
									</div>
									<div class="dropdown-item-desc">
										Template update is available now!
										<div class="time text-primary">2 Min Ago</div>
									</div>
								</a>
							</div>
							<div class="dropdown-footer text-center">
								<a href="#">View All <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</li>
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
							<div class="d-sm-none d-lg-inline-block"><?php echo $this->session->userdata('name'); ?></div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-title">Admin</div>
							<a href="features-profile.html" class="dropdown-item has-icon">
								<i class="far fa-user"></i> Profile
							</a>
							<a href="features-settings.html" class="dropdown-item has-icon">
								<i class="fas fa-cog"></i> Settings
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?php echo base_url(); ?>/login/logout" class="dropdown-item has-icon text-danger">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<a href="#">Stisla</a>
					</div>
					<div class="sidebar-brand sidebar-brand-sm">
						<a href="#">St</a>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Dashboard</li>
						<li><a class="nav-link" href="<?php echo base_url(); ?>/dashboard/"><i class="fa fa-fire"></i><span>Dashboard</span></a></li>
						<li class="menu-header">Menu</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-user"></i><span>User</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url(); ?>/dashboard/user">Data User</a></li>
								<li><a class="nav-link" href="<?php echo base_url(); ?>/dashboard/add">Add User</a></li>
							</ul>
						</li>
					</ul>
				</aside>
			</div>

			<!-- Main Content -->
			<?= $stisla; ?>
			<!-- End -->

			<footer class="main-footer">
				<div class="footer-left">
				Copyright &copy; Stisla 2018
				</div>
				<div class="footer-right">
					2.3.0
				</div>
			</footer>
		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

	<!-- JS Libraies -->
	<script src="<?php echo base_url(); ?>node_modules/chart.js/dist/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/izitoast/dist/js/iziToast.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/izitoast/dist/js/iziToast.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="<?php echo base_url(); ?>node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>


	<script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
	<script src="<?php echo base_url(); ?>node_modules/gmaps/gmaps.min.js"></script>

	<!-- Template JS File -->
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

	<!-- Page Specific JS File -->
	<script src="<?php echo base_url(); ?>assets/js/page/modules-ion-icons.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/modules-sparkline.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/modules-sweetalert.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/modules-toastr.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/modules-vector-map.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/utilities-contact.js"></script>




</body>

</html>