<?php
include'base_db_cofig.php';
$ids=$_COOKIE['rollno'];
$userid=$_COOKIE['user_id'];
$loc="img/uploads";
$q = intval($_GET['q']);
//paper
if($q=='paper_presentations'){
	$query="SELECT `certificate_path` FROM `paper_presentations` WHERE `user_id` = '$userid'";
	$result = mysqli_query($con,$query)or die('fetch error');
	if($result){
	while($rowt=mysqli_fetch_array($result)){
		?>
			<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">
	<?php
		}
	}
	else
		{ echo'error';}
}else{
	echo 'query error';
}
//project
if($q=='project_presentations'){
	$query="SELECT `certificate_path` FROM `project_presentations` WHERE `user_id` = '$userid'";
	$result = mysqli_query($con,$query)or die('fetch error');
	if($result){
	while($rowt=mysqli_fetch_array($result)){
		?>
			<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">
	<?php
		}
	}
	else
		{ echo'error';}

}else{
	echo 'query error';
}
//workshop
if($q=='workshops'){
	$query="SELECT `w_cert_path` FROM `workshops` WHERE `user_id` = '$userid'";
	$result = mysqli_query($con,$query)or die('fetch error');
if($result){
	while($rowt=mysqli_fetch_array($result)){
		?>
			<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">
	<?php
		}
	}
	else
		{ echo'error';}

}else{
	echo 'query error';
}
//sports
if($q=='sports'){
	$query="SELECT `certificate_path` FROM `sports` WHERE `user_id` = '$userid'";
	$result = mysqli_query($con,$query)or die('fetch error');
	if($result){
	while($rowt=mysqli_fetch_array($result)){
		?>
			<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">
	<?php
		}
	}
	else
		{ echo'error';}

}else{
	echo 'query error';
}
//industrial vist
if($q=='industrial_vists'){
	$query="SELECT `certificate_path` FROM `industrial_vists` WHERE `user_id` = '$userid'";
	$result = mysqli_query($con,$query)or die('fetch error');
	if($result){
	while($rowt=mysqli_fetch_array($result)){
		?>
			<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">
	<?php
		}
	}
	else
		{ echo'error';}

}else{
	echo 'query error';
}
/*
$result = mysqli_query($con,$query)or die('fetch error');
if($result){
	while($rowt=mysqli_fetch_array($result)){
		?>
			<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">
	<?php
		}
	}
	else
		{ echo'error';}

/*
$q = intval($_GET['q']);
if($q=='paper_presentations'){
	$query="SELECT `certificate_path` FROM `paper_presentations` WHERE `user_id` = '$userid'";
	$result = mysqli_query($con,$query)or die('fetch error');
	
	if($result){
		while($rowt=mysqli_fetch_array($result)){
			?>
			<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">
			<?php
		}
	}
		else
			{ echo'error';}
}
else{
	echo 'fetch error';
}*/
?>