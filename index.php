<!DOCTYPE html>
<html lang="en" id="home">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	<link rel="stylesheet" href="webroot/v1/libraries/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="webroot/v1/libraries/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="webroot/v1/styles/main.css" />
	<link rel="stylesheet" href="webroot/v1/libraries/OwlCarousel/css/owl.carousel.css" />
	<link rel="stylesheet" href="webroot/v1/libraries/OwlCarousel/css/owl.theme.default.min.css" />
	<link rel="icon" type="image/x-icon" href="https://skiddie.id/webroot/v1/assets/images/favico.ico">
	<title>Skiddie</title>
</head>


<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-skiddie fixed-top">
		<div class="container">
			<a class="navbar-brand" href="/">Skiddie Official</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSkiddie" aria-controls="navbarSkiddie" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSkiddie">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#we-do">What We Do</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects">Project</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about-us">About</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end navbar -->

	<!-- header -->
	<header>
		<div class="container">
			<div class="decoration-one d-lg-block d-none">
				<img src="webroot/v1/assets/images/dot.svg" alt="decoration" draggable="false" />
			</div>
			<div class="row justify-content-center align-content-center">
				<div class="col-lg-7">
					<div class="image-header">
						<img src="/webroot/v1/assets/logo.svg" alt="image-header" class="img-fluid" />
					</div>
				</div>
				<div class="col-lg-5 order-lg-first">
					<div class="text-header text-center text-lg-start">
						<h3>Solution Project</h3>
						<h3>for you</h3>
						<p>
							Skiddie is a information technology service management. We
							provide solutions for exiting problems related to information
							and technology. You can choose what a service you need for your
							bussines.
						</p>
						<!--<a class="btn btn-header" href="https://client.skiddie.id">Login</a>-->
						<!-- <button class="btn btn-header ms-2">Registration</button> -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- main content -->
	<main>
		<section class="section-what-we-do py-4" id="we-do">
			<div class="decoration-two d-lg-block d-none">
				<img src="webroot/v1/assets/images/dot.svg" alt="decoration" draggable="false" />
			</div>
			<div class="container">
				<h4>What We Do</h4>
				<div class="border-custom"></div>

				<div class="row justify-content-center align-content-center">
					<div class="col-md-4 col-sm-6" data-aos="fade-down-right" data-aos-duration="1500">
						<div class="card text-center card-we-do shadow-sm">
							<div class="card-body">
								<div class="image-card">
									<img src="webroot/v1/assets/images/computer.svg" alt="Web Development" draggable="false" />
								</div>
								<h5>Web Development</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-duration="1500">
						<div class="card text-center card-we-do shadow-sm">
							<div class="card-body">
								<div class="image-card">
									<img src="webroot/v1/assets/images/uxui.svg" alt="Web Development" draggable="false" />
								</div>
								<h5>UX/UI Designer</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6" data-aos="fade-down-left" data-aos-duration="1500">
						<div class="card text-center card-we-do shadow-sm">
							<div class="card-body">
								<div class="image-card">
									<img src="webroot/v1/assets/images/it-consulting.svg" alt="Web Development" draggable="false" />
								</div>
								<h5>IT Consulting</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-about-us py-4" id="about-us">
			<div class="container">
				<h4>About Us</h4>
				<div class="border-custom"></div>

				<div class="row justify-content-center align-content-center about-us-row">
					<div class="col-lg-6">
						<div class="image-about">
							<img src="webroot/v1/assets/images/about.svg" alt="About Us" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-6 align-items-center">
						<div class="text-about">
							<p class="text-start">
								We are a team of creative people who are committed to giving a
								solution for your problem related information and technology.
								We are diligent what we do and we do it with passioneries.
							</p>
							<button class="btn btn-about">See Projects</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-projects py-4" id="projects">
			<div class="container">
				<h4>Projects</h4>
				<div class="border-custom"></div>
				<div class="container project-container" data-aos="zoom-in" data-aos-duration="1500">
					<div class="owl-carousel owl-theme">
						<div class="card card-projects bg-transparent border-0">
							<div class="card-body">
								<img src="webroot/v1/assets/images/project1.png" alt="" class="img-fluid" />
								<div class="title-project">
									<h5>Sistem Informasi Warga</h5>
									<span>2021</span>
								</div>
								<div class="description-project">
									<p>
										Membuat sistem untuk warga berbasis website. Dengan fitur
										pendataan warga, pengiriman surat, pengaduan warga dan
										pembayran iuran.
									</p>
								</div>
								<button class="btn btn-project-section">Lihat</button>
							</div>
						</div>
						<div class="card card-projects bg-transparent border-0">
							<div class="card-body">
								<img src="webroot/v1/assets/images/project1.png" alt="" class="img-fluid" />
								<div class="title-project">
									<h5>Sistem Informasi Warga</h5>
									<span>2021</span>
								</div>
								<div class="description-project">
									<p>
										Membuat sistem untuk warga berbasis website. Dengan fitur
										pendataan warga, pengiriman surat, pengaduan warga dan
										pembayran iuran.
									</p>
								</div>
								<button class="btn btn-project-section">Lihat</button>
							</div>
						</div>
						<div class="card card-projects bg-transparent border-0">
							<div class="card-body">
								<img src="webroot/v1/assets/images/project1.png" alt="" class="img-fluid" />
								<div class="title-project">
									<h5>Sistem Informasi Warga</h5>
									<span>2021</span>
								</div>
								<div class="description-project">
									<p>
										Membuat sistem untuk warga berbasis website. Dengan fitur
										pendataan warga, pengiriman surat, pengaduan warga dan
										pembayran iuran.
									</p>
								</div>
								<button class="btn btn-project-section">Lihat</button>
							</div>
						</div>
						<div class="card card-projects bg-transparent border-0">
							<div class="card-body">
								<img src="webroot/v1/assets/images/project1.png" alt="" class="img-fluid" />
								<div class="title-project">
									<h5>Sistem Informasi Warga</h5>
									<span>2021</span>
								</div>
								<div class="description-project">
									<p>
										Membuat sistem untuk warga berbasis website. Dengan fitur
										pendataan warga, pengiriman surat, pengaduan warga dan
										pembayran iuran.
									</p>
								</div>
								<button class="btn btn-project-section">Lihat</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-thanks d-none d-md-block">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-12">
						<img src="webroot/v1/assets/images/thanks.svg" alt="thankscoming" class="img-fluid" draggable="false" />
					</div>
					<div class="col-12">
						<div class="text-thanks">
							<h2>Thank you for visiting</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="container-fluid">
			<div class="justify-content-center text-center align-content-center align-items-center">
				<div class="icon-social-instagram mx-1">
					<a href="#">
						<img src="webroot/v1/assets/images/instagram.svg" alt="instagram" />
					</a>
				</div>
				<div class="icon-social-linked mx-1">
					<a href="#">
						<img src="webroot/v1/assets/images/linkedin.svg" alt="instagram" />
					</a>
				</div>
				<div class="icon-social mx-1">
					<a href="#">
						<img src="webroot/v1/assets/images/facebook.svg" alt="instagram" />
					</a>
				</div>
				<div class="icon-social-gmail mx-1">
					<a href="#">
						<img src="webroot/v1/assets/images/gmail.svg" alt="instagram" />
					</a>
				</div>
				<div class="border-footer"></div>
				&copy; Copyright Skiddie 2022
			</div>
		</div>
	</footer>
	<!-- end main content -->
	<script src="webroot/v1/libraries/jquery/jquery-3.4.1.min.js"></script>
	<script src="webroot/v1/libraries/OwlCarousel/js/owl.carousel.js"></script>
	<script src="webroot/v1/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="libraries/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="webroot/v1/libraries/fontawesome/js/all.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script>
		$(document).ready(function() {
			$(".owl-carousel").owlCarousel({
				stagePadding: 50,
				nav: false,
				loop: true,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: false,
						loop: false,
					},
					770: {
						items: 2,
						nav: false,
						loop: false,
					},
					1000: {
						items: 3,
						nav: false,
						loop: false,
					},
				},
			});
		});
	</script>
	<script src="webroot/v1/script/main.js"></script>
</body>

</html>