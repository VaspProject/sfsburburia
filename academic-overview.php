<?php
include('master/header.php');
//include('master/navbar.php');
//include('socialicon.php');
?>
<style>
	.facilities-section {
		font-family: 'Segoe UI', sans-serif;
	}

	.section-title {
		font-size: 2.5rem;
		font-weight: 700;
		color: #1D556F;
	}

	.section-intro {
		font-size: 1.0rem;
		color: #111;
		max-width: 1200px;
		margin: 0 auto;
	}

	.category-title {
		font-size: 1.5rem;
		margin-top: 40px;
		margin-bottom: 20px;
		color: #1D556F;
		padding-left: 15px;
		font-style: oblique;
	}

	.facility-cards {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 30px;
		margin-bottom: 30px;
		max-width: 1200px;
		margin-left: auto;
		margin-right: auto;
		background: linear-gradient(to left, rgb(6 4 113 / 54%), rgb(80 101 118));
		padding: 52px;
		border-radius: 11px;
	}

	.facility-card {
		background: #fff;
		border-radius: 11px;
		padding: 10px 30px;
		/* box-shadow: 7px 7px 14px #7e7a81,
			-7px -7px 14px #ffffff; */
		transition: all 0.3s ease;
		width: 100%;
		position: relative;
		height: 100%;
	}

	.facility-card:hover {
		transform: translateY(-5px);
		/* box-shadow: 7px 7px 14px #7e7a81,
			-7px -7px 14px #ffffff; */
	}

	.facility-card .category-title {
		/* position: absolute; */
		/* top: -69px; */
		/* left: 0; */
		width: 100%;
		padding: 20px 30px;
		color: #2980b9;
		font-size: 1.8rem;
		font-weight: 600;
		margin: 0;
		font-style: normal;
	}

	.facility-card h5 {
		color: #111;
		margin-bottom: 20px;
		font-weight: 600;
		/* margin-top: -24px; */
	}

	.facility-card p {
		color: #111;
		font-size: 1rem;
		line-height: 1.6;
		margin-bottom: 15px;
	}

	.facility-card ul {
		padding-left: 20px;
		margin: 15px 0;
		/* display: flex; */
		flex-wrap: wrap;
		column-gap: 3rem;
		row-gap: 1rem;
	}

	.facility-card ul li {
		color: #111;
		margin-bottom: 8px;
		list-style: disc;
		/* padding: 1rem; */
		border-radius: 4px;
		/* background: #efddb2; */
		/* box-shadow: 5px 5px 7px #cbbc97, -5px -5px 7px #fffecd; */
	}

	.box ul {
		list-style: none;
		padding-left: 25px;
	}

	.box ul li {
		position: relative;
		margin-bottom: 15px;
	}

	.box ul li:before {
		content: "•";
		color: #fff;
		font-size: 1.5em;
		position: absolute;
		left: -18px;
		top: -8px;
	}

	@media (max-width: 992px) {
		.facility-cards {
			grid-template-columns: 1fr;
			padding: 10px 20px;
		}
	}
</style>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img16.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2 style="font-size:2.5rem; font-weight:700">Academic Overview</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li><a href="#">Academic Overview</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->



