<?php 
include 'top-side-navba.php'

;?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Staff Management</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">staff</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="container-fluid">

                <div class="row justify-content-center">
                  <div class="col-md-13 bg-light m-4 rounded">
                      <h4 cLass="text-info p-2 text-center">STAFF INFORMATION </h4><hr>  
                     <div class="row m-2">
                      <div class="col">
                        <button type="button" data-toggle="modal" data-target="#AddStaffMymodal" class=" btn btn-info"><strong>+</strong> Add Staff</button>
                      </div>
                      <div class="col">
                        <form action="" class="form-inline mb-3" style="float: right;">
                        <input type="search"  id="myInput" class="form-control"  placeholder="Search">
                        <button type="button"  class=" btn btn-info">Search</button>
                      </form>
                      </div>
                     </div>
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover m-3" style="width: auto;">
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Staff ID</th>
                                <th>Role</th>
                                <th>Qualification</th>
                                <th colspan='2'>Action</th>
                            </tr>
                            <tbody id="myTable">
                            <?php   $si=0;while($row = $resultofstaff->fetch_assoc()) : $si++;?>
                                <tr>
                                    <td><?php echo $si; ?></td>
                                    <td><?php echo $row['StaffFullName']; ?></td>
                                    <td><?php echo $row['StaffPhoneNumber']; ?></td>
                                    <td><?php echo $row['StaffEmail']; ?></td>
                                    <td><?php echo $row['StaffId']; ?></td>
                                    <td><?php echo $row['StaffRole']; ?></td>
                                    <td><?php echo $row['StaffQualification']; ?></td>
                                    <td>
                                        <a  href="#staffmymodaledit<?php echo$si;?>"  class="btn btn-info" name="edit" data-toggle="modal" ><span class="fa fa-edit" ></span></a>
                                      <!-- edit form  -->
                                        <div class="modal" id="staffmymodaledit<?php echo$si;?>"  >
                                            <div class="modal-dialog">
                                                <div class="modal-content" >
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">EDIT <?php echo strtoupper($row['StaffFullName']); ?> INFORMATION</h6>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <form action="" method="POST" class="container">
                                                            <input type="hidden" name="deleteID" value="<?php echo $row['SId']; ?>">
                                                            <div class="form-group">
                                                                <label for="stafffullname">Full Name</label>    
                                                                <input type="text" name="stafffullname" class="form-control" value="<?php echo $row['StaffFullName']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="staffphonenumber">Phone Number: </label>
                                                                  <input type="Number" name="staffphonenumber" class="form-control" value="<?php echo $row['StaffPhoneNumber']; ?>"> 
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="staffemail">E-mail:</label>
                                                                  <input type="email" name="staffemail" class="form-control" value="<?php echo $row['StaffEmail']; ?>">
                                                              </div>
    
                                                              <!-- Costum radio Buttum -->
                                                              <div class="custom-control custom-radio custom-control-inline">
                                                                  <label class="custom-control-label" for="customRadio">Male</label>
                                                                  <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="Male">
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                  <label class="custom-control-label"  for="customRadio2">Female</label>
                                                                  <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="Female">
                                                            </div>
                                                              <div class="form-group">
                                                                  <label for="staffid">Staff Id: </label>
                                                                  <input type="Number" readonly name="staffid" class="form-control" value="<?php echo $row['StaffId']; ?>"> 
                                                            </div>
                                                            <div class="form-group mt-3">
                                                              <label for="staffrole">Staff Role</label>
                                                              <select name="staffrole" class="form-control"  value="<?php echo $row['StaffRole']; ?>">
                                                                <option value="Receptionze">Receptionize</option>
                                                                <option value="lorem2">lorem madabuzo candle</option>
                                                                <option value="lorem3">lorem mabuzo candle</option>
                                                                <option value="lorem4">lorem mabuzo candle</option>
                                                              </select>
                                                            </div>
                                                              <div class="form-group">
                                                                  <label for="staffqualification">Staff Qualification: </label>
                                                                  <select name="staffqualification" class="form-control"  value="<?php echo $row['StaffQualification']; ?>" >
                                                                    <option value="SSCE">SSCE</option>
                                                                    <option value="Primary certificate">Primary Certificate</option>
                                                                    <option value="Diploma Certificate">Diplomar Certificate</option>
                                                                    <option value="NCE">NCE</option>
                                                                    <option value="Degree">Degree</option>
                                                                  </select>
                                                                </div>
                                                      <!-- </form>  -->
                                                        </div>
                                                        <input type="submit" class="btn btn-info" name="updatestaff" value="updatestaff"/>                                            
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
                                        <a href="Staff.php?deletestaff=<?php echo $row['SId']?>" 
                                          class="btn btn-danger" name="deletestaff"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endwhile ?>
                            <tbody>
                        </table>
                      </div>
                  </div>
              </div>
    
    
              <!-- edit form  -->
              <div class="modal" id="AddStaffMymodal" >
                  <div class="modal-dialog">
                      <div class="modal-content" >
                          <!-- Modal Header -->
                          <div class="modal-header">
                              <h6 class="modal-title">EMPLOYE STAFF</h6>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST" class="container">
                                  <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                                  <div class="form-group">
                                      <label for="stafffullname">Full Name</label>    
                                      <input type="text" required name="stafffullname" class="form-control" placeholder="Eg. Adewale Johne">
                                  </div>
                                  <div class="form-group">
                                        <label for="staffphonenumber">Phone Number: </label>
                                        <input type="Number" required name="staffphonenumber" class="form-control" placeholder="Phone Number"> 
                                  </div>
                                  <div class="form-group">
                                        <label for="staffemail">E-mail:</label>
                                        <input type="email" required name="staffemail" class="form-control" placeholder="E-mail">
                                    </div>
    
                                    <!-- Costum radio Buttum -->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <label for="customRadio">Male</label>
                                        <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="Male">
                                        
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                        <label  for="customRadio2">Female</label>
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="Female">
                                        
                                  </div>
                                    <div class="form-group">
                                        <label for="staffid">Staff Id: </label>
                                        <input type="Number" required name="staffid" class="form-control" placeholder="Create a staff ID"> 
                                  </div>
                                  <div class="form-group mt-3">
                                    <label for="staffrole">Staff Role</label>
                                    <select name="staffrole" required class="form-control">
                                      <option value="1 Receptionze">Receptionist</option>
                                      <option value="lorem2">lorem madabuzo candle</option>
                                      <option value="lorem3">lorem mabuzo candle</option>
                                      <option value="lorem4">lorem mabuzo candle</option>
                                    </select>
                                  </div>
                                    <div class="form-group">
                                        <label for="staffqualification">Staff Qualification: </label>
                                        <select name="staffqualification" class="form-control">
                                          <option value="Primary certificate">Primary Certificate</option>
                                          <option value="SSCE">SSCE</option>
                                          <option value="Diploma Certificate">Diploma Certificate</option>
                                          <option value="NCE">NCE</option>
                                          <option value="Degree">Degree</option>
                                        </select>
                                      </div>
                              <!-- </form>  -->
                              </div>
                              <input type="submit" class="btn btn-info" name="submitstaff" value="CLICK HERE TO EMPLOYE NEW STAFF"/>                                            
                          </form> 
                          <div class="modal-footer">
                                  <button type="button" style="float:right;" class="btn btn-danger" data-dismiss="modal">Close</button>                                        
                              </div>
                        </div>
                      </div>
                  </div>
              </div>
    
    
    
    
    
    
    
           
            <!-- <p>Add Admin modal</p> -->
            <div class="modal" id="AddNewAdmin"  >
              <div class="modal-dialog">
                <div class="modal-content" style="width:150%; height:150%; background-color:whitesmoke ;">
                  <div class="modal-body">
                    <form action="" style=" width: 100%;" >
                      <h3 class="">Create new account</h3>
                      <div class="row">
                          <div class="col">
                            <div class="form-group">
                                <label for="Fname">First name</label>    
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder=""></span>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input type="number" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="role">Role:</label>
                              <input type="Role" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                            </div> 
                            <div class="form-group">
                              <label for="password"> Password:</label>
                              <input type="password" class="form-control border-top-0 border-left-0 border-right-0" placeholder="password">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                                <label for="Sname">Second name</label>    
                                  <input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                              </div>
                                <input type="email" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                              </div>
                          </div>
                            <div class="form-group">
                                <label for="DOB">Date of Birth</label>
                                <input type="date" class="form-control border-top-0 border-left-0 border-right-0" placeholder="dd/mm/yy">
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password:</label>
                              <input type="password" class="form-control border-top-0 border-left-0 border-right-0" placeholder="password">
                            </div>               
                          </div>
                      </div>
                      <a href="#"  class="btn bc" style="float: right;">Add Now</a>
                      <div class="form-group">
                          <p> <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></p>
                      </div>
                    </form>
                <!-- <div class="modal" id="myModalMassage" style="margin-top: 20%; margin-left: 20%; width: 800px;">
                  <div class=" alert alert-success alert-dismissible"> you have successfully added a new Admin go back to login
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                  </div>
                </div> -->
              
                  </div>
                </div>
              </div>
            </div>
      <!-- <p>booking form modal</p> -->
    
    <div class="modal" id="Bookingform" >
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
              <form action="" action="" >
                <h3>Booking Page</h3>
                <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="Fname">Full name</label>    
                        <input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="number" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="CheckIn"></label>CheckIn Date: </label>
                          <input type="date" class="form-control border-top-0 border-left-0 border-right-0" placeholder="30/10/2020">
                      </div>
                      <div class="form-group">
                        <label for="CheckIn">Arrival Time:</label>
                        <input type="time" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                      </div>
                      <div class="form-check-inline mt-4">
                        <label class="form-check-label">Gender:
                          <input type="radio" class="form-check-input" name="optradio">Male
                        </label>
                      </div>
                      <div class="form-check-inline mb-3">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio">Female
                        </label>
                      </div>
                      <div class="form-group mt-3">
                        <label for="AdultRoom">Adult Room</label>
                        <select name="Room" class="form-control">
                          <option value="">Select Room</option>
                          <option value="1p">1</option>
                          <option value="2p">2</option>
                          <option value="2p">3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="Usname">Username</label>    
                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                         </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="CheckOut">CheckOut Date:</label>
                            <input type="date" class="form-control border-top-0 border-left-0 border-right-0" placeholder="30/10/2020">
                          </div>
                          <div class="form-group">
                            <label for="CheckIn">living Time:</label>
                            <input type="time" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="room">Select room type</label>
                            <select name="Room" class="form-control">
                              <option value="">Select Room</option>
                              <option value="SRoom">Standart Room</option>
                              <option value="DRoom">Double Room</option>
                              <option value="Room">Royal Room</option>
                              <option value="LRoom">Luxury Room</option>
                              <option value="DRoom">Diplomatic Suites</option>
                              <option value="SuperRoom">Super Exclusive</option>
                              <option value="EERoom">Executive Exclusive Room</option>
                              <option value="Sudio">Studio Room</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="AdultRoom">Child Room</label>
                            <select name="ChildRoom" class="form-control">
                              <option value="">Select Child Room</option>
                              <option value="1p">1</option>
                              <option value="2p">2</option>
                              <option value="2p">3</option>
                            </select>
                          </div>
                    </div>
                </div>
                <button type="button" class="bc btn"  style="float: right;">Book Now</button>
                <button type="button" class="btn-danger" data-dismiss="modal" >Cancel</button>
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
       
    </div>
  
    <?php include 'includes/footer.php';?>
    <!-- ============================================================== -->
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
    <script src="assets/libs/chart/matrix.interface.js"></script>
    <script src="assets/libs/chart/excanvas.min.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/chart/jquery.peity.min.js"></script>
    <script src="assets/libs/chart/matrix.charts.js"></script>
    <script src="assets/libs/chart/jquery.flot.pie.min.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/libs/chart/turning-series.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>