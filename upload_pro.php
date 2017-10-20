<?php

include'base_db_cofig.php';

/*
INSERT INTO `project_presentations`(`pro_id`, `user_id`, `clg_type`, `pro_title`, `cl_name`, `cl_place`, `pro_prize`, `certificate_path`, `pro_date`, `create_at`)
 VALUES ('1', '1', 'kec', 'recovery', 'ksr', 'erode', '2', '2017-10-03', '2017-10-03');
 */
if(isset($_POST['upload']))
{    
$title=$_POST['pro_title'];
$cg_name=$_POST['cl_name'];
$p_date=$_POST['p_date'];
 $file =$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="img/uploads/";
 $rt=$folder.$file;
 move_uploaded_file($file_loc,$rt);


$qure="INSERT INTO `project_presentations` (`pro_title`, `cl_name`,  `certificate_path`,`pro_date`)
 VALUES ( '$title ', '$cg_name', '$rt','$p_date');";
 $res=mysqli_query($con,$qure);
        if($res){
            echo '<script type="text/javascript">alert("upload success");</script>';
            echo'<script type="text/javascript">window.location.href = "update-project.php";</script>';
        }
        else
            echo' error';
}
else
{
    echo '<script type="text/javascript">alert("upload error");</script>';
}

?>