<!-- Academic Overview Section -->
<section class="facilities-section py-5" 
style="background: 
      linear-gradient(
        rgba(26, 42, 108, 0.6), 
        rgb(178 31 31 / 22%), 
        rgba(102, 74, 14, 0.6)
      ),
      url('images/newimg/schlbuilding2.jpeg') center / cover no-repeat;
      background-size: contain;">
	<div class="container">
		<h2 class="section-title text-center mb-5" style="color: white; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Academic Overview</h2>
		<p class="section-intro mb-5" style="color: #fff; text-align: justify; line-height: 1.8;">
			At St. Francis De Sales School, Burburia, we believe that education is a journey of discovery, growth, and
			transformation. Rooted in the values of our patron, St. Francis De Sales, our academic program is designed to
			cultivate not only intellectual growth but also character, creativity, and a deep sense of purpose.
			Our curriculum is thoughtfully structured to ensure a balanced and holistic education that empowers students to
			excel in all spheres of life. We follow a child-centric approach that encourages inquiry, critical thinking, and
			meaningful learning experiences.
		</p>

		<div class="row justify-content-center">
			<!-- Curriculum -->
			<div class="col-lg-6 col-md-6 mb-4">
				<div class="box h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
					<h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Curriculum</h3>
					<h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">Curriculum Overview</h5>
					<p style="color: #fff; margin-bottom: 20px;">The school follows a curriculum based on national educational standards, integrating modern teaching methods with time-tested values.</p>
					<ul style="color: #fff; padding-left: 15px;">
						<li style="margin-bottom: 15px;">Languages (English, Hindi, Bengali)</li>
						<li style="margin-bottom: 15px;">Mathematics</li>
						<li style="margin-bottom: 15px;">Science</li>
						<li style="margin-bottom: 15px;">Social Science</li>
						<li style="margin-bottom: 15px;">Computer Education</li>
						<li style="margin-bottom: 15px;">Moral Science & Value Education</li>
						<li style="margin-bottom: 15px;">Environmental Studies</li>
						<li style="margin-bottom: 15px;">General Knowledge</li>
					</ul>
					<p style="color: #fff;">In addition to academics, we emphasize the importance of co-curricular activities, art, music, sports, and life skills to nurture the full potential of each student.</p>
				</div>
			</div>

			<!-- Teaching Methodology -->
			<div class="col-lg-6 col-md-6 mb-4">
				<div class="box h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
					<h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Teaching Methodology</h3>
					<h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">Modern Teaching Techniques</h5>
					<p style="color: #fff; margin-bottom: 20px;">Our experienced faculty use a blend of modern and traditional techniques:</p>
					<ul style="color: #fff; padding-left: 15px;">
						<li style="margin-bottom: 15px;">Interactive classroom sessions</li>
						<li style="margin-bottom: 15px;">Audio-visual tools</li>
						<li style="margin-bottom: 15px;">Group activities and projects</li>
						<li style="margin-bottom: 15px;">Hands-on experiments</li>
						<li style="margin-bottom: 15px;">Continuous assessments with feedback</li>
					</ul>
					<p style="color: #fff;">We focus on fostering curiosity, collaboration, communication, and confidence, which are essential skills for lifelong learning and leadership.</p>
				</div>
			</div>

			<!-- Examinations & Evaluation -->
			<div class="col-lg-6 col-md-6 mb-4">
				<div class="box h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
					<h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Examinations & Evaluation</h3>
					<h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">Assessment Methods</h5>
					<p style="color: #fff; margin-bottom: 20px;">We assess students through multiple formats to ensure well-rounded progress:</p>
					<ul style="color: #fff; padding-left: 15px;">
						<li style="margin-bottom: 15px;">Unit tests</li>
						<li style="margin-bottom: 15px;">Mid-term & final exams</li>
						<li style="margin-bottom: 15px;">Project work and presentations</li>
						<li style="margin-bottom: 15px;">CCE (Continuous and Comprehensive Evaluation)</li>
					</ul>
				</div>
			</div>

			<!-- Academic Support -->
			<div class="col-lg-6 col-md-6 mb-4">
				<div class="box h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
					<h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Academic Support</h3>
					<h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">Support Services</h5>
					<p style="color: #fff; margin-bottom: 20px;">Our comprehensive academic support includes:</p>
					<ul style="color: #fff; padding-left: 15px;">
						<li style="margin-bottom: 15px;">Dedicated remedial classes for students needing extra support</li>
						<li style="margin-bottom: 15px;">One-on-one academic counseling sessions</li>
						<li style="margin-bottom: 15px;">Regular parent-teacher meetings (PTMs) for collaborative progress tracking</li>
						<li style="margin-bottom: 15px;">Personalized learning plans for diverse learning needs</li>
						<li style="margin-bottom: 15px;">Study skill workshops and academic guidance</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Space above footer -->

<?php
include 'master/footer.php';
?>