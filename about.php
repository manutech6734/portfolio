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

<body class="about-page">

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
          <li><a href="about.php" class="active">About</a></li>
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

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About</h1>
              <p class="mb-0">
              Innovative software developer with some prior organizational experience looking for the next adventure.I’m well-versed in a range of programming languages and have expertise in backend development. I have a Bachelor’s 
              degree in computer applications and am an avid learner. While I love working in software, when not at work, you can find me in the great outdoors.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">
      <style>
        #Profileset{
      background-color: black;
      margin-bottom: 50px;
      height: 90%;
      width: 90%;
        }
      </style>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/manoj3.jpg" class="img-fluid" id="Profileset" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2><?php echo $data['title']?></h2>
            <p class="fst-italic py-3">
              <?php echo $data['slogan']?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday']))?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $data['website']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $data['phone']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $data['city']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $data['age']?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $data['degree']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Certification:</strong> <span><?php echo $data['certification']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $data['email']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                    <?php
                    if($data['freelance'] == 1){
                      echo "Available";
                    }
                    else{
                      echo "Not Available";
                    }
                    ?>
                  </span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            To seek and maintain full time position that offers professional challenges utilizing interpersonal skills, excellent time management and problem-solving sills.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Feedback</h2>
        <div><span>My</span> <span class="description-title">Clients</span></div>
      </div><!-- End Section Title -->
    
        <?php
         $counter = "SELECT * FROM `counter`";
         $counter_result = mysqli_query($con, $counter);
        ?>
        
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
        <?php
         if($counter_result -> num_rows > 0){
          while($row = $counter_result -> fetch_assoc()){
        ?>
          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center mt-5">
            <i class="<?php echo $row['icon']?>"></i>
            <div class="stats-item">
              <span data-purecounter-start="<?php echo $row['pre']?>" data-purecounter-end="<?php echo $row['post']?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><?php echo $row['title']?></p>
            </div>
          </div><!-- End Stats Item -->
        <?php    
          }
         } 
        ?>
        </div>
      </div>

    </section><!-- /Stats Section -->

    

    <!-- Interests Section -->
    <section id="interests" class="interests section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <div><span>My</span> <span class="description-title">expertise</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

        <?php

        $skills = "SELECT * FROM `skills`";
        $skills_result = mysqli_query($con, $skills);

        if($skills_result -> num_rows > 0){
          while($skills_row = $skills_result -> fetch_assoc()){
            ?>
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
             <div class="features-item">
              <i class="<?php echo $skills_row['icon']?>" style="color: #<?php echo $skills_row['color']?>;"></i>  
              <h3><a href="" class="stretched-link"><?php echo $skills_row['title']?></a></h3>
             </div>
            </div><!-- End Feature Item -->
            <?php
          }
        }

        ?>
          
        </div>

      </div>

    </section><!-- /Interests Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div><span>Check my</span> <span class="description-title">Testimonials</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <?php 

            $testimonials = "SELECT * FROM `testimonials`";
            $testimonials_result = mysqli_query($con, $testimonials);

            if($testimonials_result -> num_rows > 0){
              while($testimonials_rows = $testimonials_result -> fetch_assoc()){
            ?>

                <div class="swiper-slide">
                  <div class="testimonial-item" "="">
                    <p>
                    <i class=" bi bi-quote quote-icon-left"></i>
                    <span><?php echo $testimonials_rows['quot']?></span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <img src="<?php echo $testimonials_rows['testi_image']?>" class="testimonial-img" alt="">
                    <h3><?php echo $testimonials_rows['name']?></h3>
                    <h4><?php echo $testimonials_rows['title']?></h4>
                  </div>
                </div><!-- End testimonial item -->

            <?php

              }
            }
            ?>

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

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
          <span>Copyright <span>&#169;</span></span> <strong class="px-1 sitename"><?php echo $data['username']?></strong> <span>All Rights Reserved</span>
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