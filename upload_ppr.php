<?php

include'base_db_cofig.php';

/*
INSERT INTO `paper_presentations` (`pp_id`, `user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `p_date`, `created_at`)
 VALUES ('1', '1', 'cloud computing', 'kec', 'cit', 'coimbatore', '', '2017-10-02', '2017-10-03');

 INSERT INTO `user_image_files`(`uf_id`, `user_id`, `pp_id`, `file_name`, `file_path`, `file_size`, `file_type`) VALUES ('1', '2', '2', '', '', '');
*/
if(isset($_POST['upload']))
{    
$title=$_POST['paper_title'];
$cg_name=$_POST['clg_name'];
$p_date=$_POST['p_date'];
$clg_type=$_POST['clg_type'];
$clg_place=$_POST['clg_place'];
$won_prize=$_POST['won_prize'];
 $file =$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="img/uploads/";
 $rt=$folder.$file;
 $sd=$_COOKIE['rollno'];
$zx=$_COOKIE['user_id'];
//echo $zx;
$created_at = date("Y-m-d H:i:s");
/*
$qure="INSERT INTO `paper_presentations` ( `user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`,  `ppr_prize`, `p_date`, `created_at`) VALUES ( '$zx', '$title', '$clg_type', '$clg_place', 'cbe', '1', '$p_date', '$created_at');";
*/
 $qure="INSERT INTO `paper_presentations`(`user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `ppr_prize`, `p_date`) VALUES ('$zx','$title','$clg_type','$clg_name','$clg_place','$rt','$won_prize','$p_date');";
/*
$qure="INSERT INTO `paper_presentations` (`user_id`,`pp_title`, `clg_name`,  `certificate_path`,`p_date`)
 VALUES ( '$zx','$title ', '$cg_name', '$rt','$p_date');";*/
	/*
 $qry2="INSERT INTO `user_image_files` ( `user_id`,`pp_id`, `file_name`,`file_path`, `file_size`, `file_type`) 
 VALUES ( (select u.user_id from users u where rollno='$sd'),(select p.pp_id from paper_presentations p where user_id='$zx'),'$file','$rt', '$file_size', '$file_type');"; //(select p.pp_id from paper_presentations p where user_id='$zx'),*/
 
 $res=mysqli_query($con,$qure);
 //$res2=mysqli_query($con,$qry2);
        if($res){
        	echo '<script type="text/javascript">alert("inserted to one table");</script>';
        	echo'<script type="text/javascript">window.location.href = "update-paper.php";</script>';
        	/*if($res2){
				move_uploaded_file($file_loc,$rt);
				echo '<script type="text/javascript">alert("inserted to second");</script>';
				//echo '<script type="text/javascript">alert("upload success");</script>';
				echo'<script type="text/javascript">window.location.href = "update-paper.php";</script>';
			}*
			else
				{
					echo 'error 2',mysqli_error();}*/
        }
        else
            echo' error 1', mysqli_error();
}
else
{
    echo '<script type="text/javascript">alert("upload error");</script>';
}

?>