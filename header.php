<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>St. Francis De Sales School, Burburia</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/Lijeesh Logo.png">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Castellar&display=swap" rel="stylesheet">

	<!-- Eduland Stylesheet -->
	<link rel="stylesheet" href="css/normalize.css">

	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/niceselect.css">
	<!-- Fancy Box CSS -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Fancy Box CSS -->
	<link rel="stylesheet" href="css/cube-portfolio.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- Slick Nav CSS -->
	<link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	

	<!-- Eduland Colors -->
	<link rel="stylesheet" href="css/colors/color1.css">

	<!-- Font Awesome 6 CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>


	<link rel="stylesheet" href="style.css?v=1.0">

	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

	<style>
		/* General Styles */
		body {
			background: #f4f1eb;
			overflow-x: hidden;
			font-family: 'Roboto', sans-serif;
		}

		/* Header Styles */
		.header-top {
			background: linear-gradient(45deg, #ffc107ba, transparent);
			padding: 10px 0;
		}

		.school-logo {
			height: 100px;
			width: auto;
			transition: transform 0.3s ease;
			max-width: 100%;
		}

		.school-title-address {
			font-family: 'Castellar', serif;
			transition: transform 0.3s ease;
			text-align: center;
			flex-grow: 1;
			padding: 0 15px;
		}

		.school-name, 
		.school-address {
			font-size: 32px;
			font-weight: 700;
			color: #000;
			margin: 0;
			transition: font-size 0.3s ease;
			display: block;
		}

		.school-address {
			font-size: 28px;
		}

		.desalite-logo img {
			height: 80px;
			width: auto;
			max-width: 160px;
			transition: transform 0.3s ease;
		}

		.logo-left, 
		.logo-right {
			display: flex;
			align-items: center;
		}

		.d-flex {
			display: flex !important;
			flex-wrap: wrap;
		}

		.align-items-center {
			align-items: center !important;
		}

		.justify-content-between {
			justify-content: space-between !important;
		}

		/* Navigation Styles */
		.navbar-area {
			background: #fff;
			width: 100%;
			position: relative;
		}

		.navbar-area .container {
			position: relative;
			left: -100px;
			transition: left 0.3s ease;
		}

		#nav {
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: flex-start;
			flex-wrap: wrap;
		}

		#nav > li {
			margin: 0 15px;
			position: relative;
		}

		#nav > li > a {
			padding: 8px 18px;
			color: #333;
			font-weight: bold;
			display: block;
			transition: all 0.3s ease;
			font-size: 14px;
			line-height: 1.5;
		}

		#nav > li > a:hover,
		#nav > li.active > a {
			background-color: #1b67b9;
			color: #fff;
		}

		/* Dropdown Styles */
		.dropdown {
			/* position: absolute; */
			background: #fff;
			min-width: 200px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
			display: none;
			z-index: 1000;
			top: 100%;
			left: 0;
			border-radius: 4px;
			overflow: hidden;
		}

		#nav > li:hover > .dropdown {
			display: block;
		}

		.dropdown li a {
			padding: 8px 15px;
			display: block;
			color: #333;
			transition: all 0.3s ease;
		}

		.dropdown li a:hover {
			background-color: #1b67b9;
			color: #fff !important;
		}

		/* Mobile Menu Styles */
		.hamburger-menu {
			display: none;
			background: none;
			border: none;
			cursor: pointer;
			padding: 10px;
			margin-left: 10px;
			z-index: 1002;
		}

		.hamburger-menu span {
			display: block;
			width: 25px;
			height: 2px;
			background: #333;
			margin: 5px 0;
			transition: 0.3s;
		}

		.mobile-menu {
			display: none;
		}

		/* Hover Effects */
		.logo:hover .school-logo {
			transform: scale(1.05);
		}

		.logo:hover .school-title-address {
			transform: translateX(5px);
		}

		.desalite-logo:hover img {
			transform: scale(1.05);
		}

		/* Responsive Styles */
		@media (max-width: 1400px) {
			.navbar-area .container {
				left: -80px;
			}
		}

		@media (max-width: 1200px) {
			.navbar-area .container {
				left: -60px;
			}
			.school-name, 
			.school-address {
				font-size: 22px;
			}
			#nav > li {
				margin: 0 8px;
			}
			#nav > li > a {
				font-size: 14px;
				padding: 8px 12px;
			}
			.navbar-area {
				padding: 0 15px;
			}
		}

		@media (max-width: 991px) {
			.navbar-area .container {
				left: 0;
			}
			.header-top {
				text-align: center;
				padding: 10px 0;
			}
			
			.school-logo {
				height: 80px;
			}
			
			.school-name {
				font-size: 24px;
			}
			
			.school-address {
				font-size: 20px;
			}
			
			.desalite-logo img {
				height: 60px;
			}
			
			.navbar-area {
				display: none;
			}
			
			.hamburger-menu {
				display: block;
			}
		}

		@media (max-width: 768px) {
			.header-top .container {
				padding: 0 10px;
			}
			
			.school-logo {
				height: 60px;
			}
			
			.school-name {
				font-size: 20px;
			}
			
			.school-address {
				font-size: 16px;
			}
			
			.desalite-logo img {
				height: 50px;
			}
		}

		@media (max-width: 576px) {
			.header-top {
				padding: 5px 0;
			}
			
			.school-logo {
				height: 50px;
			}
			
			.school-name {
				font-size: 16px;
			}
			
			.school-address {
				font-size: 14px;
			}
			
			.desalite-logo img {
				height: 40px;
			}
			
			.logo-right .desalite-logo {
				display: none;
			}
		}

		/* Update mobile menu text sizes */
		.slicknav_nav a {
			font-size: 16px;
		}

		.slicknav_nav .dropdown li a {
			font-size: 14px;
		}

		@media (max-width: 576px) {
			.slicknav_nav a {
				font-size: 14px;
			}
			.slicknav_nav .dropdown li a {
				font-size: 13px;
			}
		}

		/* Custom Sidebar Styles */
		.sidebar {
			position: fixed;
			top: 0;
			right: -300px;
			width: 300px;
			height: 100vh;
			background: linear-gradient(135deg, #1a2a6c, #b21f1f);
			z-index: 1000;
			transition: 0.3s ease-in-out;
			padding: 20px;
			overflow-y: auto;
			box-shadow: -5px 0 15px rgba(0,0,0,0.2);
		}

		.sidebar.active {
			right: 0;
		}

		.sidebar-header {
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding-bottom: 20px;
			border-bottom: 1px solid rgba(255,255,255,0.1);
			margin-bottom: 20px;
		}

		.sidebar-logo img {
			height: 50px;
			width: auto;
		}

		.close-sidebar {
			background: none;
			border: none;
			color: white;
			font-size: 24px;
			cursor: pointer;
			padding: 5px;
		}

		.sidebar-menu {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.sidebar-menu li {
			margin-bottom: 5px;
		}

		.sidebar-menu a {
			color: white;
			text-decoration: none;
			display: block;
			padding: 10px 15px;
			border-radius: 5px;
			transition: 0.3s;
			font-size: 15px;
			position: relative;
		}

		.sidebar-menu a:hover {
			background: rgba(255,255,255,0.1);
			transform: translateX(5px);
		}

		.sidebar-menu .has-dropdown > a::after {
			content: '+';
			position: absolute;
			right: 15px;
			top: 50%;
			transform: translateY(-50%);
		}

		.sidebar-menu .dropdown {
			display: none;
			padding-left: 15px;
			margin-top: 5px;
		}

		.sidebar-menu .dropdown.show {
			display: block;
		}

		.overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,0.5);
			opacity: 0;
			visibility: hidden;
			transition: 0.3s;
			z-index: 999;
		}

		.overlay.active {
			opacity: 1;
			visibility: visible;
		}

		@media (max-width: 991px) {
			.navbar-area {
				display: none;
			}

			.hamburger-menu {
				display: block !important;
			}
		}

		@media (max-width: 576px) {
			.sidebar {
				width: 280px;
			}

			.sidebar-menu a {
				font-size: 14px;
				padding: 8px 12px;
			}

			.sidebar-logo img {
				height: 40px;
			}
		}

		/* Animation for hamburger menu */
		.hamburger-menu.active span:nth-child(1) {
			transform: rotate(45deg) translate(5px, 5px);
		}

		.hamburger-menu.active span:nth-child(2) {
			opacity: 0;
		}

		.hamburger-menu.active span:nth-child(3) {
			transform: rotate(-45deg) translate(5px, -5px);
		}

		.navigation li a.active,
		#nav > li > a.active,
		.slicknav_nav a.active {
			color: #007BFF !important; /* Blue color */
			background-color: #e6f0ff !important; /* Optional: light blue background */
			font-weight: bold;
		}
	</style>

