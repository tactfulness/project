<?php

include'base_db_cofig.php';

/*
INSERT INTO `project_presentations`(`pro_id`, `user_id`, `clg_type`, `pro_title`, `cl_name`, `cl_place`, `pro_prize`, `certificate_path`, `pro_date`, `create_at`)
 VALUES ('1', '1', 'kec', 'recovery', 'ksr', 'erode', '2', '2017-10-03', '2017-10-03');
 */
if(isset($_POST['upload']))
{
	//pro_title clg_type clg_name clg_place won_prize p_date file
$clg_type=$_POST['clg_type'];    
$title=$_POST['pro_title'];
$clg_name=$_POST['clg_name'];
$clg_place=$_POST['clg_place'];
$p_date=$_POST['p_date'];
$won_prize=$_POST['won_prize'];
 $file =$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="img/uploads/";
 $rt=$folder.$file;
 $zx=$_COOKIE['user_id'];
 
 /*
INSERT INTO `project_presentations`(`user_id`, `collge type`, `project title`, `college name`, `college place`, `prize`, `certificate_path`, `attented date`)  VALUES ('$zx','$clg_type','$title','$clg_name','$clg_place','$won_prize','$rt','$p_date')
 */
//cl_place p_date cl_name pro_title file won_prize clg_type

$qure="INSERT INTO `project_presentations`(`user_id`, `collge type`, `project title`, `college name`, `college place`, `prize`, `certificate_path`, `attented date`)  VALUES ('$zx','$clg_type','$title','$clg_name','$clg_place','$won_prize','$rt','$p_date')";
 $res=mysqli_query($con,$qure) or die(mysqli_error());
        if($res){
            echo '<script>alert("Your Project Details Uploaded");</script>';
			move_uploaded_file($file_loc,$rt);
            echo'<script type="text/javascript">window.location.href = "update-project.php";</script>';
        }
        else{
            echo '<script>alert("Your Project Details Uploaded");</script>';
     	   echo'<script type="text/javascript">window.location.href = "update-project.php";</script>';
    	}
}
else
{
    echo '<script type="text/javascript">alert("upload error contact admin");</script>';
    echo'<script type="text/javascript">window.location.href = "update-project.php";</script>';
}

?>