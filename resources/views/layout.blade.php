<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Investaris Sekolah</title>
	<meta name="description"
		content="NGOO is a clean, modern, and fully responsive HTML Template. it is designed for charity, non-profit, fundraising, donation, volunteer, businesses or any type of person or business who wants to showcase their work, services and professional way.">
	<meta name="keywords"
		content="campaign, cause, charity, donate, donations, event, foundation, fund, fundraising, kids, ngo, non-profit, organization, volunteer">
	<meta name="author" content="rometheme.net">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="/images/logosekolah.png">
	<link rel="apple-touch-icon" href="/images/logosekolah.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/logosekolah.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/logosekolah.png">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- End fonts -->

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ url('css/vendor/bootstrap.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ url('css/vendor/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/vendor/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/vendor/owl.theme.default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/vendor/magnific-popup.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/vendor/animate.min.css')}}">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}" />
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
	<!-- End plugin css for this page -->

	<script src="{{url('js/vendor/modernizr.min.js')}}"></script>	

	<script type="text/javascript">
		let url = '{{ route('cetak.stok') }}';
	</script>

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
	<div class="header header-1">
		<!-- TOPBAR -->
		{{-- <div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-6">
						<p><em>Urgent : Awesome Template for Charity & Non-profit Site</em></p>
					</div>
					<div class="col-sm-5 col-md-6">
						<div class="sosmed-icon pull-right">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<!-- MIDDLE BAR -->
		<div class="middlebar">
			<div class="container">


				<div class="contact-info">
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<a>Sistem Investaris <br>
							SMK NEGERI 1 LENAGGUAR
						</a>
					</div>
				</div>
			</div>
		</div>

		@include('menu')

		<!-- WE NEED YOUR HELP -->
		<div class="section services">
			<div class="content-wrap">
				<div class="container">

					@yield('content')



				</div>
			</div>
		</div>
		<!-- FOOTER SECTION -->


		<!-- JS VENDOR -->
		<script src="{{url('js/vendor/jquery.min.js')}}"></script>
		<script src="{{url('js/vendor/bootstrap.min.js')}}"></script>
		<script src="{{url('js/vendor/owl.carousel.js')}}"></script>
		<script src="{{url('js/vendor/jquery.magnific-popup.min.js')}}"></script>

		<!-- SENDMAIL -->
		<script src="{{url('js/vendor/validator.min.js')}}"></script>
		<script src="{{url('js/vendor/form-scripts.js')}}"></script>

		<!-- Plugin js for this page -->
		<script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
		<script src="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
		<!-- End plugin js for this page -->

		<!-- Custom js for this page -->
		<script src="../../../assets/js/data-table.js"></script>
		<!-- End custom js for this page -->

		<script src="{{url('js/script.js')}}"></script>

</body>

</html>