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

<body class="portfolio-details-page">

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
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `portfolio` WHERE  `portfolio`.`id` = '$id'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);

    $category = $data['category'];
    $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
    $category_result = mysqli_query($con, $category_sql);
    $category_data = mysqli_fetch_assoc($category_result);
  }
  ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Portfolio Details</h1>
              <p class="mb-0">
                These projects are created by me and are here to showcase the expertise in the field of backend development specially with PHP language and its framework - Laravel.
                All these projects have different working structure and different standards of coding is used to understand you more about my experience in the 
                development.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li class="current">Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div>
                  <img src="<?php echo $data['image']?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3><?php echo $data['title']?></h3>
              <ul>
                <li><strong>Category</strong>: <?php echo $category_data['name']?></li>
                <li><strong>Client</strong>: <?php echo $data['client']?></li>
                <li><strong>Project date</strong>: <?php echo date('d M Y', strtotime($data['project_date'])) ?></li>
                <li><strong>Project URL</strong>: <a href="#"><?php echo $data['url']?></a></li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Exercitationem repudiandae officiis neque suscipit</h2>
              <p>
              <?php echo $data['text']?>
              </p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <!-- <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Personal</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
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
          <span>Copyright</span> <strong class="px-1 sitename">Personal</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <?php
          $details = "SELECT * FROM `details` WHERE  `details`.`id` = 1";
          $details_result = mysqli_query($con, $details);
          $details_data = mysqli_fetch_assoc($details_result);
          ?>
          Designed by <a href="<?php echo $details_data['url']?>" target="_blank"><?php echo $details_data['company']?></a>
        </div>
      </div>
    </div>
  </footer> -->

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