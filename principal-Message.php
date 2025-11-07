<?php 
include('master/header.php');
//include('master/navbar.php');
//include('socialicon.php');
?>
	
    <style>
    *
    /* General Styling */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.7;
  color: #333;
}

/* Breadcrumb Section */
.breadcrumbs {
  background-size: cover;
  background-position: center;
  padding: 60px 0;
  position: relative;
  z-index: 1;
}

.breadcrumbs h2 {
  font-size: 2.5rem;
  color: #fff;
  font-weight: 700;
}

.bread-list {
  list-style: none;
  padding-left: 0;
  text-align: right;
}

.bread-list li {
  display: inline-block;
  color: #fff;
  font-size: 1rem;
  margin-left: 10px;
}

.bread-list li a {
  color: #fff;
  text-decoration: none;
  transition: 0.3s;
}

.bread-list li a:hover {
  color: #ffd700;
}

.bread-list li i {
  margin: 0 5px;
}

/* Principal Message Section */
.principal-message {
 
  padding: 40px 30px;
  border-radius: 12px;
  
  color: #000; /* Default text color */
  background: none; /* No background */
}

.principal-message .section-title-le {
  font-size: 2rem;
  /*font-weight: 700;*/
  
  
  color: #2c3e50; /* Dark modern heading */
}

.principal-message p {
  font-size: 0.9rem;
  margin-bottom: 15px;
  color:#111;
}

.principal-message strong {
    color: #111 /* Make sure bold elements are also black */
}

/* Image Styling */
img.rounded-3 {
  border-radius: 12px;
  max-width: 100%;
  height: auto;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Responsive Fixes */
@media (max-width: 768px) {
  .bread-list {
    text-align: left;
    margin-top: 15px;
  }

  .principal-message {
    padding: 25px 15px;
  }
}

</style>



		
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img16.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h2>Principal Message</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="principal-Message.php">Principal Message</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->



        <div class="container">
    <div class="row align-items-center">

      <!-- Left: Principal Message Content -->
      <div class="col-lg-6 col-md-12">
        <div class="principal-message text-white px-3">
          <h2 class="section-title-le mb-4">Message from the Principal</h2>
          <p class="lead">
            Dear Students, Parents, and Community Members,
          </p>
          <p>
          Welcome to our school—a place where learning thrives, character is nurtured, and every child is encouraged to dream big.
          </p>

            <p>
           At the heart of our mission is a commitment to excellence in education and the holistic development of every student. We believe that each child is unique, filled with potential, and capable of achieving greatness when supported with care, guidance, and inspiration. Our dedicated team of educators works passionately every day to create an environment that is safe, inclusive, and intellectually stimulating.
          </p>

          <p>
         We take pride not only in our academic achievements, but in the values we instill—respect, empathy, perseverance, and integrity. These are the qualities that shape not just successful students, but kind and responsible citizens of tomorrow.
          </p>

          <p>
          To the parents and guardians who entrust us with their children, thank you for your continued support and partnership. To our students, know that this is your second home, a place where your voice matters, your dreams are encouraged, and your journey is celebrated.
         

          </p>
         <p> Let us continue to work together—educators, families, and community—to inspire curiosity, build confidence, and shape a future filled with promise.
          </p>
          <p>Warm regards,
           <br><strong>REV FR LIJEESH MATAHEW MSFS</strong></br>
          <br><strong>Principal</br></strong>
            </p>


        </div>
      </div>


      <!-- Right: Image -->
      <div class="col-lg-6 col-md-12 text-center mt-4 mt-lg-0">
        <img src="images/School_img/princi.jpg" alt="Principal" class="img-fluid rounded-3 shadow-lg" style="max-height: 420px; object-fit: cover;">
      </div>

    </div>
  </div>




        <div style="margin-bottom: 80px;"></div> <!-- Space above footer -->
        <?php 
include('master/footer.php');
?>