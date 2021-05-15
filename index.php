<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Traction #48</title>
  
  <link href="assets/img/t46.png" rel="icon">
  <link href="assets/img/t46.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/mainstyle.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">
</head>

<body>
   <!-- ======= Header ======= --> 
      
  <header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-lg-between">
    <? include "includes/header.php"?>
    <a href="blogs.php" class="get-started-btn scrollto">BLOGS</a>
  </div>
  </header>


  <!-- ======= Home Section ======= -->
  <? include "includes/home.php"?>

  <main id="main">

    <!-- ======= RE Section ======= -->
      <? include "includes/re-details.php"?>
    <!-- ======= Bike Logos ======= -->
    <section id="clients" class="clients">
      <div class="container">
       <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide" style="width: 25% !important;"><img src="assets/img/RE/Logo/himalayan.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" style="width: 25% !important;"><img src="assets/img/RE/Logo/classic.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" style="width: 25% !important;"><img src="assets/img/RE/Logo/standard.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" style="width: 25% !important;"><img src="assets/img/RE/Logo/gt.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" style="width: 25% !important;"><img src="assets/img/RE/Logo/interceptor.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide" style="width: 25% !important;"><img src="assets/img/RE/Logo/meteor.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
     </div>
    </section>
    <!-- ======= Rides Section ======= -->
    <? include "includes/rides.php"?>

    <!-- ======= Customization quote ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Art of Customization</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Explore</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Customized Section ======= -->
    <? include "includes/custmzd.php"?>

    <!-- ======= News and updates Section ======= -->
    <? include "includes/news.php"?>

    <!-- ======= About Section ======= -->
    <?include "includes/about.php"?>

    <!-- ======= Contact Section ======= -->
    <?include "includes/contact.php"?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <? include "includes/footer.php"?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>