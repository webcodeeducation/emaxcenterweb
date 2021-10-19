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

?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
  <title>Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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



      <!--Popup Lightbox CSS-->
      <link href="assets/css/popup-lightbox.css" rel="stylesheet" />
      
      <style>
      /**{ margin: 0; padding: 0;}
      body { background-color: #fafafa; }
      .container { margin: 150px auto; max-width: 960px; text-align: center; }*/
      .img-container {
  margin: 20px;
    display: flex;
    justify-content: space-around;
}

.img-container img {
   width: 250px;
   height: 250px;
   border: 1px solid #ccc;
   border-radius: 5px;
   cursor: pointer;
   -webkit-tap-highlight-color: transparent;
   transition: .3s;
  -webkit-transition: .3s;
  -moz-transition: .3s;

}
.img-container img:hover{
  transform: scale(0.97);
 -webkit-transform: scale(0.97);
 -moz-transform: scale(0.97);
 -o-transform: scale(0.97);
  opacity: 0.75;
 -webkit-opacity: 0.75;
 -moz-opacity: 0.75;
  transition: .3s;
 -webkit-transition: .3s;
 -moz-transition: .3s;
}
</style>
</head>

<body>

  <?php include 'inc/header.php'; ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Gallery</h2>
        <p><?=$data['gallery_top_txt']?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="img-container">
          <?php
$sql = 'select * from center_webiste_gallery where isactive=1 && cid='.CENTERID;
$result = mysqli_query($conn,$sql);
$gcount = mysqli_num_rows($result);
if($gcount > 0){
while($row=mysqli_fetch_assoc($result)){
?>
<img src="assets/images/<?=$row['photo']?>" alt="<?=$row['title']?>" />
          <?php } } else { ?>
          <img src="assets/img/course-1.jpg" alt="" />
          <img src="assets/img/course-1.jpg" alt="" />
          <img src="assets/img/course-1.jpg" alt="" />
          <img src="assets/img/course-1.jpg" alt="" />
          <?php } ?>
</div>
</div>
         
         

          

        </div>

      </div>
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
  <script src="assets/js/jquery.popup.lightbox.js"></script>
      <script>
         $(document).ready(function(){

         $(".img-container").popupLightbox({
          width: 600,
      height: 450
         });


         });
      </script>
</body>

</php>
