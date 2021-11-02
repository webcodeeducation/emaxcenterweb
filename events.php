<?php
include 'secret.php';
include '../connection/config.php';
include 'inc/status.php';

$sql = 'select * from center_websites_data where centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
$mcount = mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);
$address = $data['address'];
$top_txt = $data['event_top_text'];

$new_sql = 'select * from center where c_id='. CENTERID;
$result_new = mysqli_query($conn, $new_sql);
$cdata = mysqli_fetch_assoc($result_new);
$center_name = $cdata['centername'];
$code = $cdata['branchcode'];
?>
<!DOCTYPE html>
<html lang="en">

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
            $count = mysqli_num_rows($result_new);
            if($count > 0){
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
          <?php } } else{ ?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/images/17150499991254319139.jpg" alt="            PDP Class                ">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">            PDP Class                </a></h5>
                <p class="font-italic text-center">            15  Nov 2021        </p>
                <p class="card-text">            </p><p>What are personality development classes and how are they helpful?</p><p>1. To overcome fear<br>2. To increase your concentration<br>3. To explore yourself in various fields<br>4. To express your thoughts and behavior in public<br>5. To achieve your goals<br>6. To become smarter<br>7. Guide you in the preparation of Job perspective</p>                <p></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/images/1835036817828971036.jpg" alt="            Live Class 123               ">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">            Live Class 123               </a></h5>
                <p class="font-italic text-center">            Every Sunday 9 AM123                </p>
                <p class="card-text">            </p><h4>Benefits Of Live Classes</h4><ul>	<li>Live and interactive classes</li>	<li>Personal attention and focus</li>	<li>One on one coaching</li>	<li>Recording of classes</li>	<li>Global benchmarking</li>	<li>Time-saving and economical</li>	<li>Proper mentoring and&nbsp;feedback</li>	<li>Quality course material</li>	<li>Doubt solving</li>	<li>Parent’s interaction</li></ul><h4>What Is Live Tutoring?</h4><p>It is a two-way interaction between a student and tutor. With an improvement in technology, students can now study at home accessing varied courses and the best teachers from across the globe. We provide a platform that uses an interactive whiteboard and other great features. It's a combination of a video call and a classroom atmosphere - it's a virtual classroom.123</p>         <p></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/images/2628458341223856212.jpg" alt="Online Exam">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Online Exam</a></h5>
                <p class="font-italic text-center">05 Nov 2022</p>
                <p class="card-text"></p><p>Live Exam Roll Number&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

<p>EMC564151: 9 AM</p>

<p>EMC564152:&nbsp;9 AM</p>

<p>EMC564151:9 AM</p>

<p>EMC564153: 9 AM</p>

<p>EMC564154:&nbsp;9 AM</p>

<p>EMC564155:&nbsp;9 AM</p>

<p>EMC564156:&nbsp;9 AM</p>
<p></p>
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
