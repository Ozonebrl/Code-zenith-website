
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
  /* Custom color scheme */
  .bg-custom-red {
    background-color: #8B0101 !important;
  }
  .text-custom-red {
    color: #8B0101 !important;
  }
  .btn-custom-red {
    background-color: #8B0101;
    border-color: #8B0101;
    color: white;
  }
  .btn-outline-custom-red {
    color: #8B0101;
    border-color: #8B0101;
  }
  .btn-outline-custom-red:hover {
    background-color: #8B0101;
    color: white;
  }
  .section-title {
    position: relative;
    margin-bottom: 2.5rem;
  }
  .section-title:after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: #8B0101;
  }
  .team-member {
    transition: transform 0.3s ease;
  }
  .team-member:hover {
    transform: translateY(-10px);
  }
  .value-card {
    border-left: 4px solid #8B0101;
    padding-left: 20px;
    margin-bottom: 30px;
  }
</style>

<!-- Top Contact Bar -->
<div class="bg-custom-red text-white py-2">
  <div class="container d-flex justify-content-between align-items-center small">
    <div><i class="bi bi-telephone me-2"></i> 9869841544</div>
    <div><i class="bi bi-envelope me-2"></i> contact.codezenithnepal@gmail.com</div>
    <div>
      <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
      <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
      <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</div>

<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero-section bg-custom-red text-white text-center py-5">
  <div class="container py-5">
    <h1 class="fw-bold display-4 mb-3">About Code Zenith</h1>
    <p class="lead fs-4">Empowering IT Solutions for Your Business Growth</p>
  </div>
</section>

<!-- About Content -->
<section class="container py-5">
  <div class="row g-5 align-items-center">
    <div class="col-lg-6">
      <img src="images/group2.jpg" alt="Code Zenith Team" class="img-fluid rounded shadow-lg">
    </div>
    <div class="col-lg-6">
      <h2 class="text-custom-red fw-bold mb-4">Who We Are</h2>
      <p class="fs-5">Founded in 2023, Code Zenith Pvt. Ltd. is an emerging IT powerhouse based in the vibrant city of Pokhara, Nepal. We're a team of passionate technologists dedicated to delivering cutting-edge digital solutions that transform businesses.</p>
      
      <div class="mt-4">
        <h4 class="text-custom-red fw-bold mb-3">Our Journey</h4>
        <p>Starting as a small team of three visionaries, we've grown into a family of 15+ experts in just one year. Our journey has been marked by innovation, client satisfaction, and a relentless pursuit of excellence in the IT domain.</p>
      </div>
      
      <div class="mt-4">
        <h4 class="text-custom-red fw-bold mb-3">What Sets Us Apart</h4>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-custom-red me-2"></i> Industry-certified professionals with 5+ years average experience</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-custom-red me-2"></i> Agile development methodology for faster delivery</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-custom-red me-2"></i> Customized solutions tailored to your specific needs</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-custom-red me-2"></i> 24/7 technical support for all our clients</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Core Values -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center text-custom-red section-title">Our Core Values</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="value-card">
          <h3 class="text-custom-red"><i class="bi bi-lightbulb-fill me-2"></i> Innovation</h3>
          <p>We constantly explore new technologies and creative approaches to solve complex business challenges and stay ahead of industry trends.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="value-card">
          <h3 class="text-custom-red"><i class="bi bi-person-heart me-2"></i> Integrity</h3>
          <p>Honesty and transparency form the foundation of all our client relationships and internal operations.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="value-card">
          <h3 class="text-custom-red"><i class="bi bi-award-fill me-2"></i> Excellence</h3>
          <p>We're committed to delivering superior quality in every project, product, and service we provide.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="value-card">
          <h3 class="text-custom-red"><i class="bi bi-people-fill me-2"></i> Collaboration</h3>
          <p>We believe in working closely with our clients as partners to achieve mutual success.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="value-card">
          <h3 class="text-custom-red"><i class="bi bi-arrow-repeat me-2"></i> Adaptability</h3>
          <p>In the fast-changing tech landscape, we remain flexible to meet evolving market demands.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="value-card">
          <h3 class="text-custom-red"><i class="bi bi-heart-fill me-2"></i> Social Responsibility</h3>
          <p>We actively contribute to our community through tech education initiatives and environmental sustainability practices.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Vision -->
