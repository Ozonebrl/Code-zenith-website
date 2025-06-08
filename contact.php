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
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'byteacademy@gmail.com';
        $mail->Password = 'kvoj ptaq vogq pauh';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('contact.codezenith@gmail.com', 'Code Zenith');
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        // Content
        $mail->isHTML(true);
        $mail->Subject = htmlspecialchars($_POST['subject']);
        $mail->Body    = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> ".htmlspecialchars($_POST['name'])."</p>
            <p><strong>Email:</strong> ".htmlspecialchars($_POST['email'])."</p>
            <p><strong>Subject:</strong> ".htmlspecialchars($_POST['subject'])."</p>
            <p><strong>Message:</strong></p>
            <p>".nl2br(htmlspecialchars($_POST['message']))."</p>
        ";

        $mail->send();
        $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i> Message sent successfully! We\'ll get back to you soon.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    } catch (Exception $e) {
        $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> Mailer Error: '.$mail->ErrorInfo.'
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }
}
?>

<?php include 'header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .contact-hero {
        background: linear-gradient(135deg, #8B0101 0%, #8B0101 100%);
        padding: 5rem 0;
        position: relative;
        overflow: hidden;
    }
    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
        background-size: cover;
    }
    .contact-card {
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        border: none;
    }
    .contact-card:hover {
        transform: translateY(-5px);
    }
    .contact-icon {
        font-size: 2.5rem;
        color: #8B0101;
        margin-bottom: 1rem;
    }
    .form-control:focus {
        border-color: #8B0101;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }
    .btn-danger {
        background-color: #8B0101;
        border: none;
        padding: 10px 25px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .btn-danger:hover {
        background-color: #8B0101;
        transform: translateY(-2px);
    }
    .contact-info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }
    .contact-info-icon {
        font-size: 1.5rem;
        color: #8B0101;
        margin-right: 1rem;
        margin-top: 0.25rem;
    }
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #f8f9fa;
        color: #8B0101;
        border-radius: 50%;
        margin-right: 10px;
        transition: all 0.3s ease;
    }
    .social-icon:hover {
        background: #8B0101;
        color: white;
        transform: scale(1.1);
    }
</style>

<section class="contact-hero text-white">
  <div class="container text-center position-relative">
    <h1 class="fw-bold display-4 mb-3">Let's Connect</h1>
    <p class="lead mb-4">We're here to help and answer any questions you might have. Reach out to us and we'll respond as soon as possible.</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="#contact-form" class="btn btn-light btn-lg px-4">Send Message</a>
      <a href="tel:+9779869141544" class="btn btn-outline-light btn-lg px-4">
        <i class="bi bi-telephone-fill me-2"></i>Call Us
      </a>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h2 class="text-danger mb-3">How Can We Help You?</h2>
        <p class="lead">Whether you have questions about our services, need technical support, or want to discuss a potential project, our team is ready to assist you.</p>
      </div>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 contact-card p-4 text-center">
          <div class="contact-icon">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <h4>Email Us</h4>
          <p class="text-muted">Have questions? Send us an email and we'll get back to you within 24 hours.</p>
          <a href="mailto:contact.codezenith@gmail.com" class="btn btn-outline-danger">contact.codezenith@gmail.com</a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card h-100 contact-card p-4 text-center">
          <div class="contact-icon">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <h4>Call Us</h4>
          <p class="text-muted">Prefer to talk? Give us a call during our business hours (9AM-5PM, Sun-Fri).</p>
          <a href="tel:+9779869141544" class="btn btn-outline-danger">+977-9869141544</a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card h-100 contact-card p-4 text-center">
          <div class="contact-icon">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <h4>Visit Us</h4>
          <p class="text-muted">Our office is located in beautiful Lakeside, Kaski. Come by for a coffee!</p>
          <a href="#map" class="btn btn-outline-danger">View on Map</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container py-5" id="contact-form">
  <div class="row g-5">
    <div class="col-lg-6">
      <div class="pe-lg-4">
        <h2 class="text-danger mb-4">Send Us a Message</h2>
        <?php if (isset($message)) echo $message; ?>
        <form method="POST" action="#contact-form">
          <div class="mb-4">
            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-lg" name="name" placeholder="Your name" required>
          </div>
          <div class="mb-4">
            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
            <input type="email" class="form-control form-control-lg" name="email" placeholder="your.email@example.com" required>
          </div>
          <div class="mb-4">
            <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
            <input type="text" class="form-control form-control-lg" name="subject" placeholder="How can we help?" required>
          </div>
          <div class="mb-4">
            <label for="message" class="form-label">Your Message <span class="text-danger">*</span></label>
            <textarea class="form-control form-control-lg" name="message" rows="6" placeholder="Tell us about your project or inquiry..." required></textarea>
          </div>
          <button type="submit" class="btn btn-danger btn-lg px-4">
            <i class="bi bi-send-fill me-2"></i>Send Message
          </button>
        </form>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="ps-lg-4">
        <h2 class="text-danger mb-4">Our Contact Information</h2>
        <p class="mb-4">Feel free to reach out to us through any of these channels. We're always happy to hear from you!</p>
        
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <h5>Our Location</h5>
            <p class="mb-0">Lakeside, Kaski, Nepal</p>
          </div>
        </div>
        
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div>
            <h5>Phone Number</h5>
            <p class="mb-0">+977-9869141544</p>
            
          </div>
        </div>
        
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <div>
            <h5>Email Address</h5>
            <p class="mb-0">contact.codezenith@gmail.com</p>
           
          </div>
        </div>
        
        <div class="contact-info-item">
          <div class="contact-info-icon">
            <i class="bi bi-clock-fill"></i>
          </div>
          <div>
            <h5>Working Hours</h5>
            <p class="mb-0">Sunday - Friday: 9:00 AM - 5:00 PM</p>
            <p class="mb-0">Saturday: Closed</p>
          </div>
        </div>
        
        <hr class="my-4">
        
        <h5 class="mb-3">Follow Us</h5>
        <div class="d-flex">
          <a href="https://www.facebook.com/profile.php?id=61574696475277" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
          <a href="" class="social-icon"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-github"></i></a>
        </div>
        
        <hr class="my-4" id="map">
        
        <h5 class="mb-3">Find Us on Map</h5>
        <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.876960756346!2d83.98509731507268!3d28.20998238260061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995947a56f4c6b5%3A0x9e1f5b8f6b8f6b8f!2sLakeside%2C%20Pokhara%2033700%2C%20Nepal!5e0!3m2!1sen!2snp!4v1620000000000!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-danger text-white">
  <div class="container text-center">
    <h2 class="mb-4">Still Have Questions?</h2>
    <p class="lead mb-4">Check out our <a href="faq.php" class="text-white fw-bold">FAQ page</a> or browse our <a href="blog.php" class="text-white fw-bold">blog</a> for more information.</p>
    <a href="faq.php" class="btn btn-light btn-lg px-4 me-2">Visit FAQ</a>
    <a href="blog.php" class="btn btn-outline-light btn-lg px-4">Read Blog</a>
  </div>
</section>

<?php include 'footer.php'; ?>