</head>

<body>

	<!-- Header -->
	<header class="header">
		<!-- Header Top -->
		<div class="header-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="d-flex align-items-center justify-content-between">
          <!-- Left Logo -->
          <div class="logo-left">
            <a href="/" class="logo">
              <img src="images/logo12.png" alt="School Logo" class="school-logo">
            </a>
          </div>

          <!-- Center School Name and Address -->
          <div class="school-title-address">
            <span class="school-name d-block">ST. FRANCIS DE SALES SCHOOL</span>
            <span class="school-address d-block">Burburia, Tripura</span>
          </div>

          <!-- Right Logo and Hamburger -->
          <div class="logo-right d-flex align-items-center">
            <a href="https://ed.sfsburburia.in/" class="desalite-logo" target="_blank">
              <img src="images/school_img/desalite_connect.png" alt="Desalite Logo">
            </a>
            <button class="hamburger-menu d-lg-none">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* .header-top {
    
    padding: 1rem 0;
  } */
  <style>
    .navigation li a.active {
      color: #007BFF !important; /* Blue color */
    }
  


  .school-title-address {
    text-align: center;
    flex-grow: 1;
  }

  .school-name {
    font-size: 2.4rem;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
  }

  .school-address {
    font-size: 2rem;
    color: #111;
  }

  .school-logo {
    max-width: 100%;
    height: 139px;
  }

  .desalite-logo img {
    /* max-width: 80px; */
    height: 100px;
  }

  .logo-left, .logo-right {
    display: flex;
    align-items: center;
  }

  .hamburger-menu {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 20px;
    background: none;
    border: none;
    cursor: pointer;
  }

  .hamburger-menu span {
    display: block;
    width: 100%;
    height: 3px;
    background: #333;
  }

  @media (max-width: 768px) {
    .school-name {
      font-size: 1.2rem;
    }

    .school-address {
      font-size: 0.8rem;
    }

    .school-logo, .desalite-logo img {
      max-width: 60px;
    }

    .hamburger-menu {
      display: flex;
    }

    .logo-right .desalite-logo {
      display: none;
    }
  }
