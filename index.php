<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dancel Manalili | Web Developer</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">DBM.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav gap-2">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="asset/resume.pdf">Resume</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero text-white text-center py-5">
  <div class="container" data-aos="fade-up">
    <h1 class="display-4 fw-bold">Dancel Manalili</h1>
    <p class="lead">Web Developer & IT Specialist</p>
    <div class="social-links mt-3 d-flex justify-content-center gap-4">
      <a href="https://github.com/Bryandancel" class="text-white fs-4" target="_blank" rel="noopener">
        <i class="fab fa-github"></i>
      </a>
      <a href="https://www.linkedin.com/in/dancel-manalili-27532b31b/" class="text-white fs-4" target="_blank" rel="noopener">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://www.facebook.com/yourprofile" class="text-white fs-4" target="_blank" rel="noopener">
        <i class="fab fa-facebook"></i>
      </a>
    </div>
  </div>
  <svg class="wave-divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#f8f9fa" d="M0,64L1440,0L1440,0L0,0Z"></path></svg>
</section>

<!-- About -->
<section class="section bg-light about text-center" id="about">
  <div class="container" data-aos="fade-up">
    <h2>About Me</h2>
    <p class="mt-3">I’m an IT passionate about building responsive, accessible, and creative websites using PHP, Bootstrap, and modern tools.</p>
  </div>
</section>

<!-- Projects -->
<section class="section projects" id="projects">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-5">Projects</h2>
    <div class="row g-4">

      <!-- Agri Farm -->
      <div class="col-md-6">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h5 class="card-title">Agri Farm E-Commerce Platform</h5>
            <p>Farm product selling platform with analytics dashboard.</p>
            <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#agriFarmModal">View</button>
          </div>
        </div>
      </div>

      <!-- Portfolio Website -->
      <div class="col-md-6">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h5 class="card-title">Portfolio Website</h5>
            <p>Personal web portfolio using PHP, Bootstrap, and scroll animations.</p>
            <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#portfolioModal">View</button>
          </div>
        </div>
      </div>

   
</section>

<!-- Agri Farm Modal -->
<div class="modal fade" id="agriFarmModal" tabindex="-1" aria-labelledby="agriFarmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agri Farm E-Commerce Platform</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-start">
        <p>This system allows users to shop for agricultural products online while giving farm admins access to sales reports and customer analytics.</p>
        <ul>
          <li>Built using PHP and phpMyAdmin (MySQL)</li>
          <li>Uses Bootstrap for responsive UI</li>
          <li>Includes data visualization (e.g., sales, inventory, orders)</li>
          <li>Chat Box and Share Location</li>
        </ul>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary" target="_blank">View Site</a>
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
  <!-- Portfolio Modal -->
  <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Portfolio Website</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
        <div class="modal-body text-start">
        <p>Clean and responsive personal portfolio site showcasing projects and contact form.</p>
        <ul>
          <li>Built using PHP, HTML/CSS, and Bootstrap 5</li>
          <li>Includes AOS animations</li>
          <li>Responsive layout and smooth navigation</li>
        </ul>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary" target="_blank">View Site</a>
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
  

<!-- Contact -->
<section class="section contact bg-light text-center" id="contact">
  <div class="container" data-aos="fade-up">
    <h2>Contact Me</h2>
    <form method="POST" action="" class="mt-4" style="max-width: 600px; margin: auto;">
      <div class="mb-3 text-start">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="name" required>
      </div>
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3 text-start">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
      </div>
      <button type="submit" name="contact_btn" class="btn btn-primary px-5 py-2">Send Message</button>
    </form>

    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_btn'])) {
        $name = htmlspecialchars($_POST['name'] ?? '');
        $email = htmlspecialchars($_POST['email'] ?? '');
        $message = htmlspecialchars($_POST['message'] ?? '');

        echo '<div class="alert alert-success mt-4" role="alert">';
        echo "Hi <strong>$name</strong>, thank you for your message! I'll get back to you at <strong>$email</strong>.";
        echo '</div>';
      }
    ?>
  </div>
</section>

<!-- Footer -->
<footer class="footer text-white text-center py-3">
  <div class="container">
    &copy; 2025 Dancel Manalili. All rights reserved.
  </div>
</footer>

<!-- Scroll to Top -->
<a href="#" class="btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle shadow" id="scrollTopBtn" style="display:none;">
  <i class="fas fa-chevron-up"></i>
</a>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
  const scrollTopBtn = document.getElementById("scrollTopBtn");
  window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      scrollTopBtn.style.display = "block";
    } else {
      scrollTopBtn.style.display = "none";
    }
  };
</script>
</body>
</html>
