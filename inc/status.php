<?php
include 'secret.php';
include '../connection/config.php';
$test101 = 'select website_status from center where c_id='.CENTERID;
$cres = mysqli_query($conn,$test101);
$dd_web_data = mysqli_fetch_assoc($cres);
$ws = $dd_web_data['website_status'];
if($ws == 0){
    header('Location: restriction.php');
}

?>
