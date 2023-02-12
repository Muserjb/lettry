<?php 
 include 'top-side-navba.php';

?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Room Maagement</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">room</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
       


            <div class="container-fluid">
                <div class="row justify-content-center">
                  <div class="col-md-13 bg-light m-4 rounded">
                      <h4 cLass="text-info p-2 text-center">ROOMS MANAGEMENT </h4><hr>       
                          <div class="row -2">
                            <div class="col">
                                <button type="button" data-toggle="modal" data-target="#AddRoom" class=" btn btn-info"><strong>+</strong> Add Room</button>
                            </div>
                            <div class="col">
                                <form action="" class="form-inline mb-3" style="float: right;">
                                  <input type="search" id="myInput" class="form-control"  placeholder="Search">
                                  <button type="button" class=" btn btn-info">Search</button>
                                </form>
                            </div>
                          </div>
                        <table class="table table-bordered table-striped table-hover m-3">
                          <tr>
                            <th>S/N</th>
                            <th>ROOM NO.</th>
                            <th>ROOM TYPE</th>
                            <th>Room Price</th>
                            <th>ADULT</th>
                            <th>CHILD</th>
                            <th>Room Image</th>
                            <th colspan='2'>Action</th>
                          </tr>
                          <tr>
                           <tbody id="myTable">
                          <?php   $si=0;while($row = $resultrooms->fetch_assoc()) : $si++;?>
                              <tr>
                                  <td><?php echo $si; ?></td>
                                  <td><?php echo $row['RoomNumber']; ?></td>
                                  <td><?php echo $row['RoomType']; ?></td>
                                  <td><?php echo $row['RoomPrice']; ?></td>
                                  <td><?php echo $row['RoomAdult']; ?></td>
                                  <td><?php echo $row['RoomChild']; ?></td>
                                  <td><?php echo $row['RoomImage']; ?><img src="../img/images (18).jpeg" alt="" width="70" height="50"></td>
                                  <td>
                                      <a  href="#roommymodaledit<?php echo$si;?>"  class="btn btn-info" name="edit" data-toggle="modal" ><span class="fa fa-edit" ></span></a>
                                    <!-- edit form  -->
                                      <div class="modal" id="roommymodaledit<?php echo$si;?>"  >
                                          <div class="modal-dialog">
                                              <div class="modal-content" >
                                                  <!-- Modal Header -->
                                                  <div class="modal-header">
                                                      <h6 class="modal-title">EDIT <?php echo strtoupper($row['RoomNumber']); ?> INFORMATION</h6>
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
                                                        <div class="modal-body">
                                                          <form action="" method="POST">
                                                            <input type="hidden" name="rid" value="<?php echo $row['RId']?>">
                                                            
                                                                  <div class="form-group">
                                                                    <label for="RNumber">Room Number</label>
                                                                    <input type="text" name="RNumber" class="form-control" placeholder="Eg. R10" value="<?php echo $row['RoomNumber']; ?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="RType">Room Type</label>
                                                                    <select name="RType" class="form-control" value="<?php echo $row['RoomType']; ?>">
                                                                        <option value="Standard Room">Standard Room</option>
                                                                        <option value="Royal Room">Royal Room</option>
                                                                        <option value="lorem3">lorem mabuzo candle</option>
                                                                        <option value="lorem4">lorem mabuzo candle</option>
                                                                    </select>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="RAdult">Adult</label>
                                                                    <select name="RAdult" class="form-control" value="<?php echo $row['RoomAdult']; ?> ">
                                                                       <option value="One Adult Room">Single Adult Room</option>
                                                                        <option value="Two Adult Room">Royal Room</option>
                                                                        <option value="Three Adult">Three Adult Room</option>
                                                                        <option value="lorem4">lorem mabuzo candle</option>
                                                                    </select>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="Rchild">Child:</label>
                                                                    <select name="RChild" class="form-control" value="<?php echo $row['RoomChild']; ?>">
                                                                    <option value="One Child Room">Single Child</option>
                                                                        <option value="Two Child Room">Two Child</option>
                                                                        <option value="Three Child">Three Child Room</option>
                                                                        <option value="lorem4">lorem mabuzo candle</option>
                                                                    </select>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="RPrice">Room Price</label>
                                                                    <input type="text" Name="RPrice" class="form-control"placeholder="Eg. 2" value="<?php echo $row['RoomPrice']; ?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="RPicture">Room Picture</label>
                                                                    <input type="file" name="RPicture" class="form-control" value="<?php echo $row['RoomImage']; ?>" >
                                                                  </div>
                                                                  <input type="submit" class="btn btn-info form-control" name="updateroom" value="Update Room"/>  
                                                          </form>
                                                        </div>
                                                  <div class="modal-footer">
                                                          <button type="button" style="float:right;" class="btn btn-danger" data-dismiss="modal">Close</button>                                        
                                                  </div></div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                  
                                  </td>
                                  <td>
                                      <a href="Room.php?deleteroom=<?php echo $row['RId']?>" 
                                        class="btn btn-danger" name="deleteroom"><span class="fa fa-trash"></span></a>
                                  </td>
                              </tr>
                          <?php endwhile ?>
                          </tr>
                          <tbody>
                        </table>
                    </div>
                 </div>
              </div>
              
    
              <!-- <p>Add romm modal</p> -->
              <div class="modal" id="AddRoom"  >
                <div class="modal-dialog">
                <div class="modal-content" >
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h6 class="modal-title">ADD NEW ROOM</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <form action="" method="POST">
                              <input type="hidden" name="id">
                            <div class="form-group">
                              <label for="RNumber">Room Number</label>
                              <input type="text" name="RNumber" class="form-control" placeholder="Eg. R10">
                            </div>
                            <div class="form-group">
                              <label for="RType">Room Type</label>
                              <select name="RType" class="form-control">
                                  <option value="Standard Room">Standard Room</option>
                                  <option value="Royal Room">Royal Room</option>
                                  <option value="lorem3">lorem mabuzo candle</option>
                                  <option value="lorem4">lorem mabuzo candle</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="RAdult">Adult</label>
                              <select name="RAdult" class="form-control">
                                  <option value="One Adult Room">Single Adult Room</option>
                                  <option value="Two Adult Room">Royal Room</option>
                                  <option value="Three Adult">Three Adult Room</option>
                                  <option value="lorem4">lorem mabuzo candle</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="Rchild">Child:</label>
                              <select name="RChild" class="form-control" >
                              <option value="One Child Room">Single Child</option>
                                  <option value="Two Child Room">Two Child</option>
                                  <option value="Three Child">Three Child Room</option>
                                  <option value="lorem4">lorem mabuzo candle</option>
                              </select>
                            </div>
                             <div class="form-group">
                              <label for="RPrice">Room Price</label>
                              <input type="text" Name="RPrice" class="form-control"placeholder="Eg. 2">
                            </div>
                            <div class="form-group">
                              <label for="RPicture">Room Picture</label>
                              <input type="file" name="RPicture" class="form-control">
                            </div>
                            
                            <button type="submit" name="Roomsubmit" class="btn btn-info form-control">Click here to add new room</button>
                            <button type="button" class="btn btn-danger mt-2" data-dismiss="modal"  style="float: right;">Close</button>
                    </form>
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
</body>

</html>