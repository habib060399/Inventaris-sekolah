<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords"
		content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Inventaris Sekolah</title>

	<link rel="stylesheet" href="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../../../asset/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="../../../asset/vendors/cropperjs/cropper.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../../../asset/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../asset/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

	<!-- Layout styles -->
	<link rel="stylesheet" href="../../../asset/css/demo3/style.css">
	<!-- End layout styles -->

	<link rel="shortcut icon" href="/images/logosekolah.png" />

	<link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_navbar.html -->
		<div class="horizontal-menu">
			<nav class="navbar top-navbar">
				<div class="container">
					<div class="navbar-content">
						<a href="#" class="navbar-brand">
							{{-- Noble<span>UI</span> --}}
							<img class="navbar-brand" width="50" height="50" src="/images/logosekolah.png" alt="">
						</a>
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
									data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
										alt="profile">
								</a>
								<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
									<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
										<div class="mb-3">
											<img class="wd-80 ht-80 rounded-circle"
												src="https://via.placeholder.com/80x80" alt="">
										</div>
										<div class="text-center">
											<p class="tx-16 fw-bolder">{{ $nama }}</p>
											<p class="tx-12 text-muted">amiahburton@gmail.com</p>
										</div>
									</div>
									<ul class="list-unstyled p-1">
										<li class="dropdown-item py-2">
											<a href="/logout" class="text-body ms-0">
												<i class="me-2 icon-md" data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
						<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
							data-toggle="horizontal-menu-toggle">
							<i data-feather="menu"></i>
						</button>
					</div>
				</div>
			</nav>
			@include('user.menu')
		</div>
		<!-- partial -->

		<div class="page-wrapper">

			<div class="page-content">
				@yield('content')
			</div>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer border-top">
				<div
					class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
					<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="http://smkn1lenangguar.my.id"
							target="_blank">SMKN 1 Lenangguar</a>.</p>
					<p class="text-muted"> <i class="mb-1 text-primary ms-1 icon-sm"
							data-feather="heart"></i></p>
				</div>
			</footer>
			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="../../../asset/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<script src="../../../asset/vendors/cropperjs/cropper.min.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="../../../asset/vendors/feather-icons/feather.min.js"></script>
	<script src="../../../asset/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<script src="../../../asset/js/cropper.js"></script>
	<!-- End custom js for this page -->

	<!-- Plugin js for this page -->
	<script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
	<script src="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../../../assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<script src="../../../assets/js/data-table.js"></script>
	<!-- End custom js for this page -->
	<script src="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="../../../assets/js/datepicker.js"></script>
</body>

</html>