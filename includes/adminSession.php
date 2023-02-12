
<?php
session_start();
$check = $_SESSION['adminpassword'];
if(!isset($check)){
    $_SESSION['sign_in_success'] = "you most Login first!";
  header("location:login.php");

 echo $_SESSION['adminpassword'];  
 $id = $_SESSION['adminpassword'];
$get_data=$mysqli->query("SELECT * FROM admin WHERE AdminPassword = '$id'");
$row=$get_data->fetch_assoc();

}


?>
