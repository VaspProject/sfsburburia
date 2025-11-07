<?php
include 'master/header.php';
?>

<style>
	.disc>ul {
		list-style-type: disc !important;
	}

	.box ul {
		list-style-type: none;
		padding-left: 0;
		margin: 0;
	}

	.box ul li {
		color: #1D556F;
		/* margin-bottom: 15px;
	line-height: 1.6; */
		position: relative;
		padding-left: 25px;
	}

	.box ul li:before {
		content: "•";
		color: #288FB4;
		font-size: 1.5em;
		position: absolute;
		left: 0;
		top: -2px;
	}

	.box ul li strong {
		color: #288FB4;
		display: block;
		margin-bottom: 5px;
	}

	/* New styles for principal image */
	.principal-image-container {
		text-align: center;
		margin-bottom: 2rem;
		overflow: hidden;
		border-radius: 10px;
	}

	.principal-image {
		max-width: 557px;
		height: 400px;
		border: 5px solid #fff;
		border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0,0,0,0.1);
		transition: all 0.5s ease;
		object-fit: cover;
	}

	.principal-image:hover {
		transform: scale(1.2);
		cursor: pointer;
	}

	.principal-info {
		/* border: 1px solid #e0e0e0; */
		padding: 20px;
		border-radius: 8px;
		background-color: #fff;
		/* box-shadow: 0 2px 4px rgba(0,0,0,0.05); */
		text-align: justify;
		font-size: 1.1em;
	}
</style>

<!-- Page Header -->
<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img16.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h1 class="display-4 text-white" style="font-size:2.5rem; font-weight: 700;">Principal's Desk</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="javascript::void(0);">Principals Desk</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="" style="background:white">
	<!-- Features -->
	<div class="features section py-1" style="background: linear-gradient(rgba(0, 0, 0, 0.89), rgba(13, 82, 128, 1)), url('images/bg2.jpg') no-repeat center center; background-size: cover; padding-bottom: 0 !important; ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="principal-message px-3">
						<div class="ps-1" style="background: #058ec442; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
							<h2 class="section-title mb-4 text-align-center" style="color: #fff; margin-top: 10px;">Message from the
								Principal</h2>
							<div class="quote-container rounded shadow-sm">
								<blockquote class="blockquote" style="font-size: 1.0rem;  font-family: fangsong; text-align: justify; color: #fff;">
									<p class="lead">
										<i class="fas fa-quote-left text-primary me-2"></i>
										Dear Students, Parents, and Community Members,
									</p>
									<p>
										Welcome to our school a place where learning thrives, character is nurtured, and
										every child is encouraged to dream big.
									
	
									
										At the heart of our mission is a commitment to excellence in education and the
										holistic development of every student. We believe that each child is unique, filled
										with potential, and capable of achieving greatness when supported with care,
										guidance, and inspiration. Our dedicated team of educators works passionately every
										day to create an environment that is safe, inclusive, and intellectually
										stimulating.
									
	
									
										We take pride not only in our academic achievements, but in the values we
										instill respect, empathy, perseverance, and integrity. These are the qualities that
										shape not just successful students, but kind and responsible citizens of tomorrow.
									
	
								
										To the parents and guardians who entrust us with their children, thank you for your
										continued support and partnership. To our students, know that this is your second
										home, a place where your voice matters, your dreams are encouraged, and your journey
										is celebrated.
	
									
									 Let us continue to work together educators, families, and community to inspire
										curiosity, build confidence, and shape a future filled with promise.
										<i class="fas fa-quote-right text-primary me-2"></i>
									</p>
									<p class="mt-4">
										Warm regards,
										<br>
										Rev Fr Lijeesh Mathew MSFS<br>
										Principal, SFS-Burburia


									</p>
									<!-- <footer class="blockquote-footer mt-4" style="font-size: 1.1em;">
										<cite title="Principal" style="
		color: black; font-style: normal;">Rev Fr Lijeesh Mathew MSFS</cite>
										<br>
										<b class="text-white" style="
		color: #111 !important;">Principal, SFS-Burburia</b>
									</footer>
								</blockquote> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="">
				<h2 class="section-title text-center" style="
		padding: 36px; color:#ffffff !important;margin-top: 0px; margin-bottom: 0px;">About Principal</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="principal-image-container">
						<img src="images/newimg/principal.jpeg" alt="Principal" class="img-fluid principal-image">
					</div>
				</div>
				<div class="col-12">
					<div class="principal-info" style="background: #058ec442; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
						<p style="color: #fff;">Fr. Lijeesh Mathew MSFS is a Catholic missionary priest and the principal of St. Francis De Sales
							School, Burburia, Gomati. He is a member of the Missionaries of St. Francis De Sales (MSFS),
							belonging to the Guwahati Province. Renowned for his commitment to education and leadership, Fr.
							Lijeesh stands out as a dynamic and forward-thinking educationist who has dedicated his life to
							serving the youth of Northeast India.
						Academically accomplished, he holds a Master's degree in Business Administration with a
							specialization in Human Resource Development from Jindal Global University (JGU), New Delhi, and
							a Master's degree in Sociology from IGNOU. He also earned a Bachelor of Education (B.Ed.) from
							the University of Science and Technology Meghalaya (USTM). In addition, he is a professionally
							certified leader, having completed a New Era Leadership course from LEAD Academy, along with
							various other short-term certificate programs that enhance his educational and administrative
							expertise.
						Fr. Lijeesh's passion for transformative education and holistic student development has made a
							significant impact in the region, where he continues to inspire students, teachers, and the broader
							community with his visionary leadership and missionary zeal.</p>
					</div>
				</div>
			</div>
		</div>


	</div>
	
	<hr style="margin: 0;"> 
	<!-- About Principal Section -->
	<!-- <section class="principal-section" style="
		background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(13, 82, 128, 0.7)), url('images/school_img/bgprinci.jpg') no-repeat center center; background-size: cover; padding-bottom:50px;
		;">
		<div class="container">
			<div class="">
				<h2 class="section-title text-center" style="
		padding: 36px; color:#ffffff !important;margin-top: 0px; margin-bottom: 0px;">About Principal</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="principal-image-container">
						<img src="images/school_img/princinewww.jpg" alt="Principal" class="img-fluid principal-image">
					</div>
				</div>
				<div class="col-12">
					<div class="principal-info" style="background: #058ec442; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
						<p style="color: #fff;">Fr. Lijeesh Mathew MSFS is a Catholic missionary priest and the principal of St. Francis De Sales
							School, Burburia, Gomati. He is a member of the Missionaries of St. Francis De Sales (MSFS),
							belonging to the Guwahati Province. Renowned for his commitment to education and leadership, Fr.
							Lijeesh stands out as a dynamic and forward-thinking educationist who has dedicated his life to
							serving the youth of Northeast India.
						Academically accomplished, he holds a Master's degree in Business Administration with a
							specialization in Human Resource Development from Jindal Global University (JGU), New Delhi, and
							a Master's degree in Sociology from IGNOU. He also earned a Bachelor of Education (B.Ed.) from
							the University of Science and Technology Meghalaya (USTM). In addition, he is a professionally
							certified leader, having completed a New Era Leadership course from LEAD Academy, along with
							various other short-term certificate programs that enhance his educational and administrative
							expertise.
						Fr. Lijeesh's passion for transformative education and holistic student development has made a
							significant impact in the region, where he continues to inspire students, teachers, and the broader
							community with his visionary leadership and missionary zeal.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	 -->
	
	<div style=""></div>
</div>

<?php
include 'master/footer.php';
?>