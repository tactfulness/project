<?php
include'base_db_cofig.php';
session_start();
if (isset($_REQUEST['st_ur'])){
$st_ur = stripslashes($_REQUEST['st_ur']); 
$st_ur = mysqli_real_escape_string($con,$st_ur); 
$st_pas = stripslashes($_REQUEST['s_pass']);
$st_pas = mysqli_real_escape_string($con,$st_pas);
$query="SELECT `s_name`, `email`, `s_pass` FROM `staffs` WHERE `s_name` ='$st_ur' and `s_pass` = '$st_pas'";	
$result = mysqli_query($con,$query);
$rows = mysqli_num_rows($result);
if($rows==1){
setcookie("staff_ur", $st_ur, time()+300); 
echo'<script type="text/javascript">window.location.href = "staff-home.php";</script>';
}else{
echo"<div class='form'><h3>Username/password is incorrect.</h3><br>";
echo"Please wait it will redirect to login page</div>";
header('Refresh: 2;url=index.php');
}
}
?>