</style>
		<!--/ End Header Top -->

		<!-- Desktop Navigation -->
		<div class="navbar-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="mobile-menu"></div>
						<nav class="navbar navbar-expand-lg navbar-light p-0">
							<div id="navbarSupportedContent" class="w-100">
								<ul id="nav" class="nav menu navbar-nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="about-us.php">Who we are</a>
										<ul class="dropdown">
											<li><a href="about-us.php">About Us</a></li>
											<li><a href="principals-desk.php">Principals Desk</a></li>
										</ul>
									</li>
									<li><a href="academic-overview.php">Academic</a>
										<ul class="dropdown">
											<li><a href="academic-overview.php">Academic Overview</a></li>
											<li><a href="facilities-&-services.php">Facilities & Services</a></li>
											<li><a href="upcoming-events-information.php">Upcoming Events and Infornations</a></li>
										</ul>
									</li>
									<li><a href="admission-process.php">Admission</a>
										<ul class="dropdown">
											<li><a href="admission-process.php">Admission Process</a></li>
										</ul>
									</li>										
									<li><a href="photo-gallery.php">Gallery</a>
										<ul class="dropdown">
											<li><a href="photo-gallery.php">Photo</a></li>
											<li><a href="video.php">Video</a></li>
										</ul>
									</li>										
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</nav>
					</div>	
				</div>
			</div>
		</div>
		<!--/ End Navigation Menu -->

		<!-- Mobile Sidebar -->
		<div class="sidebar">
			<div class="sidebar-header">
				<div class="sidebar-logo">
					<img src="images/logo12.png" alt="School Logo">
				</div>
				<button class="close-sidebar">×</button>
			</div>
			<ul class="sidebar-menu">
				<li><a href="index.php">Home</a></li>
				<li class="has-dropdown">
					<a href="#">Who we are</a>
					<ul class="dropdown">
						<li><a href="about-us.php">About Us</a></li>
						<li><a href="principals-desk.php">Principals Desk</a></li>
					</ul>
				</li>
				<li class="has-dropdown">
					<a href="#">Academic</a>
					<ul class="dropdown">
						<li><a href="academic-overview.php">Academic Overview</a></li>
						<li><a href="facilities-&-services.php">Facilities & Services</a></li>
						<li><a href="upcoming-events-information.php">Upcoming Events and Infornations</a></li>
					</ul>
				</li>
				<li class="has-dropdown">
					<a href="#">Admission</a>
					<ul class="dropdown">
						<li><a href="admission-process.php">Admission Process</a></li>
					</ul>
				</li>
				<li class="has-dropdown">
					<a href="#">Gallery</a>
					<ul class="dropdown">
						<li><a href="photo-gallery.php">Photo</a></li>
						<li><a href="video.php">Video</a></li>
					</ul>
				</li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="overlay"></div>
	</header>

	<!-- Jquery JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/niceselect.js"></script>
	<!-- Cube Portfolio JS -->
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Fancybox of JS -->
	<script src="js/jquery.fancybox.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.min.js"></script>
	<!-- Slick Nav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Counterup JS -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Animate JS -->
	<script src="js/animate.min.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>

	<!-- <script>
		$(document).ready(function(){
			$('#nav').slicknav({
				prependTo: '.mobile-menu',
				closeOnClick: true
			});
		});
	</script> -->

