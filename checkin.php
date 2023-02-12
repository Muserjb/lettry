<?php include 'top-side-navba.php';?>



<?php 
     $con =mysqli_connect("localhost","root","","hotel") or die($con_error);
     $query= "";
        
     $query_run ="";
     $count ="";
     if(isset($_POST['search'])){
         $id = $_POST['id'];
        //  $str = preg_replace("#[^0-9a-z]#i". " ".$str);
        $query= "SELECT * FROM guest WHERE  Id='$id' ";
        
        $query_run= mysqli_query($con, $query);
        $count = mysqli_num_rows( $query_run);
        
        if($count>0)
        {
            echo '<br> ';
        }
        else{
            echo "<script type='text/javascript'>alert('Incorrect booking ID, Plese provide a correct booking ID!!');</script>";
        }
     }
    
    ?>



        <div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Check-in panel</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">check-in</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="container-fluid">
                <div class="row justify-content-center">


                <div class="card col-lg-10 offset-1">
                        <form class="form-inline mb-2" action="" method="post">
                        <div class="form-group" style="max-width:300px;">
                    <h4 class="text-center text-info"> <label>ENTER THE BOOKING ID:</label></h4>
                        <input type="search" name="id" class="form-control" placeholder="search..."><br>
                        <button type="submit" name="search" class="btn  btn-info">Search</button>
                        </div>
                    </form>
                    <hr>

                        <?php
                        
                        while($row= mysqli_fetch_array($query_run) ) { ?>
                            <div class="container  shadow-lg" >
                                    <div class="card text-left">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                <h4 class="card-title"> GUEST DETAILED </h4>
                                                <p class="card-text"> <?php echo  $row['FullName'];?></p>
                                            </div>
                                            </div>
                                            <div class="col">
                                                <br><br>
                                                    <div style="font-size: 18px;"> Booking Status
                                                        <?php 
                                                                if($row['Action'] == "Aprove"): ?>
                                                                    <button type="button" class="btn-success" >Aproved</button>
                                                                <?php else : ?>
                                                                    <button  type="button" class="btn-danger" >Not yet aprove</button>
                                                            <?php  endif?></div>
                                            
                                                    </div>
                                            </div><hr>
                                        
                                    </div>
                                <div class="row">
                                            <div class="col-sm-4">
                                            <table class="table bg-white"style="max-width:70%; font-size:12px;">
                                                    <tr>
                                                        <th colspan="2"></th>
                                                        
                                                    </tr>
                                                    
                                                    <tbody>
                                                    <tr>
                                                            <div class="row">
                                                                <div class="col">
                                                                        <img src="img/images (45).jpeg" alt="" width="300" height="300">
                                                                    <div class="input-group">
                                                                    <label for=""></label>
                                                                    <input type="file"
                                                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                                        <button type="button" class="btn btn-info">Update</button>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </tr>
                                            
                                                </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-8">
                                            <form action="" method="post">
                                            <input type="text" name="id" hidden value="<?php echo $row['Id'];?>">
                                                <div  class="card">
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label>Full Name</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="fullname"  value="<?php echo  $row['FullName'];?>">

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label>Room Type</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="roomtype" value="<?php echo  $row['RoomType'];?>">

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label>Room Number</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="roomnumber" value="<?php echo  $row['RoomNumber'];?>">

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label>Adult</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="adult"  value="<?php echo  $row['Adult'];?>">

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label> Number of Children</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="childroom" value="<?php echo  $row['ChildRoom'];?>">

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label> Phone Number</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="phonenumber" value="<?php echo  $row['PhoneNumber'];?>" >

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label>Email Address</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control"name="email" value="<?php echo  $row['Email'];?>" >

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label>Check In Time</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="chechin" value="<?php echo  $row['CheckIn'];?>" >

                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-sm-3">
                                                            <label>Check out Time</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <input type="text" class="form-control" name="chechout" value="<?php echo  $row['CheckOut'];?>" >

                                                        </div>
                                                        <button type="submit" name="assignRoom" class="btn btn-info" onclick="alaa()">Update</button><br><br>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                                </div>
                                            </div>
                                        
                            </div>
                        <?php  } ?>
                    </div>
                    <script type="text/javascript">
                    function alaa(){
                        alert('Record Updated Successfuly !!');
                    }
                    </script>


            </div>
        </div>






        <script>
            function myFunction() {
              var txt;
              if (confirm("Press a button!")) {
                txt = "You pressed OK!";
              } else {
                txt = "You pressed Cancel!";
              }
              document.getElementById("demo").innerHTML = txt;
            }
          </script>



<div class="modal" id="Bookingform" >
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-body">
          <form action="" method="POST" class="mb-5 container">
              <h3>NEW BOOKING</h3>
              <input type="hidden" name="id">
                    <div class="form-group">
                      <label for="fullname">Full name</label>    
                      <input type="text" name="fullname" class="form-control" placeholder="Eg. Adewale John">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber"></label>Phone Number: </label>
                        <input type="Number" name="phonenumber" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                          <label for="email">E-mail:</label>
                          <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                     <!-- <div class="form-group">
                        <label for="roomnumber"></label>Room Number: </label>
                        <input type="hidden" name="roomnumber" class="form-control" placeholder="Room Number">
                    </div> -->
                    <div class="form-group">
                        <label for="checkin"></label>CheckIn Date: </label>
                        <input type="date" name="checkin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="checkout"></label>CheckOut Date: </label>
                        <input type="date" name="checkout" class="form-control">
                    </div>
                    <div class="form-group">
                          <label for="room">Select Room Type</label>
                          <select name="roomtype" class="form-control">
                            <option value="Standard Room">Standart Room</option>
                            <option value="Double Room">Double Room</option>
                            <option value="Royal Room">Royal Room</option>
                            <option value="Luxury Room">Luxury Room</option>
                            <option value="Diplomatic Room">Diplomatic Suites</option>
                            <option value="Super Room">Super Exclusive</option>
                            <option value="Executive Exlusive Room">Executive Exclusive Room</option>
                            <option value="Studio room">Studio Room</option>
                          </select>
                        </div>
                    <div class="form-group mt-3">
                      <label for="adult">Adult Room</label>
                      <select name="adult" class="form-control">
                        <option value="1 adult">One adult person</option>
                        <option value="2 adult">Two adult person</option>
                        <option value="3 adult">Three adult person</option>
                      </select>
                    </div>
                        <div class="form-group">
                          <label for="adultroom">Child Room</label>
                          <select name="childroom" class="form-control">
                            <option value="1 child">1 child</option>
                            <option value="2 child">2 child</option>
                            <option value="3 child">3 child</option>
                          </select>
                        </div>
                        
              <!-- <button type="button" class="bc btn"  style="float: right;">Book Now</button> -->
              <button  type="submit" name="submitbooking" class="btn bc btn-info form-control">submit</button>
                </form>
          </div>
         </div>
        </div>
        </div>


 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
          
            <!-- End Container fluid  -->
           
     
    </div>
    <?php include 'includes/footer.php';?>
              <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
                <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
                <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
                <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
             <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
          <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
          <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
                    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
                    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
                    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>


        $('#zero_config').DataTable();
    </script>

</body>

</html>