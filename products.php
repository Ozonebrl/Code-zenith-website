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
  .card:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
  }
  .hero-section {
    background-color: #8B0101;
    color: white;
    padding: 80px 0;
  }
  .product-card {
    border-radius: 10px;
    overflow: hidden;
    border: none;
  }
  .product-card img {
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  .product-card:hover img {
    transform: scale(1.05);
  }
  .price-tag {
    font-size: 1.2rem;
    color: #8B0101;
    font-weight: bold;
  }
  .section-title {
    position: relative;
    margin-bottom: 3rem;
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
<section class="hero-section">
  <div class="container text-center">
    <h1 class="fw-bold mb-3">Explore Our Products</h1>
    <p class="lead">Top quality computer components, gadgets, and accessories at the best prices.</p>
  </div>
</section>

<!-- Featured Products -->
<section class="container py-5">
  <h2 class="text-custom-red text-center section-title">Featured Products</h2>
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-lg-3 col-md-6">
      <div class="card h-100 product-card shadow-sm">
        <div class="overflow-hidden">
          <img src="images/laptop.jpg" class="card-img-top" alt="Laptop">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title text-custom-red">Laptop i5 12th Gen</h5>
          <p class="card-text text-muted">8GB RAM, 512GB SSD, Win 11</p>
          <p class="price-tag">Rs. 85,000</p>
          <a href="#" class="btn btn-custom-red">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-lg-3 col-md-6">
      <div class="card h-100 product-card shadow-sm">
        <div class="overflow-hidden">
          <img src="images/monitor.jpg" class="card-img-top" alt="Monitor">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title text-custom-red">Gaming Monitor</h5>
          <p class="card-text text-muted">27" Full HD, 144Hz, IPS Display</p>
          <p class="price-tag">Rs. 25,000</p>
          <a href="#" class="btn btn-custom-red">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-lg-3 col-md-6">
      <div class="card h-100 product-card shadow-sm">
        <div class="overflow-hidden">
          <img src="images/keyboard.jpg" class="card-img-top" alt="Keyboard">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title text-custom-red">Mechanical Keyboard</h5>
          <p class="card-text text-muted">RGB Backlit, Blue Switches</p>
          <p class="price-tag">Rs. 4,500</p>
          <a href="#" class="btn btn-custom-red">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-lg-3 col-md-6">
      <div class="card h-100 product-card shadow-sm">
        <div class="overflow-hidden">
          <img src="images/headphone.jpg" class="card-img-top" alt="Headphone">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title text-custom-red">Wireless Headphones</h5>
          <p class="card-text text-muted">Noise Cancellation, 40hr battery</p>
          <p class="price-tag">Rs. 6,200</p>
          <a href="#" class="btn btn-custom-red">Add to Cart</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Top Selling Products -->
<section class="container py-5 bg-light">
  <div class="container">
    <h2 class="text-custom-red text-center section-title">Top Selling Products</h2>
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 product-card shadow-sm">
          <div class="overflow-hidden">
            <img src="images/mouse.jpg" class="card-img-top" alt="Gaming Mouse">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title text-custom-red">Gaming Mouse</h5>
            <p class="card-text text-muted">Adjustable DPI, RGB Lighting</p>
            <p class="price-tag">Rs. 1,200</p>
            <a href="#" class="btn btn-custom-red">Add to Cart</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 product-card shadow-sm">
          <div class="overflow-hidden">
            <img src="images/router.jpg" class="card-img-top" alt="WiFi Router">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title text-custom-red">WiFi Router</h5>
            <p class="card-text text-muted">Dual Band, 5GHz + 2.4GHz</p>
            <p class="price-tag">Rs. 3,800</p>
            <a href="#" class="btn btn-custom-red">Add to Cart</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 product-card shadow-sm">
          <div class="overflow-hidden">
            <img src="images/ssd.jpg" class="card-img-top" alt="SSD Drive">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title text-custom-red">SSD 500GB</h5>
            <p class="card-text text-muted">NVMe, Ultra-fast boot</p>
            <p class="price-tag">Rs. 7,500</p>
            <a href="#" class="btn btn-custom-red">Add to Cart</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 product-card shadow-sm">
          <div class="overflow-hidden">
            <img src="images/printer.jpg" class="card-img-top" alt="Printer">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title text-custom-red">All-in-One Printer</h5>
            <p class="card-text text-muted">Print, Scan, Copy – Compact size</p>
            <p class="price-tag">Rs. 9,900</p>
            <a href="#" class="btn btn-custom-red">Add to Cart</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- New Arrivals -->
<section class="container py-5">
  <h2 class="text-custom-red text-center section-title">New Arrivals</h2>
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-lg-3 col-md-6">
      <div class="card h-100 product-card shadow-sm">
        <div class="overflow-hidden">
          <img src="images/tablet.jpg" class="card-img-top" alt="Tablet">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title text-custom-red">Android Tablet</h5>
          <p class="card-text text-muted">10.1" Display, 4GB RAM, 64GB Storage</p>
          <p class="price-tag">Rs. 18,000</p>
          <a href="#" class="btn btn-custom-red">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Add more product cards as needed -->

  </div>
</section>

<?php include 'footer.php'; ?>