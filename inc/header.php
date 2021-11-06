<?php
$url = $_SERVER['REQUEST_URI'];
?>
<div class="headtoppart bg-white clearfix">
				    	<div class="headerwp clearfix">
				    	    <div class="topbar">
				     		<div class="headertopleft">			     			
				        		<div class="header-info clearfix">
				        		    <?php if($mcount > 0) { ?>
      <i class="fa fa-phone"></i><a href="tel:<?=$data['phone']?>" class="callusbtn txt-400"><?=$data['phone']?></a>
						    	<i class="fa fa-phone"></i><a href="tel:+<?=$data['whatsapp']?>" class="callusbtn b-right txt-400"><?=$data['whatsapp']?></a>
						    	<i class="fa fa-envelope"></i><a href="mailto:<?=$data['email']?>" class="txt-400"><?=$data['email']?></a>
      <?php } else { ?>
      <i class="fa fa-phone"></i><a href="tel:+911234567890" class="callusbtn txt-400">+911234567890</a>
						    	<i class="fa fa-phone"></i><a href="tel:+911234567890" class="callusbtn b-right txt-400">+911234567890</a>
						    	<i class="fa fa-envelope"></i><a href="mailto:info@emaxindia.in" class="txt-400">info@emaxindia.in</a>
      <?php } ?>
				        		    
				        			 
				            	</div>
				     		</div>
						    <div class="headertopright header-contacts">		<?php if($mcount > 0) { ?>
      <span class="txt-400"><i class="fa fa-map-marker"></i> <?=$data['address']?></span>
      Code: <?=$code?>
      <?php } else { ?>
      <span class="txt-400"><i class="fa fa-map-marker"></i> Demo Computer Institute, HR (India)</span>
      <?php } ?>	
						    
	Code: EMAX10001
					      	</div>
					      	</div>
					      


					    </div>
				  	</div>
  <header id="header" class="fixed-top">
    <div class="container align-items-center">
		     <div class="mylogo">
		         <?php if($mcount > 0) { ?>
      <a href="index.php" class="logo mr-auto"><img src="assets/images/<?=$data['center_logo']?>" alt="" class="img-fluid1"></a>
      <?php } else { ?>
      <a href="index.php" class="logo mr-auto"><img src="assets/img/emaxlogo.png" alt="" class="img-fluid1"></a>
      <?php } ?>
				    	    </div>
		    <div id="site-branding">
		        <div id="site-detail">				<h1 id="site-title"> 		<?php if($mcount > 0) { ?>
      <a href="index.php" title="<?=$data['center_name']?>" rel="home"><?=$data['center_name']?></a>
      <?php } else { ?>
      <a href="index.php" title="Emax Education India" rel="home">Demo Computer Institute</a>
      <?php } ?>		
		        
								</h1>  <!-- end .site-title -->
									<div id="site-description"><?=$data['center_name2']?> </div> <!-- end #site-description -->
		</div></div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li <?php if(basename($url) == 'index.php') { echo 'class="active"';}?>><a href="index.php">Home</a></li>
          <li <?php if(basename($url) == 'about.php') { echo 'class="active"';}?>><a href="about.php">About</a></li>
          <li <?php if(basename($url) == 'courses.php') { echo 'class="active"';}?>><a href="courses.php">Courses</a></li>
          <li <?php if(basename($url) == 'trainers.php') { echo 'class="active"';}?>><a href="trainers.php">Trainers</a></li>
          <li <?php if(basename($url) == 'events.php') { echo 'class="active"';}?>><a href="events.php">Events</a></li>
          <li <?php if(basename($url) == 'gallery.php') { echo 'class="active"';}?>><a href="gallery.php">Gallery</a></li>
          <li <?php if(basename($url) == 'contact.php') { echo 'class="active"';}?>><a href="contact.php">Contact</a></li>
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
          <li><a href="https://emaxindia.in/exampanel/admission_form.php?cid=<?php echo base64_encode('center_'.CENTERID.'_id')?>=" class="get-started-btn" target="_blank">Online Admission</a></li>
        </ul>
      </nav>

      
    </div>
  </header><!-- End Header -->
