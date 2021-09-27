<?php
include '../secret.php';
include '../../connection/config.php';

$sql = 'select * from center where c_id='.CENTERID;
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$to = $data['email'];
$subscribe = $_POST['email'];
$from = 'info@emaxindia.in';
$subject = "Subscribe: Customer Mail"; 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Our Center</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Subscriber:</th><td>'.$subscribe.'</td> 
            </tr>
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$to.'<'.$from.'>' . "\r\n"; 
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
