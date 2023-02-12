<?php include 'top-side-navba.php';?>

        <div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">DASHBOARD</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">..</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3" style="border-radius:280px;">
                        <div class="card card-hover" style="border-radius:280px;" >
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Charts</h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Widgets</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Tables</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                <h6 class="text-white">Full Width</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Forms</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                                <h6 class="text-white">Buttons</h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6 class="text-white">Elements</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                                <h6 class="text-white">Calnedar</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                                <h6 class="text-white">Errors</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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