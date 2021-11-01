<?php
include 'secret.php';
include '../connection/config.php';
include 'inc/status.php';

$sql = 'select * from center_websites_data where centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
$mcount = mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);

$new_sql = 'select * from center where c_id='. CENTERID;
$result_new = mysqli_query($conn, $new_sql);
$cdata = mysqli_fetch_assoc($result_new);
$center_name = $cdata['centername'];
$code = $cdata['branchcode'];
$counter2 = 1;
?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
  <title>Trainers</title>
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
  <style>
.showmore{
    display:none !important;
}
.btnShowElements {
    margin-left: 100px;
}
</style>
</head>

<body>

  <?php include 'inc/header.php'; ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Trainers</h2>
        <p><?=$data['trainer_top_txt']?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          
          <?php
$sql = 'select * from center_websites_trainers where isactive=1 && cid='.CENTERID;
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count > 0){
while($row=mysqli_fetch_assoc($result)){
    $counter2 = $counter2 + 1;
?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/<?=$row['photo']?>" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?=$row['name']?></h4>
                <span><?=$row['title']?></span>
                <p>
                  <?=$row['detaiils']?>
                </p>
              </div>
            </div>
          </div>
          <?php } } else{ ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/8365761961441378703.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>demo 7</h4>
                <span>B Come</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/14672237121646468654.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>demo 3</h4>
                <span>demo 3333</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/9497390311150736123.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>demo 5</h4>
                <span>demo 555</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/4053300451718803519.jpeg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>demo 6</h4>
                <span>demo 666</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/11358540531181603485.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>demo 9</h4>
                <span>demo 999</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/18110979672051537.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>demo 6</h4>
                <span>demo 666</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/5630164891923551937.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Arti Rana</h4>
                <span>B Come + ADCA</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/5630164891923551937.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Arti Rana</h4>
                <span>B Come + ADCA</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/18110979672051537.jpg" width="200px" height="200px" class="img-fluid" alt="">
              <div class="member-content">
                <h4>demo 6</h4>
                <span>demo 666</span>
                <p>
                                  </p>
              </div>
            </div>
          </div>
          

          
          <?php } ?>

         
         

          

        </div>

      </div>
      <!--button class="btn btn-primary btnShowElements">Show More</button-->
    </section><!-- End Trainers Section -->

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
<script>
    $(document).ready(function () {
});
</script>
</body>

</php>
