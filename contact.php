<?php 
include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data  = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $data['name']?> - <?php echo $data['title']?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portfolio.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contact</h1>
              <p class="mb-0">
                All the information provided below are verified and are original details of the developer of this portfolio.
                Details are provided for the better connection and need of any information regarding these kind of projects for clients.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p><?php echo $data['address']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Me</h3>
                <p><?php echo $data['phone']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><?php echo $data['email']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Social Profiles</h3>
                <div class="social-links">
                  <?php
                  if($data['facebook']){
                  ?>
                  <a href="<?php echo $data["facebook"]?>" target="_blank"><i class="bi bi-facebook"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if($data['instagram']){
                  ?>
                  <a href="<?php echo $data["instagram"]?>" target="_blank"><i class="bi bi-instagram"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if($data['skype']){
                  ?>
                  <a href="<?php echo $data["skype"]?>" target="_blank"><i class="bi bi-skype"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if($data['linkedin']){
                  ?>
                  <a href="<?php echo $data["linkedin"]?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if($data['youtube']){
                  ?>
                  <a href="<?php echo $data["youtube"]?>" target="_blank"><i class="bi bi-youtube"></i></a>
                  <?php
                  }
                  ?>
                  <?php
                  if($data['github']){
                  ?>
                  <a href="<?php echo $data["github"]?>" target="_blank"><i class="bi bi-github"></i></a>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <?php
         if(isset($_POST['send_message'])){
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO  `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
         }
        ?>
        <form action="index.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-12 text-center"><button type="submit" name="send_message">Send Message</button></div>
          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename"></h3>
      <p>This is a dynamic portfolio of a Backend developer with the skills in PHP and framework - Laravel with Mysql Database.</p>
      <div class="social-links d-flex justify-content-center">
      <?php
          if($data['facebook']){
          ?>
            <a href="<?php echo $data["facebook"]?>" target="_blank"><i class="bi bi-facebook"></i></a>
          <?php
          }
          ?>
          <?php
          if($data['instagram']){
          ?>
            <a href="<?php echo $data["instagram"]?>" target="_blank"><i class="bi bi-instagram"></i></a>
          <?php
          }
          ?>
          <?php
          if($data['skype']){
          ?>
            <a href="<?php echo $data["skype"]?>" target="_blank"><i class="bi bi-skype"></i></a>
          <?php
          }
          ?>
          <?php
          if($data['linkedin']){
          ?>
            <a href="<?php echo $data["linkedin"]?>" target="_blank"><i class="bi bi-linkedin"></i></a>
          <?php
          }
          ?>
          <?php
          if($data['youtube']){
          ?>
            <a href="<?php echo $data["youtube"]?>" target="_blank"><i class="bi bi-youtube"></i></a>
          <?php
          }
          ?>
          <?php
          if($data['github']){
          ?>
            <a href="<?php echo $data["github"]?>" target="_blank"><i class="bi bi-github"></i></a>
          <?php
          }
          ?>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright <span>&#169;</span></span> <strong class="px-1 sitename"><?php echo $data["username"]?></strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <?php
          $details = "SELECT * FROM `details` WHERE  `details`.`id` = 1";
          $details_result = mysqli_query($con, $details);
          $details_data = mysqli_fetch_assoc($details_result);
          ?>
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="<?php echo $details_data['url']?>" target="_blank"><?php echo $details_data['company']?></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>