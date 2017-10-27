<?php

include'base_db_cofig.php';

/*
INSERT INTO `workshops` (`w_id`, `user_id`, `w_title`, `w_cl_type`, `w_cl_name`, `w_cl_place`, `w_cert_path`, `w_date`, `created_at`)
 VALUES ('1', '1', 'django', 'outside', 'nit', 'trichy', 'path', '2017-08-08', '2017-10-03');
 */
if(isset($_POST['upload']))
{    
$title=$_POST['w_title'];
$cg_name=$_POST['clg_name'];
$p_date=$_POST['p_date'];
 $file =$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="img/uploads/";
 $rt=$folder.$file;
 move_uploaded_file($file_loc,$rt);
/*
INSERT INTO `workshops`(`w_id`, `w_title`, `w_cl_type`, `w_cl_name`, `w_cl_place`, `w_cert_path`, `w_date`, `created_at`, `user_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])*/

$qure="INSERT INTO `workshops` (`w_title`, `w_cl_name`,  `w_cert_path`,`w_date`)
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