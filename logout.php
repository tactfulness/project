<?php
/*session_start();
if(session_destroy()) 
{
header("Location: index.php"); 
}
*/
unset($_SESSION['rollno']);
unset($_SESSION['user_id']);
unset($_SESSION['staff_ur']);
//unset($_SESSION['gdpassword']); 
setcookie ("rollno", "",time()-300, "/"); 
setcookie ("user_id", "",time()-300, "/"); 
setcookie ("staff_ur", "",time()-300, "/");
header("Location: index.php");
session_destroy();  
session_unset();
    ?>