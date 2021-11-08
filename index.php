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
$student_sql = 'SELECT * FROM student where center_id = "'.CENTERID.'" ORDER by student_id DESC LIMIT 20';
$result_students = mysqli_query($conn,$student_sql);
$sql = 'select * from center where c_id='.CENTERID;
$result7 = mysqli_query($conn, $sql);
$data7 = mysqli_fetch_assoc($result7);
$code = $data7['branchcode'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
  <title><?=$data['center_name']?></title>
  <meta name="robots" content="index, follow"/>
<meta name="keywords" content="<?=strip_tags($data['keyword_seo'])?>"/>
        <meta name="description" content="<?=strip_tags($data['description_seo'])?>"/>

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

  <section id="hero">
      <?php if($mcount > 0){?>
      <marquee id="top"><?=$data['center_marquee_txt']?></marquee>
      <?php } else { ?>
      <marquee id="top">Demo Computer Center Power by E-Max India recognized by govt of india, AN ISO ISO 9001:2015 &amp; ISO 29990:2010 &amp; ISO 21001:2018 Quality Management System Certification</marquee>
      <?php } ?>
  	<div class="box">
  
  <div class="slider-box" id="sb_1" data-auto-slide="true" data-speed="5000">
    <div class="slider-content">
      <?php 
      $ssql = 'select * from center_websites_sliders where isactive = 1 && cid="'.CENTERID.'"';
      $result = mysqli_query($conn, $ssql);
      $count = mysqli_num_rows($result);
      if($count > 0){
      while($row = mysqli_fetch_assoc($result)){?>
      <div class="slider-item" data-background-url="assets/images/<?php echo $row['slider'];?>">
        <h1 style="color:<?=$row['slider_data_color']?>"><?=$row['slider_data']?></h1>
      <h2 style="color:<?=$row['slider_data_2_color']?>"><?=$row['slider_data_2']?></h2>
      </div>
      <?php } } else {?>
      <div class="slider-item" data-background-url="assets/images/slider2.jpg">
        <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      </div>
      <div class="slider-item" data-background-url="assets/images/slider3.jpg">
        <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      </div>
      
      <?php } ?>

    </div>
    <div class="slider-pagin"></div>
    <div class="slider-fillbar"></div>
    <div class="slider-background"></div>
  </div>
  
</div>
<?php if($mcount > 0){?>
<marquee id="bottom"><?=$data['center_marquee_txt2']?></marquee>
<?php } else { ?>
<marquee id="bottom">Demo Computer Center Power by E-Max India recognized by govt of india, AN ISO ISO 9001:2015 & ISO 29990:2010 & ISO 21001:2018 Quality Management System Certification
</marquee>
<?php } ?>
  </section>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <?php if($mcount == 0){?>
                  <img src="assets/img/about.jpg" class="img-fluid" alt="Emax India">
                  <?php
              }else{ ?>
              <img src="assets/images/<?=$data['home_about_photo']?>" class="img-fluid" alt="<?=$data['center_name']?>">
              <?php
              } ?>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p class="font-italic">
                <?php if($mcount > 0){?>
              <?=$data['about_heading_txt']?>
              <?php } else { ?>
              <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>
              
              <?php } ?>
            </p>
           
            <a href="about.php" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

<?php
$sql = 'select * from center_website_dynamic_fields where isactive=1 && centerid="'.CENTERID.'" LIMIT 6' ;
$result = mysqli_query($conn,$sql);
$fcount = mysqli_num_rows($result);
if($fcount > 0){
while($rowf=mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?=$rowf['field_value']?></span>
            <p><?=$rowf['field_name']?></p>
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

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
                <?php if($mcount > 0){ ?>
              <h3>Why Choose <?=$data['center_name']?>?</h3>
              <?php } else { ?>
              <h3>Why Choose Emax?</h3>
              <?php } ?>
              <p>
                  <?php if($mcount > 0){ ?>
                <?=$data['about_data_main']?>
                <?php } else{ ?>
                                              
<strong>We help you explore your potential:</strong><h3>Skilled Faculty: Here at <strong>DEMO COMPUTER&nbsp;CENTER</strong> , Training is imparted by highly qualified, experienced &amp; dedicated faculty, who are loved by their students.</h3><p>Well Equipped Labs: We have modern state-of-the-art, computer labs comprising hardware configuration powered by latest Processors which are all connected to a network.</p><p>Certification: We offer Duly Accredited and Globally Recognized Certification that works in both the private as well as the Government sector.</p>                              <p></p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            
                <?php } ?>
              </p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <?php
                $hsql = 'SELECT * FROM center_websites_headings where isactive=1 && cid="'.CENTERID.'" LIMIT 6';
                $resulth = mysqli_query($conn, $hsql);
                $hcount = mysqli_num_rows($resulth);
                if($hcount > 0){
                while($rowh=mysqli_fetch_assoc($resulth)){
                ?>
                
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><?=$rowh['heading_name']?></h4>
                    <p><?=$rowh['heading_txt']?></p>
                  </div>
                </div>
                <?php } } else{ ?>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Hardware</h4>
                    <p>Information of hardware gives a deeper border of computer mechanism and peripheral devices.In this course ware study of hardware &amp; computer and linked devices.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Programming with C &amp; C++:</h4>
                    <p>This is a program which leads to make apparent that how software is designed on which user performs task. In this chapter we read reasonable operations just to develop programming skills in a personality</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>NTT (nursery teacher training )</h4>
                    <p>Diploma in Nursery Teacher Training, or short form for NTT is a 1 year diploma course. The main focus of the program is to cater to the training of the nursery (pre-primary) level teacher workforce in India.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Networking</h4>
                    <p>This is about how computer acquire join with each other and how data is transferred from one computer to another computer. It is very much essential to keep data secure and protected so all basic safety events are made clear.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>QUALITY EDUCATION:</h4>
                    <p>Demo Computer Center gives great importance to providing high-quality education to students. By joining a career course with Demo Computer Center, you get: Job fairs, campus placement drives, &amp; Job Info in student ID etc. conducted regularly for students to get job placements on successful course completion.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4> Software</h4>
                    <p>Certificate Computer courses: Candidates can pursue certificate Computer courses, duration of which ranges from one to six months. Some of the popular Course: DCA ADCA, Tally Account, ADFA Many More</p>
                  </div>
                </div>
                
                <?php } ?>
                
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
      	<div class="section-title">
          <p>Recently Joined Students</p>
        </div>
	<div class="row align-items-center">
		<div class="col-12 col-carousel">
			<div class="owl-carousel carousel-main">
			    <?php
			    $scount = mysqli_num_rows($result_students);
			    if($scount > 0){
			    while($row=mysqli_fetch_assoc($result_students)){
			    if($row['studentlogo'] != ''){
			    ?>
				<div><img src="../../exampanel/images/logo/studentlogo/<?=$row['studentlogo']?>" width="250px" height="250px">
				</div>
				<?php } } } else{ ?>
				<div><img src="assets/students/photo_1.jpg?text=Demo"></div>
				<div><img src="assets/students/photo_2.jpg?text=Demo"></div>
				<div><img src="assets/students/photo_3.jpg?text=Demo"></div>
				<div><img src="assets/students/photo_4.jpg?text=Demo"></div>
				<div><img src="assets/students/photo_5.jpg?text=Demo"></div>
				<div><img src="assets/students/photo_6.jpg?text=Demo"></div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">


    <?php
$sql = 'select * from center_websites_courses where isactive=1 && cid='.CENTERID.' LIMIT 6';
$result = mysqli_query($conn,$sql);
$ccount = mysqli_num_rows($result);
if($ccount > 0){
while($row=mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/<?=$row['photo']?>" class="img-fluid course_img" alt="Center Courses">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?=$row['title']?></h4>
                </div>

                <h3><a href="course-details.php?id=<?=$row['id']?>"><?=$row['title']?></a></h3>
                <p><?=$row['detaiils']?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php } } else{ ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/15708104721199888243.png" class="img-fluid course_img" alt="Center Courses">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Advanced Diploma Computer Application ADCA </h4>
                </div>

                <h3><a href="course-details.php?id=13">Advanced Diploma Computer Application ADCA </a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/146341455130900354.png" class="img-fluid course_img" alt="Center Courses">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Nursery Teacher Training (NTT)</h4>
                </div>

                <h3><a href="course-details.php?id=14">Nursery Teacher Training (NTT)</a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/18113783131847121961.png" class="img-fluid course_img" alt="Center Courses">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Diploma and Certificate courses in Yoga</h4>
                </div>

                <h3><a href="course-details.php?id=15">Diploma and Certificate courses in Yoga</a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/790242251865506051.jpg" class="img-fluid course_img" alt="Center Courses">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Fashion Designing Courses </h4>
                </div>

                <h3><a href="course-details.php?id=16">Fashion Designing Courses </a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/10795047471137832146.jpg" class="img-fluid course_img" alt="Center Courses">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4> English Speaking Course </h4>
                </div>

                <h3><a href="course-details.php?id=17"> English Speaking Course </a></h3>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/3805006881699964165.png" class="img-fluid course_img" alt="Center Courses">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Android Training</h4>
                </div>

                <h3><a href="course-details.php?id=18">Android Training</a></h3>
                <p></p>
              </div>
            </div>
          </div>

          

          
          <?php } ?>

          

          

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trainers</h2>
          <p>Our Professional Trainers</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          <?php
$sql = 'select * from center_websites_trainers where isactive=1 && cid='.CENTERID;
$result = mysqli_query($conn,$sql);
$tcount = mysqli_num_rows($result);
if($tcount > 0){
while($row=mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/<?=$row['photo']?>" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4><?=$row['name']?></h4>
                <span><?=$row['title']?></span>
                <p>
                  <?=$row['course_name']?>
                </p>
              </div>
            </div>
          </div>
          <?php } } else{ ?>
          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/8365761961441378703.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>demo 7</h4>
                <span>B Come</span>
                <p>
                  demo 77                </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/14672237121646468654.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>demo 3</h4>
                <span>demo 3333</span>
                <p>
                  demo 33                </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/9497390311150736123.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>demo 5</h4>
                <span>demo 555</span>
                <p>
                  demo 55                </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/4053300451718803519.jpeg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>demo 6</h4>
                <span>demo 666</span>
                <p>
                  demo 66                </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/11358540531181603485.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>demo 9</h4>
                <span>demo 999</span>
                <p>
                  demo 99                </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/18110979672051537.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>demo 6</h4>
                <span>demo 666</span>
                <p>
                  demo 66                </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/5630164891923551937.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>Arti Rana</h4>
                <span>B Come + ADCA</span>
                <p>
                  As a Computer Trainig                 </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/5630164891923551937.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>Arti Rana</h4>
                <span>B Come + ADCA</span>
                <p>
                  As a Computer Trainig                 </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/trainers/18110979672051537.jpg" class="img-fluid" alt="" width="250px" height="250px">
              <div class="member-content">
                <h4>demo 6</h4>
                <span>demo 666</span>
                <p>
                  demo 66                </p>
              </div>
            </div>
          </div>


          <?php } ?>

          

          

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
  <script>
  $(document).ready(function(){
  //
  var $sb = $(".slider-box");

  $sb.each(function(){

    var $this = $(this),
        $sc = $this.find(".slider-content"),
        $si = $sc.find(".slider-item"),
        $sp = $this.find(".slider-pagin"),
        $sfb = $this.find(".slider-fillbar"),
        $sbg = $this.find(".slider-background"),
        currentSlider = 0;

    //Check and return speed
    function speedo(elem){
      let s = elem.data("speed");
        if(s < 1300){
          s = 1300;
          elem.data("speed", s);
          elem.attr("data-speed", s);
        }
      return s;
    }

    //Animation for fill bar
    function animateFillBar(){
      if($sfb != null){
        $sfb.stop().animate({
            width: "0%"
        }, 0, "linear" ).animate({
            width: "100%"
        }, speedo($this), "linear" );
      }
    }
    animateFillBar();


    //Set background if exist
    function changeBackground(){
      if($sbg != null){
        let url = $si.eq(currentSlider).data("background-url");

        $sbg.fadeOut(function(){
          $sbg.css({"background-image":`url(${url})`}).fadeIn();
        });
      }
    }
    changeBackground();


    //Set slider items
    function setSlider(sid){
      animateFillBar();

      $si.removeClass("active");
      $sp.find("li").removeClass("active");

      if(sid==null){
        currentSlider++; 
      }
      else{
        currentSlider = sid;
      }

      if(currentSlider > $si.length-1){
        currentSlider = 0;
      }

      $si.eq(currentSlider).addClass("active");
      $sp.find("li").eq(currentSlider).addClass("active");

      changeBackground();
    }

    //Check if auto-slide is on and set speed animation
    var autoslide = $this.data("auto-slide"), asInterval;
    if(autoslide){
      let speed = speedo($this);
      asInterval = setInterval(setSlider, speed);
    }

    //Generate pagination
    var sii = 0, paginHTML = "";
    paginHTML+="<ul>";
    $si.each(function(){
      if($sp == null) return;
      $(this).attr(`data-id`,sii);
      paginHTML+=`<li><a href="#" data-target="${$this.attr("id")}" data-target-id="${sii}"><span></span></a></li>`;
      sii++;
    });

    paginHTML+="</ul>";
    $sp.append(paginHTML);

    $sp.find("li").eq(0).addClass("active");
    $sp.find("a").each(function(e){

      $(this).on("click",function(){
        setSlider($(this).data("target-id"));

        clearInterval(asInterval);
        let speed = speedo($this);
        asInterval = setInterval(setSlider, speed);

        e.preventDefault;
        return false;
      });
    });
  });
});


$('.carousel-main').owlCarousel({
	items: 4,
	loop: true,
	autoplay: true,
	autoplayTimeout: 1500,
	margin: 10,
	nav: true,
	dots: false,
	navText: ['<span class="fas fa-chevron-left fa-2x"></span>','<span class="fas fa-chevron-right fa-2x"></span>'],
});
  </script>

</body>

</html>
