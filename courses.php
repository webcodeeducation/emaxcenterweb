<?php
include 'secret.php';
include '../connection/config.php';
include 'inc/status.php';

$sql = 'select * from center_websites_data where centerid='.CENTERID;
$result = mysqli_query($conn,$sql);
$mcount = mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);
$top_txt = $data['course_page_top_txt'];
$sql = 'select * from center where c_id='.CENTERID;
$result7 = mysqli_query($conn, $sql);
$data7 = mysqli_fetch_assoc($result7);
$code = $data7['branchcode'];

$counter = 1;
?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="google-site-verification" content="ComQ2SdK2WR56w1Ik7Rg0EaLEzm2qPkMIlJb7hYso8c" />
  <title>Courses - <?=$data['center_name']?></title>
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
        <h2>Courses</h2>
        <?php if($mcount > 0){?>
        <p><?=$top_txt?></p>
        <?php } else{ ?>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        <?php } ?>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          
          <?php
$sql = 'select * from center_websites_courses where isactive=1 && cid='.CENTERID;

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count > 0){
while($row=mysqli_fetch_assoc($result)){
$counter = $counter + 1;
?>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/<?=$row['photo']?>" class="img-fluid course_img" alt="<?=$row['title']?>" width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?=$row['title']?></h4>
                </div>

                <h3><a href="course-details.php?id=<?=$row['id']?>"><?=$row['title']?></a></h3>
                <a href="course-details.php?id=<?=$row['id']?>" class="show_hide123">Read More</a>
                <!--div class="content"><p><?=$row['details']?></p></div-->
                
                
              </div>
              
            
            </div>
          </div> <!-- End Course Item-->
        <?php  } } else { ?>
    
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/15708104721199888243.png" class="img-fluid course_img" alt="Advanced Diploma Computer Application ADCA " width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Advanced Diploma Computer Application ADCA </h4>
                </div>

                <h3><a href="course-details.php?id=13">Advanced Diploma Computer Application ADCA </a></h3>
                <a href="course-details.php?id=13" class="show_hide123">Read More</a>
                <!--div class="content"><p><h2>Best Advanced Diploma Computer Application ADCA&nbsp; Training in India</h2>

<p>We&nbsp; provide training which is live projects based training on Java which creates confidence in students. We Invite you to attend Demo Class, absolutely&nbsp;<strong>Free</strong>. We are Happy to guide you Step by Step regarding this job oriented Course and job Placement Benefits After Completing the Course.</p>

<h2>Advanced Diploma Computer Application ADCA&nbsp;one year diploma course to study computer</h2>

<p><strong>Course Fee</strong>&lrm;: &lrm;INR 5,000 &ndash; 20,000</p>

<p><strong>Duration</strong>&lrm;: &lrm;6-12 months</p>

<p><strong>Admission Process</strong>&lrm;: &lrm;Direct admission in E-Max Branch</p>

<p><strong>Eligibility</strong>&lrm;: &lrm;10+2 from&nbsp;</p>

<h5>Advanced Diploma Computer Application ADCA&nbsp; STUDIO</h5>

<ul>
	<li>Forms, Database</li>
	<li>Operating System</li>
	<li>Basic Concepts of Accounts</li>
	<li>Work-Sheets</li>
	<li>Docs-Word</li>
	<li>Slides-PowerPoint</li>
	<li>FRONT PAGE</li>
	<li>Complete Internet</li>
	<li>Photo Editing Softwares</li>
	<li>Computer Fundamentals</li>
	<li>Basics of Computer Hardware</li>
	<li>Virus Protection &amp; Scanning</li>
	<li>Software Installation</li>
	<li>Maintaining Ledgers, Cash Book</li>
	<li>Balance Sheet, Profit &amp; Loss</li>
	<li>Financial Accounting (Tally)</li>
	<li>C Language, C++ Language, Foxpro</li>
	<li>HTML, JAVA SCRIPT</li>
</ul>

<h2>&nbsp;</h2>
</p></div-->
                
                
              </div>
              
            
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/146341455130900354.png" class="img-fluid course_img" alt="Nursery Teacher Training (NTT)" width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Nursery Teacher Training (NTT)</h4>
                </div>

                <h3><a href="course-details.php?id=14">Nursery Teacher Training (NTT)</a></h3>
                <a href="course-details.php?id=14" class="show_hide123">Read More</a>
                <!--div class="content"><p><h1>Nursery Teachers&#39; Training cours</h1>

<p>Nursery Teachers&#39; Training course also known as NTT is a diploma course for teachers who want to teach and cater to the students at nursery level or pre-primary level. This teacher workforce has to undergo the training of the general TT course where the teacher joins the workforce of several other pre-school teachers. The NTT course helps the students who aim to be pre-school teachers in order to facilitate young minds of nursery children. The course provides various methodologies to the teachers who undergo this TT course which is required in teaching the young&nbsp;students that will be essential in the physical, cognitive and social development.</p>

<table>
	<tbody>
		<tr>
			<td>Duration of the Course</td>
			<td>1 year</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<th>
			<p><strong>Syllabus for the 1-year NTT course</strong></p>
			</th>
		</tr>
		<tr>
			<td>
			<p>Child Care and Health</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Basics of the pre-primary education</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Teaching Methodology</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>History and Philosophy of pre-primary education</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Child Psychology</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Nursery school organization, Child Health, and Nutrition and community</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Practical: Viva Voice</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Practical: Arts and Crafts</p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<h2>Nature of Jobs/Roles, Growth Prospects and Salaries</h2>

<p>The job opportunities for the Diploma holders in NTT training are very specific like that of Nursery in-charge, Nursery Teacher, or nursery department coordinator. There are further prospects for the diploma holders to study further in Masters of TT training, PG in Pre-school teacher training/primary school teacher training or can continue with their job opportunities in schools and pre-schools. The students of NTT also have opportunities in colleges where they themselves can teach and provide NTT training to students. Nursery blocks also provide employment to NTT students as Nursery teachers, Madam, In-charge or helper, Nursery Manager, Assistant pre-primary teacher,&nbsp;</p>

<p>&nbsp;</p>
</p></div-->
                
                
              </div>
              
            
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/18113783131847121961.png" class="img-fluid course_img" alt="Diploma and Certificate courses in Yoga" width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Diploma and Certificate courses in Yoga</h4>
                </div>

                <h3><a href="course-details.php?id=15">Diploma and Certificate courses in Yoga</a></h3>
                <a href="course-details.php?id=15" class="show_hide123">Read More</a>
                <!--div class="content"><p><h1>Diploma and Certificate courses in Yoga</h1>

<h2>Certificate Course in Yoga</h2>

<p>Candidates can pursue the certificate courses in Yoga within the duration of three months to one year. The courses are available at the top yoga colleges in India and the fee ranges anywhere between Rs 2000 and Rs 15,000. Candidates seeking admission to the certificate courses have to apply to the respective yoga college they want to learn yoga from as well as, fulfil the eligibility criteria as under:&nbsp;</p>

<p><strong>Eligibility Criteria for Certificate Yoga Courses</strong></p>

<ul>
	<li>They should be passed at least class 10th from a recognised board of education.&nbsp;</li>
	<li>However, there is no restriction on the highest qualification i.e. candidates who have passed class 12th or graduation are also equally eligible.&nbsp;</li>
</ul>

<p>Course Detail:</p>

<table>
	<tbody>
		<tr>
			<th>Semester I</th>
			<th>Semester II</th>
		</tr>
		<tr>
			<td>Foundations of Yoga</td>
			<td>Patanjali Yoga Darshan</td>
		</tr>
		<tr>
			<td>Basic Yoga Texts</td>
			<td>Therapeutic Yoga-I</td>
		</tr>
		<tr>
			<td>Hatha Yoga</td>
			<td>Therapeutic Yoga &ndash;II</td>
		</tr>
		<tr>
			<td>Human Anatomy and Physiology</td>
			<td>Diet and Nutrition</td>
		</tr>
		<tr>
			<td>Practical I Yoga</td>
			<td>Practical-I Yoga</td>
		</tr>
		<tr>
			<td>Practical II</td>
			<td>Practical-II</td>
		</tr>
		<tr>
			<td>Seminar</td>
			<td>Seminar</td>
		</tr>
		<tr>
			<td>Assignment</td>
			<td>Assignment</td>
		</tr>
		<tr>
			<td>Comprehensive Viva-voce</td>
			<td>Comprehensive Viva-voce</td>
		</tr>
		<tr>
			<th>Semester III</th>
			<th>Semester IV</th>
		</tr>
		<tr>
			<td>Yoga and Health</td>
			<td>Applications of Yoga</td>
		</tr>
		<tr>
			<td>Research Methodology and Statistics</td>
			<td>Naturopathy &amp; Ayurveda</td>
		</tr>
		<tr>
			<td>General Psychology</td>
			<td>Practical-I</td>
		</tr>
		<tr>
			<td>Indian Philosophy</td>
			<td>Practical-II</td>
		</tr>
		<tr>
			<td>Practical-I</td>
			<td>Dissertation</td>
		</tr>
		<tr>
			<td>Assignment</td>
			<td>Assignment</td>
		</tr>
		<tr>
			<td>Comprehensive Viva-voce</td>
			<td>Comprehensive Viva-voce</td>
		</tr>
	</tbody>
</table>
</p></div-->
                
                
              </div>
              
            
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/790242251865506051.jpg" class="img-fluid course_img" alt="Fashion Designing Courses " width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Fashion Designing Courses </h4>
                </div>

                <h3><a href="course-details.php?id=16">Fashion Designing Courses </a></h3>
                <a href="course-details.php?id=16" class="show_hide123">Read More</a>
                
                
                
              </div>
              
            
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/10795047471137832146.jpg" class="img-fluid course_img" alt=" English Speaking Course " width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4> English Speaking Course </h4>
                </div>

                <h3><a href="course-details.php?id=17"> English Speaking Course </a></h3>
                <a href="course-details.php?id=17" class="show_hide123">Read More</a>
                
                
                
              </div>
              
            
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/3805006881699964165.png" class="img-fluid course_img" alt="Android Training" width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Android Training</h4>
                </div>

                <h3><a href="course-details.php?id=18">Android Training</a></h3>
                <a href="course-details.php?id=18" class="show_hide123">Read More</a>
                
                
                
              </div>
              
            
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/images/793389271289845868.png" class="img-fluid course_img" alt="Java Training" width="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Java Training</h4>
                </div>

                <h3><a href="course-details.php?id=19">Java Training</a></h3>
                <a href="course-details.php?id=19" class="show_hide123">Read More</a>
                
                
                
              </div>
              
            
            </div>
          </div>
          
          

          
        <?php } ?>
        
        
       
         

          

        </div>

      </div>
      
      <!--button class="btn btn-primary btnShowElements">Show More</button-->
    </section><!-- End Courses Section -->

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

</html>
