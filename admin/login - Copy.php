<?php 
    session_start();
    include 'includes/connection.php';
    $error='';
    $adminuser = $adminpassword = "";
    $erros = array('adminusername'=>'', 'adminpassword'=>'');
    //receiving user
    if(isset($_POST['submit'])){
        $adminuser = $_POST['adminusername'];
        $adminpassword = $_POST['adminpassword'];
        if($adminuser){
  
        // database checking
        $query= "SELECT * FROM admin WHERE  AdminUsername= '$adminuser' AND  AdminPassword = '$adminpassword'";
        $query_run= mysqli_query($mysqli, $query);
        $count = mysqli_num_rows( $query_run);
            if($count>0){
                //sessions
                $_SESSION['adminusername'] = $adminuser ;
                $_SESSION['adminpassword'] = $adminpassword;
                while($row = mysqli_fetch_array($query_run))
                //check the main admin and the super admin
                    if( $row['main']== '1'){
                        echo"successfull";
                        echo $row['AdminId'];
                        header("location:index.php"); 
                    break; 
                    }
                    // echo "musas";
                    echo $row['AdminId'];
                    header("location:index.php");
                }else{
            $error = "Username or Password is Incorrect!! Please check an try again";
            }

        }else{ $error = "please provide a username and password"; }
        
    } 
?>

<!DOCTYPE html>
<html>
<head>
<title>JB`s hotel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="myStyle/4.3.1/css/bootstrap.min.css">
<script src="myStyle/3.3.1/jquery.min.js"></script>
<script src="myStyle/1.14.7/umd/popper.min.js"></script>
<script src="myStyle/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="myStyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="myStyle/fonts/font-awesome-4.7.0/css/font-awesome.css">  
<link rel="stylesheet" href="../main.css">

<link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="dist/css/style.min.css" rel="stylesheet">

<style>
body{
background-image: url(img/108.png);
} 
</style>
</head>  
</body>
<body>

<nav class="navbar navbar-expand-sm bg justify-content-end navbar-dark">
<ul class="navbar navbar-nav">
</ul>
</nav>
<div class="container-fluid" >

<br>
<div class="col-md-4 m-auto d-block">
<div class="card-body">
<form action="" method="post" >
<fieldset class="bg-light  shadow-lg" style=" background-color: whitesmoke; border-radius:8px;">
<legend>
<img src="img/Jebis-logo.png" alt=""  style="width:40%; height:40%;" class="mt-3 mx-auto d-block rounded-circle"><br>

</legend>
<div class="mr-4">

<div class="ml-4" >
<!-- <h3 class="card-title text-white" style="text-align: center;">Login</h3> -->
<center style="font-size:18px;">
<div class="alert-danger " >
<?php echo $error; ?>
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


<input type="text" hidden name="AdminId">
<div class="form-group input-group mt-4">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-user"></i></span>
</div>

<input type="text" name="adminusername" class="form-control border-top-0 border-left-0 border-right-0" placeholder="Username">

</div>
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-lock"></i> </span>
</div>
<input type="password" name="adminpassword" class="form-control border-top-0 border-left-0 border-right-0" placeholder="password">
</div>
<Button type="submit" name="submit" class="btn form-control btn-success" >Login</Button>
<a href="#" data-toggle="modal" data-target="#myModal"style="float:right;">Forgot password</a>
<br> <br> <br>
</form>
</div>
</div>
</div>
</fieldset>
</div>
<div>
<!-- <script type="text/javascript">
function alert(){
var alert= document.getElementById('alert');
alert(alert);
}
</script> -->
</body>
</html>
