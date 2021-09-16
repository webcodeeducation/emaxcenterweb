<?php
include 'secret.php';
include '../connection/config.php';

$sql = 'select * from center_websites_data where centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$address = $data['address'];
$top_txt = $data['event_top_text'];

$new_sql = 'select * from center where c_id='. CENTERID;
$result_new = mysqli_query($conn, $new_sql);
$cdata = mysqli_fetch_assoc($result_new);
$center_name = $cdata['centername'];
$code = $cdata['centercode'];

?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events - <?=$center_name?></title>
  <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="Best Education Institute in <?=$center_name?>"/>
        <meta name="description" content="Top Institute in India <?=$center_name?>"/>

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
</head>

<body>

  <?php include 'inc/header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p><?=$top_txt?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <?php
            $event_sql = 'select * from center_webiste_events where isactive=1 && cid='. CENTERID;
            $result_new = mysqli_query($conn, $event_sql);
            while($row = mysqli_fetch_assoc($result_new)){
          ?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/images/<?=$row['photo']?>" alt="<?=$row['title']?>">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?=$row['title']?></a></h5>
                <p class="font-italic text-center"><?=$row['event_date']?></p>
                <p class="card-text"><?=$row['details']?></p>
              </div>
            </div>
          </div>
          <?php } ?>
          
          
        </div>

      </div>
    </section><!-- End Events Section -->

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

</body>
</html>
</php>
