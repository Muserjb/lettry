<?php include 'process.php';?>
<?php include 'top-side-navba.php';?>

        <div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Approved Bookings</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Approved bookings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="container-fluid">
            <div class="row justify-content-center">
               <?php 
                  $result = $mysqli->query("SELECT * FROM guest WHERE Action ='Aprove'") or die($mysqli->error);
                    
                    ?>

                <div class="col-md-13 bg-light m-4 rounded">
                    <h4 cLass="text-info p-2 text-center">APROVED INFORMATION </h4><hr>  
                        <div class="row m-3">
                            <div class="col">
                            <button type="button" data-toggle="modal" data-target="#Bookingform" class=" btn btn-info"><strong>+</strong>Add Guest</button>
                            </div>
                            <div class="col">
                            <form action="" class="form-inline mb-3" style="float: right;">
                                <input type="Search" id="myInput" class="form-control"  placeholder="Search">
                                <button type="button"  class=" btn btn-info">Search</button>
                            </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover m-3" id="table_data" style="font-size: 12px;">
                                <tr>
                                    <th>S/N</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Room Type</th>
                                    <th>Room Number</th>
                                    <th colspan='2'>Adult / Child</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th colspan='2'> Action</th>
                                </tr>
                                <tbody id="myTable">
                                <?php   $si=0;while($row = $result->fetch_assoc()) : $si++;?>
                                    <tr>
                                    <td><?php echo $si; ?></td>
                                    <td><?php echo $row['FullName']; ?></td>
                                    <td><?php echo $row['PhoneNumber']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['RoomType']; ?></td>
                                    <td><?php echo $row['RoomNumber']; ?></td>
                                    <td><?php echo $row['Adult']; ?></td>
                                    <td><?php echo $row['ChildRoom']; ?></td>
                                    <td><?php echo $row['CheckIn']; ?></td>
                                    <td><?php echo $row['CheckOut']; ?></td>
                                    <td>
                                        <a  href="#mymodaledit<?php echo$si;?>"  class="btn btn-info" name="edit" data-toggle="modal" ><span class="fa fa-edit" ></span></a>
                                    <!-- edit form  -->
                                        <div class="modal" id="mymodaledit<?php echo$si;?>"  >
                                            <div class="modal-dialog">
                                                <div class="modal-content" >
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">EDIT <?php echo strtoupper($row['FullName']); ?> INFORMATION</h6>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form action="" method="POST" class="container">
                                                            <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                                                            <div class="form-group">
                                                                <label for="fullname">Full Name</label>    
                                                                <input type="text" name="fullname" class="form-control" value="<?php echo $row['FullName']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phonenumber">Phone Number: </label>
                                                                <input type="Number" name="phonenumber" class="form-control" value="<?php echo $row['PhoneNumber']; ?>"> 
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">E-mail:</label>
                                                                <input type="email" name="email" class="form-control" value="<?php echo $row['Email']; ?>">
                                                            </div>
                                                                <div class="form-group">
                                                                <label for="roomnumber"></label>Room Number: </label>
                                                                <input type="text" name="roomnumber" class="form-control" value="<?php echo $row['RoomNumber']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="checkin"></label>CheckIn Date: </label>
                                                                <input type="date" name="checkin" class="form-control" value="<?php echo $row['CheckIn']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="checkout"></label>CheckOut Date: </label>
                                                                <input type="date" name="checkout" class="form-control " value="<?php echo $row['CheckOut']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="room">Select Room Type</label>
                                                                <select name="roomtype" class="form-control"  value="<?php echo $row['RoomType']; ?>" >
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
                                                            <select name="adult" class="form-control"  value="<?php echo $row['Adult']; ?>">
                                                                <option value="1 adult">One adult person</option>
                                                                <option value="2 adult">Two adult person</option>
                                                                <option value="3 adult">Three adult person</option>
                                                            </select>
                                                            </div>
                                                                <div class="form-group">
                                                                <label for="adultroom">Child Room</label>
                                                                <select name="childroom" class="form-control"  value="<?php echo $row['ChildRoom']; ?>">
                                                                    <option value="1 child">1 child</option>
                                                                    <option value="2 child">2 child</option>
                                                                    <option value="3 child">3 child</option>
                                                                </select>
                                                                </div>
                                                    <!-- </form>  -->
                                                        </div>
                                                        <input type="submit" class="btn btn-info" name="update" value="Update"/>                                            
                                                    </form> 
                                                    <div class="modal-footer">
                                                            <button type="button" style="float:right;" class="btn btn-danger" data-dismiss="modal">Close</button>                                        
                                                        </div>
                                                </div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    </td>

                                    <td>
                                        <a href="approveguest.php?delete=<?php echo $row['Id']?>" 
                                        class="btn btn-danger" name="delete"><span class="fa fa-trash"></span></a>
                                        </td>
                                </tr>
                                <?php endwhile ?>
                            </tbody>
                            </table>
                        </div>
                    </div> 
                </div> 
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