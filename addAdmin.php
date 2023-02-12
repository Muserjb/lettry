<?php include 'top-side-navba.php';

if(isset($_POST['adminsubmit'])){
    $adminuser= $_POST['adminusername'];
    $adminpassword= $_POST['adminpassword'];
    $adminpasswordConfirm= $_POST['adminconfirmpassword'];
  $mysqli->query("INSERT INTO admin(AdminUsername, AdminPassword, AdminConfirm)
                 VALUES('$adminuser','$adminpassword','$adminpasswordConfirm')");
  
  }
  ?> 


        <div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">ADD ADMINISTRATOR PANEL</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add_admin</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class=" card col-md-10 bg-light mt-2 rounded">
                <h4 cLass="text-info p-2 text-center">Create New Admin</h4><hr>
                <center>
                    <form action="" method="POST">
                        <div class="form-group">
                        <label></label>   
                            <input type="text" name="adminusername" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                        <label></label>    
                            <input type="text" name="adminpassword" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                        <label></label>                    
                            <input type="text" name="adminconfirmpassword" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                        <label></label>                    
                            <button type="button"  class="btn btn-info form-control"  data-toggle="modal" data-target="#modelId" class="form-control">click here to add</button>
                        </div>
                    </form> 
                 </center>
            </div> 

        </div>
        </div>




<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title text-center">ARE YOU SURE YOU WANT TO ADD ADMIN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid text-center">
                   <span style="font-size:40px; color:red;" class="text-center"><i class=" fa fa-question"></i></span>
                </div>
            </div>
            <div class="m-2">
                <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-info "  name="adminsubmit" style="float:right;">click here to add</button>
                       
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>


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