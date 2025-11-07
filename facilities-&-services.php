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
    color: #fff;
  }

  .section-intro {
    font-size: 1.1rem;
    color: #fff;
    max-width: 800px;
    margin: 0 auto;
  }

  .box {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
  }

  .box:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
  }

  .box h4 {
    color: #fff;
    font-weight: bold;
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .box ul {
    list-style: none;
    padding-left: 25px;
  }

  .box ul li {
    position: relative;
    margin-bottom: 15px;
    color: #fff;
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
    color: #fdbb2d;
    display: block;
    margin-bottom: 5px;
  }

  .facility-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-bottom: 30px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
    padding: 52px;
    border-radius: 11px;
  }

  @media (max-width: 992px) {
    .facility-grid {
      grid-template-columns: 1fr;
      padding: 20px;
    }
  }
</style>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img16.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                 <h2 style="font-size:2.5rem; font-weight:700">Facilities & Services</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="facilities-&-services.php">Facilities & Services</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<section class="facilities-section py-5" style="background: 
      linear-gradient(
        rgba(26, 42, 108, 0.6), 
        rgb(178 31 31 / 22%), 
        rgba(87, 63, 12, 0.6)
      ),
      url('images/newimg/schlbuilding2.jpeg') center / cover no-repeat;
      background-size: contain;">
  <div class="container">
    <!-- <h2 class="section-title text-center mb-5" style="color: white; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Our Facilities & Services</h2> -->
    <p class="section-intro mb-5" style="color: #fff; text-align: justify; line-height: 1.8;">
      <strong>At SFS School</strong>, we believe in nurturing young minds in a safe, supportive, and inspiring environment.
      Here's a glimpse of the facilities and services we proudly offer:
    </p>

    <div class="row justify-content-center">
      <!-- Academic Excellence -->
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="box h-100">
          <h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Academic Excellence</h3>
          <h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">Modern Learning Environment</h5>
          <ul>
            <li><strong>Smart Classes (Class I to VIII)</strong> Interactive digital learning to make lessons engaging and effective.</li>
            <li><strong>Spacious Classrooms</strong> Well-ventilated and comfortable spaces designed for focused learning.</li>
            <li><strong>Highly Qualified Teachers</strong> Passionate, experienced educators dedicated to every child's growth.</li>
            <li><strong>Best English Teaching</strong> Emphasis on strong English language skills through immersive teaching.</li>
          </ul>
        </div>
      </div>

      <!-- Student-Centered Care -->
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="box h-100">
          <h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Student-Centered Care</h3>
          <h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">Personalized Attention</h5>
          <ul>
            <li><strong>Personal Attention and Care</strong> Every child is valued and supported, both academically and emotionally.</li>
            <li><strong>English-Speaking Campus</strong> English is the only language spoken on campus to enhance fluency.</li>
            <li><strong>Motivational & Training Classes</strong> Regular sessions to inspire confidence, discipline, and goal-setting.</li>
            <li><strong>Special Coaching Classes</strong> Extra help for students needing support in academics.</li>
          </ul>
        </div>
      </div>

      <!-- Health & Hygiene -->
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="box h-100">
          <h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Health & Hygiene</h3>
          <h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">Clean & Safe Environment</h5>
          <ul>
            <li><strong>Pure Drinking Water Facility</strong> Safe, clean, and filtered water available throughout the campus.</li>
            <li><strong>Clean Toilets & Urinals</strong> Regularly sanitized and child-friendly washroom facilities.</li>
          </ul>
        </div>
      </div>

      <!-- Holistic Development -->
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="box h-100">
          <h3 style="color: #fff; font-weight: bold; text-align: center; margin-bottom: 25px; font-size: 24px; text-transform: uppercase; letter-spacing: 1px;">Holistic Development</h3>
          <h5 style="color: #fdbb2d; margin-bottom: 20px; text-align: center;">All-Round Growth</h5>
          <ul>
            <li><strong>Work Experience Programs</strong> Practical learning beyond textbooks to develop real-life skills.</li>
            <li><strong>Computer Lab</strong> Hands-on training in basic computing and digital literacy.</li>
            <li><strong>Colorful Activities & Celebrations</strong> A vibrant calendar of events that brings learning and joy together.</li>
            <li><strong>Conducive & Peaceful Environment</strong> A calm atmosphere ideal for concentration and creativity.</li>
            <li><strong>Focus on Overall Development</strong> Academics, values, creativity, and physical fitness – all nurtured equally.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Space above footer -->

<?php
include('master/footer.php');
?>