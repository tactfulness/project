<?php
include 'base_db_cofig.php';
/*
//$email2='pvenkat.rv@gmail.com';
$email2 = stripslashes($_POST['email']); 
$email2 = mysqli_real_escape_string($con,$email2);
//$email2=$_POST['email'];
$query="SELECT `fname`,`email`, `phone`, `password` FROM `users` WHERE `email`='$email2'";
$result = mysqli_query($con,$query)or die('fetch error');

if($result){
	while($row = mysqli_fetch_array($result))
    {
    	echo '<script>alert("success");</script>';
    	echo "correct email",$row['email'];
    }
}
else
echo 'error';

mysql_close($connection); // Connection Closed.

*/
echo "Data received successfully.";
print_r($_REQUEST);
?>

