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

<body class="resume-page">

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
          <li><a href="resume.php" class="active">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
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
              <h1>Resume</h1>
              <p class="mb-0">
              To seek and maintain full time position that offers professional challenges utilizing interpersonal skills, excellent time management and problem-solving sills.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Resume</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <?php
      $education = "SELECT * FROM `education`";
      $education_result = mysqli_query($con, $education);
      ?>

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4><?php echo $data['name']?></h4>
              <p><em><?php echo $data['bio_text']?></em></p>
              <ul>
                <li><?php echo $data['address']?></li>
                <li><?php echo $data['phone']?></li>
                <li><?php echo $data['email']?></li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <?php
            if($education_result -> num_rows > 0){
              while($education_data = $education_result->fetch_assoc()){
            ?>
              <div class="resume-item">
                <h4><?php echo $education_data['college_degree'] ?></h4>
                <h5><?php echo $education_data['edu_date1'] ?> - <?php echo $education_data['edu_date2'] ?></h5>
                <p><em><?php echo $education_data['college'] ?> - <?php echo $education_data['college_address'] ?></em></p>
                <p><?php echo $education_data['edu_text'] ?></p>
              </div><!-- Edn Resume Item -->
            <?php
              }
            }
            ?>
            
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <?php
            $experience = "SELECT * FROM `experience`";
            $experience_result = mysqli_query($con, $experience);
            ?>
            <h3 class="resume-title">Professional Experience</h3>
            <?php
            if($experience_result -> num_rows > 0){
              while($experience_data = $experience_result->fetch_assoc()){
            ?>
                <div class="resume-item">
                  <h4><?php echo $experience_data['role'] ?></h4>
                  <h5><?php echo $experience_data['exp_date1'] ?> - <?php echo $experience_data['exp_date2'] ?></h5>
                  <p><em><?php echo $experience_data['company'] ?> - <?php echo $experience_data['company_address'] ?></em></p>
                  <ul>
                  <?php echo $experience_data['exp_text'] ?>
                  </ul>
                </div><!-- Edn Resume Item -->
            <?php
              }
            }
            ?>
            
          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

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