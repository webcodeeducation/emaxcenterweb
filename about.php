<?php
include 'secret.php';
include '../connection/config.php';
include 'inc/status.php';
$sql = 'select * from center_websites_data where centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
$mcount = mysqli_num_rows($result);
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
<?php if($mcount > 0){ ?>
  <title>About - <?=$data['center_name']?></title>
   <meta name="robots" content="index, follow"/>
<meta name="keywords" content="<?=strip_tags($data['keyword_seo'])?>"/>
        <meta name="description" content="<?=strip_tags($data['description_seo'])?>"/>
        <?php } else { ?>
        <title>Demo Computer Training Institute</title>
           <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="computer center near meComputer Training InComputer Center in NTT Center in Best Computer Center in No.1 Computer Center ingovt computer center near mefree govt computer institute near mebest computer center near mecomputer center near me open nowcomputer institute near me for tallyComputer Center list near mecomputer centre near my locationcomputer institute near me for tallybest computer center near meTyping Center Near meADCA DCA Tally Course Near meNTT Course Near MeYoga Course Near meNo.1 Computer Center Near meNo.1 computer center in Computer Training Institutes in Computer Center Latest ReviewsInstitute in E-Max BranchEmax Computer Near meE-Max computer center in no 1 computer"/>
        <meta name="description" content="Demo Computer Center computer center near meComputer Training InComputer Center in NTT Center in Best Computer Center in No.1 Computer Center ingovt computer center near mefree govt computer institute near mebest computer center near mecomputer center near me open nowcomputer institute near me for tallyComputer Center list near mecomputer centre near my locationcomputer institute near me for tallybest computer center near meTyping Center Near meADCA DCA Tally Course Near meNTT Course Near MeYoga Course Near meNo.1 Computer Center Near meNo.1 computer center in Computer Training Institutes in Computer Center Latest ReviewsInstitute in E-Max BranchEmax Computer Near meE-Max computer center in no 1 computer"/>

        <?php } ?>

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
    <section id="about" class="about aboutp" style="margin-top: 16px !important;">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
              <?php if($mcount > 0){ ?>
            <img src="assets/images/<?=$data['about_page_photo']?>" class="img-fluid aboutimg" alt="">
            <?php } else {?>
            <img src="assets/img/about.jpg" class="img-fluid" alt="About us">
            <?php } ?>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p class="font-italic">
                <?php if($mcount > 0){ ?>
              <?=$data['about_data_main']?>
              <?php } else {?>
              <p><strong>We help you explore your potential:</strong></p>
              <h3>Skilled Faculty: Here at <strong>DEMO COMPUTER&nbsp;CENTER</strong> , Training is imparted by highly qualified, experienced &amp; dedicated faculty, who are loved by their students.</h3>
            <p>Well Equipped Labs: We have modern state-of-the-art, computer labs comprising hardware configuration powered by latest Processors which are all connected to a network.</p>
            <p>Certification: We offer Duly Accredited and Globally Recognized Certification that works in both the private as well as the Government sector.</p>
              <?php } ?>
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
$dcount = mysqli_num_rows($result);
if($dcount > 0){
while($row=mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?=$row['field_value']?></span>
            <p><?=$row['field_name']?></p>
          </div>
          <?php } } else{ ?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1232</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">64</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">42</span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Trainers</p>
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
        $test_sql= 'select * from center_website_testimonials where isactive = "1" && cid=' . CENTERID;
        $ss_result = mysqli_query($conn, $test_sql);
        $tcount = mysqli_num_rows($ss_result);
        if($tcount > 0){
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
          <?php } } else { ?>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Anita</h3>
              <h4>Job in Demo Company</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <p>I loved the style of teaching of ATC TECHNICAL LEARNING CENTER . I Studied DCA &amp; Java hare &amp; Recommend this institute to everyone who wants to lean Computer Course</p>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Taniya</h3>
              <h4>Job in Demo Company</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <p>The Teaching Style is extremely appreciated and the Online id is Very good in Digital Life</p>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Somya Gupta</h3>
              <h4>Job in Demo Company</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <p>I loved the style of teaching of ATC TECHNICAL LEARNING CENTER . I Studied DCA &amp; Java hare &amp; Recommend this institute to everyone who wants to lean Computer Course.</p>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Nancy</h3>
              <h4>Job in Demo Company</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <p>I loved the style of teaching of ATC TECHNICAL LEARNING CENTER . I Studied DCA &amp; Java hare &amp; Recommend this institute to everyone who wants to lean Computer Course.</p>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Anita</h3>
              <h4>Job in Demo Company</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Way of teaching is good and interactive. Doubts are cleared very efficiently &amp; Methods taught are easy to Learn.
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

</body>

</html>
