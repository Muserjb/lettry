
<?php 
session_start();
include 'includes/connection.php';
$error = "";

if(isset($_POST['submit'])){
    $guestusername= $_POST['Guestusername'];
    $guestpassword= $_POST['Guestpassword'];
   // $str = preg_replace("#[^0-9a-z]#i". " ".$str);
  $query= "SELECT * FROM guest WHERE  Email = '$guestusername' AND  Id = '$guestpassword'";
   
   $query_run= mysqli_query($mysqli, $query);
   $count = mysqli_num_rows($query_run);
   if($count>0)
   {
     $_SESSION['Guestusername'] = $guestusername ;
     $_SESSION['Guestpassword'] = $guestpassword;
     echo $_SESSION['Guestusername'];

    header("location:GuestIndex.php");
   // echo $_SESSION['Guestusername'];
  //  $row = mysqli_fetch_array($query_run);
     //echo"successfull";
    //  echo $row["Id"]; 
   

   }
   else{
      $error = "Wrong Email or Password, Please Enter Correct Email and Password !!";
     
   }
 }



?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="myStyle/4.3.1/css/bootstrap.min.css">
  <script src="myStyle/3.3.1/jquery.min.js"></script>
  <script src="myStyle/1.14.7/umd/popper.min.js"></script>
  <script src="myStyle/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="myStyle/fonts/font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="myStyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="main.css">
  <style>
    body{
      background-image: url(img/108.png);
    }
    .nav-item:hover{
    background-color: #f3f3f3;
  }

   
      </style>
</head>

    

<body>
<div class="container-fluid mt-5" >
  <div class="row">
  <div class="col-md-4 offset-4">
       <div class="card shadow" style="background-color: whitesmoke;border-radius:8px">
        <div class="card-head">
          <img src="img/Jebis-logo.jpg" alt="avatar_image"  style="width:40%;" class="mt-3 mx-auto d-block rounded-circle"><br>
            <!-- <h3 class="card-title text-white" style="text-align: center;">Login</h3> -->
            <center style="font-size:18px;">
                <div class="alert-danger " >
                   <?php echo "<div class='m-2'>". $error. "</div>"; ?>
                </div>
                <?php 
                  if (isset($_SESSION['sign_out_success'])){
                    $sign_out_success = $_SESSION['sign_out_success'];
                    echo '<div class="alert alert-success alert-dismissible fade show"  role="alert">'.$sign_out_success.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button></div>';
                    session_unset();
                    session_destroy();
                  }

                    if (isset($_SESSION['sign_in_success'])) {
                      $sign_in_warning = $_SESSION['sign_in_success'];
                      echo '<div class="alert alert-warning alert-dismissible fade show"       role="alert">'.$sign_in_warning.'
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                      </button></div>';
                      session_unset();
                      session_destroy();
                    }

                  
                  ?>
                </center>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                  </div>
                   <input type="email" name="Guestusername" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Enter Email">
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i> </span>
                  </div>
                     <input type="password" name="Guestpassword" class="form-control border-top-0 border-left-0 border-right-0" placeholder="password">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-success" name="submit" style="color:white;">Login</button>
                 <a href="#" data-toggle="modal" data-target="#myModal" style="float: right;">Forgot password</a>
                </div>
                      
                <div class="form-group mt-4">
                    <p>Don't have an account? <a  href="Register.php">Click here</a></p>
                </div>
            </form>
          </div>
      </div>
    </div>
    
  </div>

     

          <!-- <p>LogOut section</p> -->
      <div class="modal" id="LogOut">
        <div class="modal-dialog bg-">
          <div class="modal-content bg-white">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body ">
             <h4><p><i>Log out Successfull</i> </p></h4> 
            </div>
            <div class="modal-footer">
             <a href="index.html"class="btn btn-danger">Close</a> 
            </div>
          </div>
        </div>
      </div>
        <!-- The Modal forgot password -->
        <div class="modal" id="myModal">
          <div class="card" style="margin-top: 15%; margin-left: 40%; width: 300px;">
            <div class="card-head bg-secondary">
                <h3 class="card-title text-white" style="text-align: center; font-weight: bold; font-size: 30px;">Verify Your Email</h3>
            </div>
            <div class="card-body">
                <form action="">
                     <div class="form-group">
                        <input type="email" class="form-control border-top-0 border-left-0 border-right-0" placeholder="email">
                    </div>
                    <button type="button" class=" btn-success btn">Verify Now</button>
                     <div class="form-group mt-2">
                        <p><a href="Login.html">Back to login</a></p>
                    </div>
                </form>
            </div>
         </div>
       </div>
      
      

</body>