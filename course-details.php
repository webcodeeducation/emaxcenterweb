<?php
include 'secret.php';
include '../connection/config.php';

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

$id = $_GET['id'];
$sqlc = 'select * from center_websites_courses where id='.$id;
$resultc = mysqli_query($conn, $sqlc);
$course_data = mysqli_fetch_assoc($resultc);
//print_r($course_data);
//die();
?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
  <title>Course Details Page - <?=$data['center_name']?></title>
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

  <?php include 'inc/header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Course Details</h2>
        <p>We mentioned here full course details below. Please check all.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12">
            <img src="assets/images/<?=$course_data['photo']?>" class="img-fluid" alt="">
            <h3><?=$course_data['title']?></h3>
            <p>
              <?=$course_data['details']?>
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    

  </main><!-- End #main -->

  <?php include 'inc/footer.php'; ?>

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

</html>
