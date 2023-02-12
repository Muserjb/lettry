<?php
$check = $_SESSION['adminusername'];
if(!isset($check)){
    $_SESSION['sign_in_success'] = "you most Login first!";
    header("location:login.php");

    
}


?>