<script>
    // Highlight active menu item for both desktop and mobile menus
    document.addEventListener('DOMContentLoaded', function() {
        var currentPage = window.location.pathname.split('/').pop();
        if (!currentPage) currentPage = 'index.php'; // Default to index.php if root

        // Desktop menu
        document.querySelectorAll('#nav > li > a').forEach(function(link) {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });

        // Mobile menu (SlickNav)
        document.querySelectorAll('.slicknav_nav a').forEach(function(link) {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });
  </script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const hamburger = document.querySelector('.hamburger-menu');
			const sidebar = document.querySelector('.sidebar');
			const overlay = document.querySelector('.overlay');
			const closeBtn = document.querySelector('.close-sidebar');
			const body = document.body;

			function toggleSidebar() {
				sidebar.classList.toggle('active');
				overlay.classList.toggle('active');
				hamburger.classList.toggle('active');
				body.style.overflow = body.style.overflow === 'hidden' ? '' : 'hidden';
			}

			function closeSidebar() {
				sidebar.classList.remove('active');
				overlay.classList.remove('active');
				hamburger.classList.remove('active');
				body.style.overflow = '';
			}

			hamburger.addEventListener('click', toggleSidebar);
			closeBtn.addEventListener('click', closeSidebar);
			overlay.addEventListener('click', closeSidebar);

			// Event delegation for sidebar dropdowns
			const sidebarMenu = document.querySelector('.sidebar-menu');
			if (sidebarMenu) {
				sidebarMenu.addEventListener('click', function(e) {
					const target = e.target;
					if (target.matches('.has-dropdown > a')) {
						e.preventDefault();
						const dropdown = target.nextElementSibling;
						if (!dropdown) return;

						// Close all other dropdowns
						document.querySelectorAll('.sidebar-menu .dropdown.show').forEach(d => {
							if (d !== dropdown) {
								d.classList.remove('show');
								d.previousElementSibling.classList.remove('active');
							}
						});

						// Toggle current dropdown
						dropdown.classList.toggle('show');
						target.classList.toggle('active');
					}
				});
			}

			// Close sidebar on window resize if open
			window.addEventListener('resize', function() {
				if (window.innerWidth > 991 && sidebar.classList.contains('active')) {
					closeSidebar();
				}
			});

			// Close sidebar when clicking outside
			document.addEventListener('click', function(e) {
				if (!sidebar.contains(e.target) && 
					!hamburger.contains(e.target) && 
					sidebar.classList.contains('active')) {
					closeSidebar();
				}
			});
		});
	</script>

</body>
</html>