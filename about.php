<?php
include 'secret.php';
include '../connection/config.php';
include 'inc/status.php';

$sql = 'select * from center_websites_data where centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$center_name = $data['center_name'];
$address = $data['address'];
$sliders = $data['sliders'];
$students = $data['student_photos'];
$sliders_data = explode(",",$sliders);
$students_data = explode(",",$students);
$sql = 'select * from center where c_id='.CENTERID;
$result7 = mysqli_query($conn, $sql);
$data7 = mysqli_fetch_assoc($result7);
$code = $data7['branchcode'];
?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
  <title>About - <?=$data['center_name']?></title>
   <meta name="robots" content="index, follow"/>
<meta name="keywords" content="Best Education Institute in <?=$data['center_name']?>"/>
        <meta name="description" content="Top Institute in India <?=$data['center_name']?>"/>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

  <?php include 'inc/header.php';?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p><?=$data['about_heading_txt']?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about aboutp">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/<?=$data['about_page_photo']?>" class="img-fluid aboutimg" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p class="font-italic">
              <?=$data['about_data_main']?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

    <?php
$sql = 'select * from center_website_dynamic_fields where centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?=$row['field_value']?></span>
            <p><?=$row['field_name']?></p>
          </div>
          <?php } ?>


        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">


        <?php
        $test_sql= 'select * from center_website_testimonials where cid=' . CENTERID;
        $ss_result = mysqli_query($conn, $test_sql);
        while($row = mysqli_fetch_assoc($ss_result)){
        ?>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/images/<?=$row['photo']?>" class="testimonial-img" alt="">
              <h3><?=$row['name']?></h3>
              <h4><?=$row['job_title']?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?=$row['details']?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <?php } ?>

        

         

          

          

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <?php include 'inc/footer.php';?>

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88401913-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-88401913-1');
</script>
</body>

</php>
</html>
