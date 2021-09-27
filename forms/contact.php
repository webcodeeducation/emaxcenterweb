<?php
include '../secret.php';
include '../../connection/config.php';

$sql = 'select * from center where c_id='.CENTERID;
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$to = $data['email'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$fromName = $_POST['name'];
$comments = $_POST['message'];

$subject = "Customer: Enquiry Form Mail"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Our Center</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>'.$fromName.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>'.$from.'</td> 
            </tr> 
            <tr> 
                <th>Subject:</th><td>'.$subject.'</td> 
            </tr>
            <tr> 
                <th>Comment:</th><td>'.$comments.'</td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: info@emaxindia.in' . "\r\n"; 
$headers .= 'Bcc: payment@emaxindia.in' . "\r\n"; 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
header('Location: ../index.php');
?>
