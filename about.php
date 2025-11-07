<?php
include('master/header.php');
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
</style>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img16.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2 style="font-size:2.5rem;">About Us</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="about.php">About Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<style>
@media (min-width: 992px) {
    .about-container {
        padding: 0 100px;
    }
}
</style>

<section class="about-us py-5 bg-light" id="about-us">
	<div class="container about-container">
		<!-- Section Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<!-- <h2 class="section-title text-primary">About Us</h2> -->
			</div>
		</div>

		<!-- First Row: Peter Image Left, Text Right -->
		<div class="row align-items-center mb-5">
			<div class="col-lg-2 mb-4 mb-lg-0 about-img-wrapper text-center">
				<img src="images/school_img/peter.jpg" alt="Peter - About SFS School" class="img-fluid rounded shadow"
					style="max-width: 100%; max-height: 213px;">
			</div>
			<div class="col-lg-10">
				<div class="about-content ps-lg-4" style="margin-top: 4px;">
					<p class="text-muted" style="font-size: 1.0em">
						At St. Francis De Sales School, Burburia is a Catholic minority educational institution located
						in the
						Amarpur
						Sub-Division of Gomati District, in the beautiful state of Tripura. The school is established
						and
						administered
						by the Society of the Missionaries of St. Francis De Sales (MSFS), an international religious
						congregation
						committed to education, social development, and spiritual formation.
					</p>
					<p class="text-muted" style="font-size: 1.0em">
						Founded with a vision to provide quality and value-based education, the school is inspired by
						the life and
						teachings of its heavenly patron, St. Francis De Sales, who is known for his wisdom, humility,
						and deep
						compassion. His legacy continues to guide the school in shaping students to become responsible,
						enlightened,
						and service-oriented individuals.
					</p>
				</div>
			</div>
		</div>

		<!-- Second Row: Text Left, Image Right -->
		<div class="row align-items-center">
			<div class="col-lg-10 order-lg-1 order-2">
				<div class="about-content pe-lg-4">
					<p class="text-muted" style="font-size: 1.0rem">
						At St. Francis De Sales School, we focus not just on academic excellence, but also on the
						all-round
						development of our students—spiritually, morally, emotionally, and socially. The curriculum is
						enriched with
						co-curricular and extracurricular activities that foster creativity, leadership, teamwork, and a
						spirit of
						service.
					</p>
					<p class="text-muted" style="font-size: 1.0rem">
						With dedicated staff, supportive parents, and an inclusive school community, we are proud to be
						a center of
						learning that stands for the progress of the state and the people of Tripura. We believe in
						nurturing every
						child's potential and preparing them to meet the challenges of a dynamic world with confidence,
						compassion,
						and integrity.
					</p>
				</div>
			</div>
			<div class="col-lg-2 order-lg-2 order-1 mb-4 mb-lg-0">
				<div class="about-img-wrapper text-center">
					<img src="images/school_img/peter2.jpg" alt="School Environment" class="img-fluid rounded shadow"
						style="max-width: 100%; height: 210px;">
				</div>
			</div>
		</div>
	</div>
</section>





<!-- for footer area -->
<?php
include('master/footer.php');
?>