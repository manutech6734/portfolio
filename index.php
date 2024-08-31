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

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portfolio.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
    <style>
      #Sizer{
  background-color: black;
  float: right;
  /* float: right; */
  width: 100%;
  height: 120%;
  justify-content: right;
  padding: 10px;
  margin-top: 50px;
  margin-bottom: 0px;
  margin-left: 0px;
  margin-right: 0px;

}
    </style>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div>
        <center><img src="assets/img/manojkhinchi.jpg" alt=""    id="Sizer"></center>
      </div>

      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2><a href="index.php"><?php echo $data['name']?></a></h2>
        <p>I'm a passionate <span class="typed" data-typed-items="<?php echo $data['title']?> "></span><span class="typed-cursor typed-cursor--blink"></span></p>
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

    </section><!-- /Hero Section -->

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
          <span>Copyright <span>&#169;</span></span><strong class="px-1 sitename"><?php echo $data['username']?></strong><span>All Rights Reserved</span>
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