<?php
include'base_db_cofig.php';

//comp_name cmp_place p_date file
if(isset($_POST['upload']))
{

$comp_name=$_POST['comp_name'];
$cmp_place=$_POST['cmp_place'];
$p_date=$_POST['p_date'];

$files =$_FILES['files']['name'];
$file_loc = $_FILES['files']['tmp_name'];
$file_size = $_FILES['files']['size'];
$file_type = $_FILES['files']['type'];
$folder="img/uploads/";
$rt=$folder.$files;

$sd=$_COOKIE['rollno'];
$zx=$_COOKIE['user_id'];
$created_at = date("Y-m-d H:i:s");

/*INSERT INTO `industrial_vists` (`iv_id`, `user_id`, `company_name`, `complant_place`, `iv_date`, `certificate_path`, `created_at`) VALUES ('1', '1', 'infosys', 'chennai', '2017-10-03', '', '2017-10-10');

INSERT INTO `industrial_vists` (`user_id`, `company_name`, `complant_place`, `iv_date`, `certificate_path`, `created_at`) VALUES ('$zx', '$comp_name', '$comp_place', '$p_date', '$rt', '$created_at');
*/
$qure="INSERT INTO `industrial_vists` (`user_id`, `company_name`, `complant_place`, `iv_date`, `certificate_path`, `created_at`) VALUES ('$zx', '$comp_name', '$comp_place', '$p_date', '$rt', '$created_at');";
$res=mysqli_query($con,$qure) or die('error1');
    if($res ){
      	move_uploaded_file($file_loc,$rt);
       	echo '<script type="text/javascript">alert("Your IV Details Updated");</script>';
       	echo'<script type="text/javascript">window.location.href = "update-IV.php";</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Update Error Contact Administrator");</script>';
      	echo'<script type="text/javascript">window.location.href = "update-IV.php";</script>';
    }
}
else {
	echo 'upload error';
}

?>