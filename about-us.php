<?php
include 'master/header.php';
?>

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
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
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
    <div class="row mb-4" style="margin-bottom: 10px !important;">
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