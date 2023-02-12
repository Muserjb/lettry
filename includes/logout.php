<?php 
      session_start();
      echo $_SESSION['adminpassword'];
      if (isset($_SESSION['adminpassword'])) {
      echo $_SESSION['adminpassword'];
      $_SESSION['sign_out_success'] = " Successfully Logout !!";
      unset($_SESSION['adminusername']);
      session_destroy($_SESSION['adminusername']);
      header("Location: ../login.php");
      exit();
  
  
    }




    // session_start();
    //   if (!isset($_SESSION['Guestusername'])) {
    //   header("Location: profile.php");
    //   exit();
    //   } else {
    //   $_SESSION['sign_out_success'] = "Sign out successful!";
    //   unset($_SESSION['Guestusername']);
    //   session_destroy($_SESSION['Guestusername']);
    //   header("Location: login.php");
    //   exit();
    //   }
?>