<?php if($mcount > 0) { ?>
      <a href="https://api.whatsapp.com/send?phone=<?=$data['whatsapp']?>&text=Hello%21%20Team%20m%C3%A1s%20" class="whatfloat" target="_blank">
<i class="fa fa-whatsapp what-float"></i>
</a>
      <?php } else { ?>
      <a href="https://api.whatsapp.com/send?phone=+911234567890&text=Hello%21%20Team%20m%C3%A1s%20" class="whatfloat" target="_blank">
<i class="fa fa-whatsapp what-float"></i>
</a>
      <?php } ?>


<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
              <?php if($mcount > 0) { ?>
      <h3><?=$center_name?></h3>
      <p>
              <?=$address?><br><br>
              <strong>Phone:</strong> <?=$data['phone']?><br>
              <strong>Email:</strong> <?=$data['email']?><br>
            </p>
      <?php } else { ?>
      <h3>Emax Education India</h3>
      <p>
              Emax Education India Kurukshetra, HR (India)<br><br>
              <strong>Phone:</strong> +91 1234567890<br>
              <strong>Email:</strong> info@emaxindia.in<br>
            </p>
      <?php } ?>
            
            
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trainers.php">Trainers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="terms.php">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="policy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Login Panel</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://emaxindia.in/exampanel/student/index.php">Student Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://emaxindia.in/exampanel/center/index.php">Center Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://emaxindia.in/exampanel/student/studentverification.php">Student Verification</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://emaxindia.in/exampanel/student/getcertificate.php">Student Certificate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://emaxindia.in/exampanel/center/index.php">Center Login</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Give us your email id and get latest news from our side.</p>
            <form action="forms/subscribe.php" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Emax Education</span></strong>. All Rights Reserved <b>Code</b>: <?=$code?>
        </div>
        <div class="credits">
          Designed by <a href="https://emaxindia.in/">Emax Education</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <?php if($mcount > 0) { ?>
      <a href="<?=$data['twitter']?>" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="<?=$data['facebook']?>" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="<?=$data['instagram']?>" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="<?=$data['google']?>" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
        <a href="<?=$data['linkedin']?>" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
      <?php } else { ?>
      <a href="#" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
      <?php } ?>
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88401913-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-88401913-1');
</script>