<section class="container py-5">
  <div class="row g-5">
    <div class="col-md-6">
      <div class="p-4 border rounded shadow-sm h-100">
        <h3 class="text-custom-red fw-bold mb-4"><i class="bi bi-stars me-2"></i> Our Mission</h3>
        <p class="fs-5">To empower businesses of all sizes with innovative, reliable, and secure IT solutions that drive growth, efficiency, and digital transformation.</p>
        <p>We aim to be the catalyst that helps Nepali businesses compete on a global scale through technology enablement and digital excellence.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="p-4 border rounded shadow-sm h-100">
        <h3 class="text-custom-red fw-bold mb-4"><i class="bi bi-eye-fill me-2"></i> Our Vision</h3>
        <p class="fs-5">To become Nepal's most trusted IT partner, recognized for transforming businesses through innovative technology solutions and exceptional service.</p>
        <p>By 2030, we envision Code Zenith as a regional leader in IT services, contributing significantly to Nepal's position in the global digital economy.</p>
      </div>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center text-custom-red section-title">Meet Our Leadership</h2>
    <p class="text-center lead mb-5">Our talented team combines technical expertise with business acumen to deliver exceptional results.</p>
    
    <div class="row g-4 text-center">
      <div class="col-md-3">
        <div class="team-member">
          <img src="images/team1.jpg" alt="CEO" class="rounded-circle img-fluid shadow mb-3" style="width:150px;height:150px;object-fit:cover;">
          <h5 class="fw-bold text-custom-red">Anish Sharma</h5>
          <h6 class="text-secondary">Founder & CEO</h6>
          <p class="small">10+ years in enterprise software development. MSc in Computer Science.</p>
          <div class="d-flex justify-content-center gap-2">
            <a href="#" class="text-custom-red"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="text-custom-red"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-custom-red"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="team-member">
          <img src="images/team2.jpg" alt="CTO" class="rounded-circle img-fluid shadow mb-3" style="width:150px;height:150px;object-fit:cover;">
          <h5 class="fw-bold text-custom-red">Nisha Thapa</h5>
          <h6 class="text-secondary">Chief Technology Officer</h6>
          <p class="small">Former lead developer at Tech Innovations Nepal. Cloud architecture specialist.</p>
          <div class="d-flex justify-content-center gap-2">
            <a href="#" class="text-custom-red"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="text-custom-red"><i class="bi bi-github"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="team-member">
          <img src="images/team3.jpg" alt="Designer" class="rounded-circle img-fluid shadow mb-3" style="width:150px;height:150px;object-fit:cover;">
          <h5 class="fw-bold text-custom-red">Abishek Dhungana</h5>
          <h6 class="text-secondary">Creative Director</h6>
          <p class="small">Award-winning designer with expertise in UX/UI and brand identity.</p>
          <div class="d-flex justify-content-center gap-2">
            <a href="#" class="text-custom-red"><i class="bi bi-behance"></i></a>
            <a href="#" class="text-custom-red"><i class="bi bi-dribbble"></i></a>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="team-member">
          <img src="images/team4.jpg" alt="Developer" class="rounded-circle img-fluid shadow mb-3" style="width:150px;height:150px;object-fit:cover;">
          <h5 class="fw-bold text-custom-red">Sijan Sigdel</h5>
          <h6 class="text-secondary">Head of Development</h6>
          <p class="small">Full-stack developer with expertise in JavaScript frameworks and cloud solutions.</p>
          <div class="d-flex justify-content-center gap-2">
            <a href="#" class="text-custom-red"><i class="bi bi-github"></i></a>
            <a href="#" class="text-custom-red"><i class="bi bi-stack-overflow"></i></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-5">
      <a href="team.php" class="btn btn-outline-custom-red">View Full Team</a>
    </div>
  </div>
</section>

<!-- Milestones -->
<section class="container py-5">
  <h2 class="text-center text-custom-red section-title">Our Journey in Numbers</h2>
  <div class="row text-center">
    <div class="col-md-3 mb-4">
      <div class="display-4 fw-bold text-custom-red">50+</div>
      <p class="lead">Satisfied Clients</p>
    </div>
    <div class="col-md-3 mb-4">
      <div class="display-4 fw-bold text-custom-red">120+</div>
      <p class="lead">Projects Completed</p>
    </div>
    <div class="col-md-3 mb-4">
      <div class="display-4 fw-bold text-custom-red">15+</div>
      <p class="lead">Team Members</p>
    </div>
    <div class="col-md-3 mb-4">
      <div class="display-4 fw-bold text-custom-red">98%</div>
      <p class="lead">Client Retention</p>
    </div>
  </div>
</section>

<!-- Partnerships -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center text-custom-red section-title">Our Technology Partners</h2>
    <div class="d-flex justify-content-center flex-wrap gap-4 mt-5">
      <img src="https://via.placeholder.com/150x80?text=Microsoft" alt="Microsoft Partner" class="img-fluid">
      <img src="https://via.placeholder.com/150x80?text=Google" alt="Google Partner" class="img-fluid">
      <img src="https://via.placeholder.com/150x80?text=Amazon" alt="AWS Partner" class="img-fluid">
      <img src="https://via.placeholder.com/150x80?text=Adobe" alt="Adobe Partner" class="img-fluid">
      <img src="https://via.placeholder.com/150x80?text=IBM" alt="IBM Partner" class="img-fluid">
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="bg-custom-red text-white py-5 text-center">
  <div class="container py-4">
    <h2 class="display-5 fw-bold mb-3">Ready to Transform Your Business?</h2>
    <p class="fs-5 mb-4">Let's build your next big idea together!</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="contact.php" class="btn btn-light btn-lg px-4">Contact Us</a>
      <a href="services.php" class="btn btn-outline-light btn-lg px-4">Explore Services</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>