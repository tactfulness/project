
<?php
//base_db_cofig.php
$folder="img/uploads/";
$con = mysqli_connect("localhost","root","ruler","kec_project") or die('check DB connection');
//$con = mysqli_connect("localhost","id768632_ruler","bucket","id768632_info");
//$con = mysqli_connect("localhost","root","","kec_project") or die('check DB connection');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
