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
$student_sql = 'SELECT * FROM student where center_id = "'.CENTERID.'" ORDER by student_id DESC LIMIT 20';
$result_students = mysqli_query($conn,$student_sql);
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
  <title><?=$data['center_name']?></title>
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
  <style>

  </style>
</head>

<body>

<?php include 'inc/header.php';?>

  <section id="hero">
      <marquee id="top"><?=$data['center_marquee_txt']?></marquee>
  	<div class="box">
  
  <div class="slider-box" id="sb_1" data-auto-slide="true" data-speed="5000">
    <div class="slider-content">
      <?php 
      $ssql = 'select * from center_websites_sliders where isactive = 1 && cid="'.CENTERID.'"';
      $result = mysqli_query($conn, $ssql);
      while($row = mysqli_fetch_assoc($result)){?>
      <div class="slider-item" data-background-url="assets/images/<?php echo $row['slider'];?>">
        <h1 style="color:<?=$row['slider_data_color']?>"><?=$row['slider_data']?></h1>
      <h2 style="color:<?=$row['slider_data_2_color']?>"><?=$row['slider_data_2']?></h2>
      </div>
      <?php } ?>

    </div>
    <div class="slider-pagin"></div>
    <div class="slider-fillbar"></div>
    <div class="slider-background"></div>
  </div>
  
</div>
<marquee id="bottom"><?=$data['center_marquee_txt2']?></marquee>
  </section>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/<?=$data['home_about_photo']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <!--h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3-->
            <p class="font-italic">
              <?=$data['about_heading_txt']?>
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
$sql = 'select * from center_website_dynamic_fields where isactive=1 && centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
while($rowf=mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?=$rowf['field_value']?></span>
            <p><?=$rowf['field_name']?></p>
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
              <h3>Why Choose <?=$data['center_name']?>?</h3>
              <p>
                <?=$data['about_heading_txt']?>
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
                $hsql = 'SELECT * FROM center_websites_headings where cid='.CENTERID;
                $resulth = mysqli_query($conn, $hsql);
                while($rowh=mysqli_fetch_assoc($resulth)){
                ?>
                
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><?=$rowh['heading_name']?></h4>
                    <p><?=$rowh['heading_txt']?></p>
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
			    while($row=mysqli_fetch_assoc($result_students)){
			    if($row['studentlogo'] != ''){
			    ?>
				<div><img src="../../exampanel/images/logo/studentlogo/<?=$row['studentlogo']?>" width="250px" height="250px"></div>
				<?php } } ?>
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
$sql = 'select * from center_websites_courses where isactive=1 && cid='.CENTERID;
$result = mysqli_query($conn,$sql);
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
