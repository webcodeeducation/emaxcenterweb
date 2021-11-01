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
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
  <title><?=$data['center_name']?></title>
  <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="Best Education Institute  <?=$data['center_name']?>"/>
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

  <section id="hero">
      <marquee id="top"><?=$data['center_marquee_txt']?></marquee>
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
              <?php if($mcount == 0){?>
                  <img src="assets/img/about.jpg" class="img-fluid" alt="Emax India">
                  ?>
                  
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
                <?=$data['about_heading_txt']?>
                <?php } else{ ?>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
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
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
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
				<div><img src="assets/students/photo_1.jpg?text=1"></div>
				<div><img src="assets/students/photo_2.jpg?text=1"></div>
				<div><img src="assets/students/photo_3.jpg?text=1"></div>
				<div><img src="assets/students/photo_4.jpg?text=1"></div>
				<div><img src="assets/students/photo_5.jpg?text=1"></div>
				<div><img src="assets/students/photo_6.jpg?text=1"></div>
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
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.php">Website Design</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Marketing</h4>
                  <p class="price">$250</p>
                </div>

                <h3><a href="course-details.php">Search Engine Optimization</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Content</h4>
                  <p class="price">$180</p>
                </div>

                <h3><a href="course-details.php">Copywriting</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  
                  
                </div>
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
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
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

</body>

</php>
