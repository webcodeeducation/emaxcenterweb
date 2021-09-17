  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php"><?=$data['center_name']?></a><strong><?=$data['center_name2']?></strong></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo mr-auto"><img src="assets/images/<?=$data['center_logo']?>" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="drop-down"><a href="">Usefull Links</a>
            <ul>
              <li><a href="https://emaxindia.in/exampanel/student/index.php" target="_blank">Student Login</a></li>
              <li><a href="https://emaxindia.in/exampanel/center/index.php" target="_blank">Center Login</a></li>
              <li><a href="https://emaxindia.in/exampanel/student/studentverification.php" target="_blank">Student Verification</a></li>
              <li><a href="https://emaxindia.in/exampanel/student/getcertificate.php" target="_blank">Student Certificate</a></li>
              <li><a href="https://emaxindia.in/exampanel/center/index.php" target="_blank">Center Login</a></li>
              <li><a href="https://emaxindia.in/exampanel/user-center/login.php" target="_blank">Teacher Login</a></li>
              <li><a href="https://emaxindia.in/exampanel/center/center_certificate_verification.php" target="_blank">Top Center Verification</a></li>
              <li><a href="https://emaxindia.in/exampanel/student/confirmwebinar.php" target="_blank">Webinar Verify</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="https://emaxindia.in/exampanel/admission_form.php?cid=<?php echo base64_encode('center_'.CENTERID.'_id')?>=" class="get-started-btn" target="_blank">Online Admission</a>

    </div>
  </header><!-- End Header -->
