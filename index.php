<?php
include 'master/header.php';
?>
<!-- Add Animate.css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Popup container -->
<div class="popup" id="imagePopup">
  <div class="popup-content">
      <button class="close-btn" onclick="closePopup()">×</button>
      
          <img src="images/pop-up-image.jpeg" alt="Popup Image" class="popup-image">
          

  </div>
</div>

<script>
  //  Function to close the popup
  function closePopup() {
      document.getElementById("imagePopup").style.display = "none";
      
      //document.querySelector(".popup-image").pause();
  }
  window.onload = function() {
    document.getElementById("imagePopup").style.display = "flex";
        };
</script>

<style>
  
  .popup {
      display: flex; 
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8); 
      z-index: 9999;
      justify-content: center;
      align-items: center;
  }

 
  .popup-content {
      position: relative;
      /* background-color: #8e1179;
      padding: 20px;
      border-radius: 10px; */
      /* width: 59%; */
      max-width: 455px;
      max-height: 80vh; 
      /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
  }

  
  .popup-image {
      width: 89%;
      height: auto;
      border-radius: 8px;
      margin-top: -7px;
  }

  
  .close-btn {
      position: absolute;
      top: -24px;
      right: 21px;
      /* background-color: #ff4d4d;
      color: white; */
      border: none;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      font-size: 20px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
  }

  .close-btn:hover {
      background-color: #cc0000;
  }

  @media screen and (max-width: 768px) {
            .popup-content {
                width: 90%; 
                padding: 15px;
            }
            .close-btn {
                top: -10px;
                right: -10px;
                width: 25px;
                height: 25px;
                font-size: 16px;
            }
        }

        @media screen and (max-width: 480px) {
            .popup-content {
                width: 95%; 
                padding: 10px;
            }
            .popup-video {
                max-height: 60vh;
            }
            .close-btn {
                top: -8px;
                right: -8px;
                width: 20px;
                height: 20px;
                font-size: 14px;
            }
        }
</style>


<style>
  .disc>ul {
    list-style-type: disc !important;
  }
  @keyframes slideInLeft {
  0% {
      opacity: 0;
      transform: translateX(-100px);
    }
    100% {
      opacity: 1;
      transform: translateX(0);
    }
  }

