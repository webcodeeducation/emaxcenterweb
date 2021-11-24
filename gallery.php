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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
<?php if($mcount > 0 && !empty($data['center_name'])){ ?>
  <title>Gallery - <?=$data['center_name']?></title>
   <meta name="robots" content="index, follow"/>
<meta name="keywords" content="<?=strip_tags($data['keyword_seo'])?>"/>
        <meta name="description" content="<?=strip_tags($data['description_seo'])?>"/>
        <?php } else { ?>
        <title>Gallery: Demo Computer Training Institute</title>
           <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="computer center near meComputer Training InComputer Center in NTT Center in Best Computer Center in No.1 Computer Center ingovt computer center near mefree govt computer institute near mebest computer center near mecomputer center near me open nowcomputer institute near me for tallyComputer Center list near mecomputer centre near my locationcomputer institute near me for tallybest computer center near meTyping Center Near meADCA DCA Tally Course Near meNTT Course Near MeYoga Course Near meNo.1 Computer Center Near meNo.1 computer center in Computer Training Institutes in Computer Center Latest ReviewsInstitute in E-Max BranchEmax Computer Near meE-Max computer center in no 1 computer"/>
        <meta name="description" content="Demo Computer Center computer center near meComputer Training InComputer Center in NTT Center in Best Computer Center in No.1 Computer Center ingovt computer center near mefree govt computer institute near mebest computer center near mecomputer center near me open nowcomputer institute near me for tallyComputer Center list near mecomputer centre near my locationcomputer institute near me for tallybest computer center near meTyping Center Near meADCA DCA Tally Course Near meNTT Course Near MeYoga Course Near meNo.1 Computer Center Near meNo.1 computer center in Computer Training Institutes in Computer Center Latest ReviewsInstitute in E-Max BranchEmax Computer Near meE-Max computer center in no 1 computer"/>

        <?php } ?>

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
    <!--link rel="stylesheet" href="assets/css/normalize.css"-->
	<!--link rel="stylesheet" href="assets/css/bagpakk.min.css"-->
	<link rel="stylesheet" href="assets/css/gstyle.css">
	<link rel="stylesheet" href="assets/css/swipebox.css">
      
      <style>
    
</style>
</head>

<body>

  <?php include 'inc/header.php'; ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Gallery</h2>
	      <?php if(!empty($data['gallery_top_txt'])){?>
        <p><?=$data['gallery_top_txt']?></p>
	      <?php } else { ?>
	      <p>Our Institute Gallery Developer</p>
	      <?php } ?>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          <!--div class="col-lg-4 col-md-6 d-flex align-items-stretch">
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
</div-->
<div class="col-md-12">
		<div class="wrap">
			<ul id="box-container">
			    <?php
$sql = 'select * from center_webiste_gallery where isactive=1 && cid='.CENTERID;
$result = mysqli_query($conn,$sql);
$gcount = mysqli_num_rows($result);
if($gcount > 0){
while($row=mysqli_fetch_assoc($result)){
?>
				<li class="box">
					<a href="assets/images/<?=$row['photo']?>" class="swipebox" title="<?=$row['title']?>" rel="gallery">
						<img src="assets/images/<?=$row['photo']?>" alt="<?=$row['title']?>" class="mygallery">
					</a>
				</li>
				<?php } } else { ?>
				<li class="box">
					<a href="assets/images/16632916021452709041.jpeg" class="swipebox" title="certificate distribution" rel="gallery">
						<img src="assets/images/16632916021452709041.jpeg" alt="certificate distribution" class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/11265455071531163097.jpeg" class="swipebox" title="Office Photo" rel="gallery">
						<img src="assets/images/11265455071531163097.jpeg" alt="Office Photo" class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/7084170211974315510.jpg" class="swipebox" title="Student " rel="gallery">
						<img src="assets/images/7084170211974315510.jpg" alt="Student " class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/1517071253904835003.jpeg" class="swipebox" title="Calibration " rel="gallery">
						<img src="assets/images/1517071253904835003.jpeg" alt="Calibration " class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/1475024423288341729.jpeg" class="swipebox" title="Certificate Distribute program " rel="gallery">
						<img src="assets/images/1475024423288341729.jpeg" alt="Certificate Distribute program " class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/17692136161992254575.jpeg" class="swipebox" title="Certificate Distribute program " rel="gallery">
						<img src="assets/images/17692136161992254575.jpeg" alt="Certificate Distribute program " class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/3304432862001379262.jpeg" class="swipebox" title="Branch Photo" rel="gallery">
						<img src="assets/images/3304432862001379262.jpeg" alt="Branch Photo" class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/9009285081400624625.jpeg" class="swipebox" title="" rel="gallery">
						<img src="assets/images/9009285081400624625.jpeg" alt="" class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/2668059001501996217.jpeg" class="swipebox" title="" rel="gallery">
						<img src="assets/images/2668059001501996217.jpeg" alt="" class="img-rounded mygallery">
					</a>
				</li>
								<li class="box">
					<a href="assets/images/14508334201289174567.jpeg" class="swipebox" title="" rel="gallery">
						<img src="assets/images/14508334201289174567.jpeg" alt="" class="img-rounded mygallery">
					</a>
				</li>
          
          <?php } ?>
				
			</ul>
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
	<script src="assets/js/jquery.swipebox.js"></script>
	<script type="text/javascript">
	$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			/* Video */
			$( '.swipebox-video' ).swipebox();

			/* Dynamic Gallery */
			$( '#gallery' ).on( 'click', function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'demo/images/big-1.jpg', title : 'My Caption' },
					{ href : 'demo/images/big-2.jpg', title : 'My Second Caption' }
				] );
			} );

			/* Smooth scroll */
			$( '.scroll' ).on( 'click', function () {
				$( 'html, body' ).animate( { scrollTop: $( $( this ).attr('href') ).offset().top - 15 }, 750 ); // Go
				return false;
			});
      } );
	</script>
</body>

</html>
