<?php
include'base_db_cofig.php';

//paper_title clg_type  clg_name clg_place won_prize p_date files
if(isset($_POST['upload']))
{
$cltype=$_POST['clg_type'];
$title=$_POST['paper_title'];
$clg_name=$_POST['clg_name'];
$clg_place=$_POST['clg_place'];
$won_prize=$_POST['won_prize'];
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
/*INSERT INTO `paper_presentations` (`user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `ppr_prize`, `p_date`, `created_at`) VALUES ('$zx', '$title', '$cltype', '$clg_name', '$clg_place', '$rt', '$won_prize', '$p_date', '$created_at');

$qure="INSERT INTO `kec_project`.`paper_presentations` (`pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `ppr_prize`, `p_date`, `user_id`)VALUES ( '$title','$cltype', '$clg_name','$clg_place', '$rt','$won_prize','$p_date','$zx');";
*/
$qure="INSERT INTO `paper_presentations` (`user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `ppr_prize`, `p_date`, `created_at`) VALUES ('$zx', '$title', '$cltype', '$clg_name', '$clg_place', '$rt', '$won_prize', '$p_date', '$created_at');";
$res=mysqli_query($con,$qure) or die('error1');
    if($res ){
      	move_uploaded_file($file_loc,$rt);
       	echo '<script type="text/javascript">alert("Your Paper Updated");</script>';
       	echo'<script type="text/javascript">window.location.href = "update-paper.php";</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Update Error Contact Administrator");</script>';
      	echo'<script type="text/javascript">window.location.href = "update-paper.php";</script>';
    }
}
else {
	echo 'upload error';
}

?>