@keyframes slideInRight {
  0% {
    opacity: 0;
    transform: translateX(100px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes moveText {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(100%);
  }
}

.welcome-animate-left {
  animation: slideInLeft 1s ease-out forwards;
}

.welcome-animate-right {
  animation: slideInRight 1s ease-out forwards;
  animation-delay: 0.3s;
}
.welcome-section{
  overflow:hidden;
}
.moving-text {
  white-space: nowrap;
  overflow: hidden;
  position: relative;
  display: inline-block;
  animation: moveText 15s linear infinite;
  color: black;
  font-weight: bold;
  font-size: 4.5rem;
  font-family: 'Bell MT', serif;
  margin-top: 13px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

@media (max-width: 1200px) {
  .moving-text {
    font-size: 3.5rem;
  }
}

@media (max-width: 991px) {
  .moving-text {
    font-size: 2.8rem;
  }
}

@media (max-width: 768px) {
  .moving-text {
    font-size: 2.2rem;
  }
  .about-img-wrapper{
    display: flex;
    gap : 5px;
  }
}

@media (max-width: 576px) {
  .moving-text {
    font-size: 1.8rem;
  }
}

@media (max-width: 400px) {
  .moving-text {
    font-size: 1.5rem;
  }
}

 
  .box ul {
    list-style-type: none;
    padding-left: 0;
    margin: 0;
  }

  .box ul li {
    color: #fff;
    /* margin-bottom: 15px;
    line-height: 1.6; */
    position: relative;
    padding-left: 2px;
  }

  .box ul li:before {
    content: "•";
    color: #fff;
    font-size: 1.5em;
    position: absolute;
    left: -18px;
    top: -8px;
  }

  .box ul li strong {
    color: #288FB4;
    display: block;
    margin-bottom: 5px;
  }

  /* Slider image size control */
  .home-slider .item {
    max-height: 500px;
    overflow: hidden;
  }
  
  .home-slider .item img {
    width: 100%;
    height: 616px;
    object-fit: cover;
  }
</style>

<!-- Slider Area -->
<!-- Slider Section -->
<!-- Bootstrap Carousel -->
<section id="homeCarousel" class="home-slider owl-carousel owl-theme">
  <div class="item">
    <img src="images/newimg/banner3.jpg" class="img-fluid" alt="Slide 1">
    <div class="carousel-caption">
      <h2 class="display-4 fw-bold">Welcome to St. Francis De Sales School</h2>
      <p class="lead">Nurturing Minds, Building Character, Shaping Futures</p>
      <a href="admission.php" class="btn btn-primary btn-lg">Apply Now</a>
    </div>
  </div>
  <div class="item">
    <img src="images/newimg/principal.jpeg" class="img-fluid" alt="Slide 2">
    <div class="carousel-caption">
      <h2 class="display-4 fw-bold">Excellence in Education</h2>
      <p class="lead">Quality Education with Modern Facilities</p>
      <a href="academics.php" class="btn btn-primary btn-lg">Explore Academics</a>
    </div>
  </div>
  <div class="item">
    <img src="images/newimg/img1.jpeg" class="img-fluid" alt="Slide 3">
    <div class="carousel-caption left-align">
      <h2 class="display-4 fw-bold">Holistic Development</h2>
      <p class="lead">Sports, Arts, and Cultural Activities</p>
      <a href="activities.php" class="btn btn-primary btn-lg">View Activities</a>
    </div>
  </div>
  <div class="item">
    <img src="images/newimg/img33.jpeg" class="img-fluid" alt="Slide 4">
    <div class="carousel-caption left-align">
      <h2 class="display-4 fw-bold">Join Our Community</h2>
      <p class="lead">Be Part of Our Growing Family</p>
      <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </div>
  <div class="item">
    <img src="images/newimg/homepage.jpg" class="img-fluid" alt="Slide 5">
    <div class="carousel-caption left-align">
      <h2 class="display-4 fw-bold">Join Our Community</h2>
      <p class="lead">Be Part of Our Growing Family</p>
      <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </div>
  
  <div class="item">
    <img src="images/newimg/principal2.jpeg" class="img-fluid" alt="Slide 6">
    <div class="carousel-caption left-align">
      <h2 class="display-4 fw-bold">Join Our Community</h2>
      <p class="lead">Be Part of Our Growing Family</p>
      <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </div>
</section>


<!--/ End Slider Area -->

<!-- About Us Section -->
<section class="about-us-section" style="position: relative; background: url('images/gif1.gif') no-repeat center center; background-size: cover; min-height: 300px;">
  <!-- Welcome Text Box -->
  <div class="text-center welcome-section">
    <div class="welcome-content">
      <h2 class="moving-text">Welcome to St. Francis De Sales School Burburia, Tripura</h2>
    </div>
  </div>

  <!-- Background Image Section -->
  <div style="background: linear-gradient(rgb(16 43 57 / 90%), rgb(5 24 30)), url(images/school_img/building1.jpg) no-repeat center center; background-size: cover; position: relative; padding: 24px;">
    <div class="container">
      <div class="row">
        <!-- Text Column - Now Full Width -->
        <div class="col-12">
          <div class="about-content animate__animated animate__fadeInRight" style="padding: 0.5rem; border-radius:10px;
    padding-top: 1rem; font-size: 1.0em;">
            <p style="color: #fff;">
              It is with great joy that we welcome you to St. Francis De Sales School, Burburia, a Catholic minority
              educational institution under the loving guidance of the Society of the Missionaries of St. Francis De
              Sales. Nestled in the heart of Amarpur Sub-Division of Gomati District, Tripura, our school is more than just a place of learning it is a home where values meet vision.
            </p>

            <p class="text-muted" style="color: #fff !important;">
              Inspired by the life and teachings of our heavenly patron, St. Francis De Sales, we are committed to
              nurturing young minds and hearts through quality education grounded in faith, compassion, and excellence.
              Our motto, "Lighted to Excel," reflects our unwavering dedication to illuminate the path of every
              student with knowledge, wisdom, and purpose.
            </p>

            <p class="text-muted" style="color: #fff !important;">
              St. Francis De Sales School stands as a beacon of hope and progress not just for our students, but for the
              entire state of Tripura. We aim to empower the children of today to become the leaders of tomorrow, enriched
              with strong moral values and a deep sense of responsibility towards society.
            </p>
            <p class="text-muted" style="color: #fff !important; ">
              We invite you to explore our website and get to know the heart and soul of our institution. Whether you are
              a parent, student, educator, or well-wisher, thank you for being a part of our journey in shaping a
              brighter, better future.
            </p>

            <div class="mt-4">
              <p class="fw-semibold text-dark mb-1" style="color: #fff !important;">With blessings and best wishes,</p>
              <br>
              <p class="mb-0"><strong style="color: #fff;">PRINCIPAL</strong></p>
              <p class="mb-0"><strong style="color: #fff;">Rev Fr Lijeesh Mathew MSFS</strong></p>
              <p><strong style="color: #fff; ">St. Francis De Sales School, Burburia</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!--/ End Blogs -->



<!-- Features -->
<div class="features overlay section py-5" style="background:  url('images/school_img/bgprinci.jpg') no-repeat center center; background-size: cover;" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left: Principal Message Content -->
      <div class="col-lg-7 col-12">
        <div class="principal-message text-white px-3">
          <div class="ps-1">
            <h2 class="section-title mb-4 text-align-left">Message from the Principal</h2>
            <div class="quote-container rounded shadow-sm">
              <blockquote class="blockquote" style="font-size: 1.0rem; color: #fff; font-family: fangsong;">
                <p class="lead mb-2" style="color: #f1f1f1; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">
                  <i class="fas fa-quote-left text-primary me-2"></i>
                  Dear Students, Parents, and Community Members,
                </p>
                <p class="mb-2" style="color: #f1f1f1; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">
                  Welcome to our school—a place where learning thrives, character is nurtured, and every child is
                  encouraged to dream big. At the heart of our mission is a commitment to excellence in education and
                  the holistic development of every student.
                </p>
                <p class="mb-2" style="color: #f1f1f1; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">
                  We believe that each child is unique, filled with potential, and capable of achieving greatness when
                  supported with care, guidance, and inspiration.
                </p>
                
                <footer class="blockquote-footer mt-4" style="font-size: 1.1em; color: white;">
								<cite title="Principal" style="color: white; font-style: normal;">Rev Fr Lijeesh Mathew MSFS</cite>
								<br>
								<b class="text-white" style="color: white !important;">Principal, SFS-Burburia</b>
								</footer>
								</blockquote>

                <!-- <footer class="mt-2">
                  <p title="Principal" style="color: #f1f1f1; font-size:16px; margin-bottom: 5px; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">Rev Fr Lijeesh Mathew MSFS</p>
                  <b class="text-white" style="font-size:15px; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">Principal, SFS-Burburia</b>
                </footer>
              </blockquote> -->
              <a href="principals-desk.php" class="btn btn-primary btn-sm mt-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 12px rgba(0, 0, 0, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.2)';">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Image -->
      <div class="col-lg-5 col-12 text-center mt-4 mt-lg-0" style="overflow: hidden;">
        <img src="images/school_img/princinew.jpg" alt="Principal" class="img-fluid rounded-3 shadow-lg principal-img" style="box-shadow: 0 15px 30px rgba(0,0,0,0.3) !important; transition: all 0.5s ease-in-out; cursor: pointer; width: 400px; height: 450px; object-fit: cover; border: 8px solid #ffffff; border-radius: 20px;" onmouseover="this.style.transform='scale(1.15)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.4) !important'; this.style.border='8px solid #f8f9fa';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.3) !important'; this.style.border='8px solid #ffffff';">
      </div>

    </div>
  </div>
</div>

<section class="upcoming-events">
    <div class="title-container">
        <h1 class="section-title1">Upcoming Events and Information</h1>
    </div>
    <!-- <div class="event-container">
        <div class="event-card">
            <div class="event-title">First Term Evaluation of Academic Year 2025-2026</div>
            <div class="event-date"><i class="far fa-calendar"></i> 05-07-2025 to 15-07-2025</div>
        </div>
        <div class="event-card">
            <div class="event-title">First Term Evaluation Result</div>
            <div class="event-date"><i class="far fa-calendar"></i> 18-07-2025 at 8:00AM</div>
        </div>
    </div> -->
</section>

<style>
.upcoming-events {
    padding: 40px 20px;
    /* background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); */
    /* background: linear-gradient(135deg, #f5f7fab3 0%, #c3cfe2b5 100%), url('images/anualcom/img11.jpg') center center / cover no-repeat; */
    background: linear-gradient(135deg, #554d3b, #e0b590, #5f3104);
    text-align: center;
}

.title-container {
    overflow: hidden;
    white-space: nowrap;
    /* margin-bottom: 30px; */
}

.section-title1 {
    display: inline-block;
    font-size: 2.5rem;
    color: white;
    font-weight: 700;
    /* text-transform: uppercase; */
    letter-spacing: 2px;
    animation: marquee 8s linear infinite;
}

.event-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.event-card {
    width: 547px;
    padding: 12px;
    background: #2125290a;
    border-radius: 15px;
    box-shadow: 0 8px 16px #111111a3;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    /* border: 7px solid #007bffad; */
}

.event-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.event-title {
    font-size: 1.4rem;
    color: white;
    font-weight: 600;
    margin-bottom: 10px;
}

.event-date {
    font-size: 1.1rem;
    color: white;
}

@keyframes marquee {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}

/* Pause animation on hover */
.title-container:hover .section-title1 {
    animation-play-state: paused;
}

/* Responsive design */
@media (max-width: 768px) {
    .event-card {
        width: 240px;
    }
    .section-title1 {
        font-size: 2rem;
    }
}
</style>

<!-- Mission & Vision Section -->
<section class="mission-vision py-5" style="background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);">
  <div class="container">
    <h2 class="section-title text-center mb-5" style="color: white; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Our Mission & Vision</h2>
    <div class="row justify-content-center">
      <!-- Mission Box -->
      <div class="col-lg-5 col-md-6 mb-4">
        <div class="box mission h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
        <h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Mission</h3>
        <p style="text-align:justify; color: #fff; margin-bottom: 20px;">
        Guided by our motto <strong style="color: #fdbb2d;">"Lighted to Excel"</strong>, our mission is to inspire a lifelong love for learning by nurturing an environment that is both caring and intellectually vibrant. We are dedicated to fostering the holistic development of every student academically, spiritually, emotionally, and socially while instilling values of respect, responsibility, and service rooted in faith and strong moral character. Our goal is to empower students to navigate the challenges
        of the modern world with confidence, creativity, and compassion. In partnership with families and the broader community, we strive to build a strong foundation for future success, meaningful contribution, and inspired leadership.We believe in nurturing every child's potential and preparing them to meet the challenges of a dynamic world with confidence, compassion, and integrity.
        </p>
          
        </div>
      </div>

      <!-- Vision Box -->
      <div class="col-lg-5 col-md-6 mb-4">
        <div class="box vision h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.2)';">
          <h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Vision</h3>
          <p style="text-align:justify; color: #fff; line-height: 1.8;">
          At SFS School Burburia, our vision is to illuminate young minds with knowledge, values, and purpose—empowering every student to 
          grow into confident, compassionate, and competent individuals who excel in all aspects of life. Rooted in faith and guided by 
          excellence, we aspire to shape future leaders who will inspire change and serve the world with integrity and wisdom. We believe that 
          true education goes beyond textbooks, nurturing character, creativity, and a deep sense of responsibility. By fostering a love for 
          learning and a spirit of service, we prepare our students to become thoughtful citizens and lifelong learners who contribute 
          meaningfully to society.Together, we strive to create an environment where every child feels seen, supported, and inspired to shine
          </p>
          <!-- <div class="row row-cols-2 row-cols-md-3 g-3 justify-content-center mt-4" style="gap:0.5rem;">
            <div class="col">
              <span class="badge w-100" style="background: rgba(255, 255, 255, 0.2); padding: 10px 20px; border-radius: 50px; color: #fff; font-size: 14px;">Illuminating Minds</span>
            </div>
            <div class="col">
              <span class="badge w-100" style="background: rgba(255, 255, 255, 0.2); padding: 10px 20px; border-radius: 50px; color: #fff; font-size: 14px;">Shaping Futures</span>
            </div>
            <div class="col">
              <span class="badge w-100" style="background: rgba(255, 255, 255, 0.2); padding: 10px 20px; border-radius: 50px; color: #fff; font-size: 14px;">Academic Excellence</span>
            </div>
            <div class="col">
              <span class="badge w-100" style="background: rgba(255, 255, 255, 0.2); padding: 10px 20px; border-radius: 50px; color: #fff; font-size: 14px;">Moral Values</span>
            </div>
            <div class="col">
              <span class="badge w-100" style="background: rgba(255, 255, 255, 0.2); padding: 10px 20px; border-radius: 50px; color: #fff; font-size: 14px;">Holistic Development</span>
            </div>
            <div class="col">
              <span class="badge w-100" style="background: rgba(255, 255, 255, 0.2); padding: 10px 20px; border-radius: 50px; color: #fff; font-size: 14px;">Faith & Character</span>
            </div>
          </div> -->
        </div>
      </div>

      <!-- Motto Box -->
      
    </div>
  </div>
</section>
<section class="upcoming-events">
    <div class="title-container">
        <h1 class="section-title1">"Lighted to Excel"</h1>
    </div>
    <!-- <div class="event-container">
        <div class="event-card">
            <div class="event-title">First Term Evaluation of Academic Year 2025-2026</div>
            <div class="event-date"><i class="far fa-calendar"></i> 05-07-2025 to 15-07-2025</div>
        </div>
        <div class="event-card">
            <div class="event-title">First Term Evaluation Result</div>
            <div class="event-date"><i class="far fa-calendar"></i> 18-07-2025 at 8:00AM</div>
        </div>
    </div> -->
</section>



<!-- <section class="motto-section">
        <div class="col-lg-5 col-md-6 mb-4">
            <div class="box motto-box h-100" style="box-shadow: unset;">
                 <h3 style="color: #910909;">Our Motto</h3> -->
                <!-- <p style="font-weight: bold;">"Lighted to Excel"</p>
            </div>
        </div>
    </section> --> 
    <style>

.box {
            position: relative;
            padding: 20px;
            border-radius: 10px;
            color: #333;
            margin-top: 25px;
        }
        .motto-section {
            display: flex;
            justify-content: center;
            align-items: center;
            /* min-height: 100vh; */
            background: linear-gradient(135deg, #554d3b, #e0b590, #5f3104); /* Light beige background */
        }
        .motto-box {
            height: 100%;
            /* background: linear-gradient(135deg, #f5e8c7, #e0b590, #d4a373);Beige to warm brown gradient */
            background: #ffffff00;
            text-align: center;
        }
        .motto-box h3 {
            font-size: 2em;
            margin-bottom: 10px;
            color: #fff;
        }
        .motto-box p {
            font-size: 3em;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
      </style>


<!-- ends Mission & Vision Section -->

<style>
   
  .about-us {
    position: relative;
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('images/school_img/gif23.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    padding: 2.5rem 0;
  }

  .section-title {
    color: #fff;
    text-align: center;
    margin-bottom: 2rem;
  }

  .about-content p {
    color: #fff;
    font-size: 1.1em;
    
    text-align: justify;
  }

  .image-zoom-container {
    overflow: hidden;
    border-radius: 8px;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); */
    margin-bottom: 1rem;
  }

  .image-zoom-container img {
    max-width: 100%;
    max-height: 250px;
    border: 4px solid #fff;
    transition: transform 0.5s ease;
    transform-origin: center center;
  }

  .image-zoom-container:hover img {
    transform: scale(1.15);
  }

  @media (max-width: 768px) {
    .about-content {
      margin-top: 1rem;
    }
  }
</style>

<section class="about-us" id="about-us">
  <div class="container about-container">
    <!-- Section Title -->
    <div class="row mb-4">
      <div class="col-12 text-center">
        <h2 class="section-title">About Us</h2>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row align-items-start">
      <!-- Left Column: Image and Content -->
      <div class="col-lg-6 col-md-6 text-center">
      <h4 class="mb-3" style="color: white;">Our Patron</h4>
        <div class="image-zoom-container mb-3">
          <img src="images/school_img/New_photo/aboutus1.jpg" alt="Peter - About SFS School" class="img-fluid rounded shadow">
        </div>
        <h5 class="mt-2 mb-0" style="color: white;">ST. Francis De Sales</h5>
    <p class="text-muted" style="color: white !important;">(1567-1622)</p>
        <div class="about-content">
          <p>
            St. Francis De Sales School, Burburia is a Catholic minority educational institution located
            in the Amarpur Sub-Division of Gomati District, in the beautiful state of Tripura. The school is established
            and administered by the Society of the Missionaries of St. Francis De Sales (MSFS), an international religious
            congregation committed to education, social development, and spiritual formation.
            Founded with a vision to provide quality and value-based education, the school is inspired by
            the life and teachings of its heavenly patron, St. Francis De Sales, who is known for his wisdom, humility,
            and deep compassion. His legacy continues to guide the school in shaping students to become responsible,
            enlightened, and service-oriented individuals.
          </p>
        </div>
      </div>

      <!-- Right Column: Image and Content -->
      <div class="col-lg-6 col-md-6 text-center">
      <h4 class="mb-3" style="color: white;">Our Founder</h4>
        <div class="image-zoom-container mb-3">
          <img src="images/school_img/New_photo/aboutus2.jpg" alt="School Environment" class="img-fluid rounded shadow">
        </div>
        <h5 class="mt-2 mb-0" style="color: white;">FR. Peter Marie Mermier</h5>
    <p class="text-muted" style="color: white !important;">(1790-1862)</p>
        <div class="about-content">
          <p>
           At St. Francis De Sales School, we focus not just on academic excellence, but also on the
            all-round development of our students—spiritually, morally, emotionally, and socially. The curriculum is
            enriched with co-curricular and extracurricular activities that foster creativity, leadership, teamwork, and a
            spirit of service.
            With dedicated staff, supportive parents, and an inclusive school community, we are proud to be
            a center of learning that stands for the progress of the state and the people of Tripura. We believe in
            nurturing every child's potential and preparing them to meet the challenges of a dynamic world with confidence,
            compassion, and integrity.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'master/footer.php';
?>