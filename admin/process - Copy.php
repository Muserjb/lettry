<?php 
include 'includes/connection.php';

        if(isset($_POST['submit'])){
          $fullname = $_POST['fullname'];
          $roomtype = $_POST['roomtype'];
          $roomnumber = $_POST['roomnumber'];
          $phonenumber = $_POST['phonenumber'];
          $adult = $_POST['adult'];
          $childroom = $_POST['childroom'];
          $email = $_POST['email'];
          $checkin = $_POST['checkin'];
          $checkout = $_POST['checkout'];
         
          
           $mysqli->query(
            "INSERT INTO guest(FullName, RoomType, RoomNumber, Adult, ChildRoom,  PhoneNumber, Email, CheckIn, CheckOut) 
            VALUES('$fullname','$roomtype' , '$roomnumber',  '$adult', '$childroom', '$phonenumber', '$email', '$checkin', '$checkout' )")
              or die($mysqli->error);
           }  
           $result = $mysqli->query("SELECT * FROM guest WHERE Action ='Aprove'") or die($mysqli->error);
           $resultofaprovedguest = $mysqli->query("SELECT * FROM guest WHERE Action ='Aprove'") or die($mysqli->error);
           
           $ResultOfBooking = $mysqli->query("SELECT * FROM guest WHERE Action =''") or die($mysqli->error);
           $ResultOfStaff = $mysqli->query("SELECT * FROM staff") or die($mysqli->error);
           $ResultOfRooms = $mysqli->query("SELECT * FROM rooms") or die($mysqli->error);


           
    if(isset($_POST['update'])){
        $id =  $_POST['id'];
        $fullname = $_POST['fullname'];
        $roomtype = $_POST['roomtype'];
        $roomnumber = $_POST['roomnumber'];
        $phonenumber = $_POST['phonenumber'];
        $adult = $_POST['adult'];
        $childroom = $_POST['childroom'];
        $email = $_POST['email'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
       
    $mysqli->query("UPDATE guest SET FullName='$fullname',RoomType='$roomtype',RoomNumber='$roomnumber', Adult='$adult',PhoneNumber='$phonenumber',Email='$email',CheckIn='$checkin',CheckOut= '$checkout', ChildRoom='$childroom' WHERE Id = '$id'")
    or die($mysqli->error);
        header("location: ViewGuest.php");
      }

        if(isset($_GET['delete'])){
          $id = $_GET['delete'];
          $mysqli->query("DELETE FROM guest WHERE Id = $id") or die($mysqli->error);
        
        }
     $row=$result->fetch_assoc();
    $c = count($row['Id']);
      // if(isset($_POST['search'])){
      //   $id= $_POST['SearchID'];
      //   $mysql->query("SELECT * FROM guest WHERE FullName LIKE CONCAT('%','?','%') OR RoomNumber LIKE  CONCAT('%','?','%')");
        
      //  }




  // STAFF PROCESSING
if(isset($_POST['submitstaff'])){
  $stafffullname = $_POST['stafffullname'];
  $staffid = $_POST['staffid'];
  $staffphonenumber = $_POST['staffphonenumber'];
  $staffemail = $_POST['staffemail'];
  $staffrole = $_POST['staffrole'];
  $staffqualification = $_POST['staffqualification'];
 
  
   $mysqli->query(
    "INSERT INTO staff(StaffFullName, StaffId, StaffPhoneNumber, StaffEmail, StaffRole,  StaffQualification) 
    VALUES('$stafffullname','$staffid' , '$staffphonenumber',  '$staffemail', '$staffrole', '$staffqualification')")
      or die($mysqli->error);
   }  
   $resultofstaff= $mysqli->query("SELECT * FROM staff") or die($mysqli->error);

   if(isset($_POST['updatestaff'])){
    $id =  $_POST['deleteID'];
    $stafffullname = $_POST['stafffullname'];
    $staffid = $_POST['staffid'];
    $staffphonenumber = $_POST['staffphonenumber'];
    $staffemail = $_POST['staffemail'];
    $staffrole = $_POST['staffrole'];
    $staffqualification = $_POST['staffqualification'];

    $mysqli->query("UPDATE staff SET StaffFullName='$stafffullname',StaffId='$staffid',staffphonenumber='$staffphonenumber', 
                    StaffEmail='$staffemail',StaffRole='$staffrole',StaffQualification= '$staffqualification' WHERE SId = '$id'")
    or die($mysqli->error);
    header("location:Staff.php");
   }

   if(isset($_GET['deletestaff'])){
    $id = $_GET['deletestaff'];
    $mysqli->query("DELETE FROM staff WHERE sid = $id") or die($mysqli->error);
    header("location: Staff.php");
  }

  // ROOMS PROCESSING
  if(isset($_POST['Roomsubmit'])){
    $id=$_POST['id'];
    $RNumber = $_POST['RNumber'];
    $RType = $_POST['RType'];
    $RPrice = $_POST['RPrice'];
    $RAdult = $_POST['RAdult'];
    $RChild = $_POST['RChild'];
    $RPicture = $_POST['RPicture'];
   
    
     $mysqli->query(
      "INSERT INTO rooms(RoomNumber, RoomType, RoomPrice, RoomAdult, RoomChild,  RoomImage) 
      VALUES('$RNumber','$RType' , '$RPrice',  '$RAdult', '$RChild', '$RPicture')")
        or die($mysqli->error);
     }  
     $resultrooms = $mysqli->query("SELECT * FROM rooms") or die($mysqli->error);
  
     if(isset($_POST['updateroom'])){
      $id =  $_POST['rid'];
      $RNumber = $_POST['RNumber'];
      $RType = $_POST['RType'];
      $RPrice = $_POST['RPrice'];
      $RAdult = $_POST['RAdult'];
      $RChild = $_POST['RChild'];
      $RPicture = $_POST['RPicture'];
  
  $mysqli->query("UPDATE rooms SET RoomNumber='$RNumber',RoomType='$RType',RoomPrice='$RPrice',RoomAdult='$RAdult',RoomChild='$RChild', RoomImage='$RPicture' WHERE RId = '$id'")
  or die($mysqli->error);
  header("location:Room.php");
     }
  
     if(isset($_GET['deleteroom'])){
      $id = $_GET['deleteroom'];
      $mysqli->query("DELETE FROM rooms WHERE RId = $id") or die($mysqli->error);
      header("location: Room.php");
    }


    
    //BOOKING PROCESSING    
    if(isset($_POST['submitbooking'])){
      $fullname = $_POST['fullname'];
      $roomtype = $_POST['roomtype'];
    //  $roomnumber = $_POST['roomnumber'];
      $phonenumber = $_POST['phonenumber'];
      $adult = $_POST['adult'];
      $childroom = $_POST['childroom'];
      $email = $_POST['email'];
      $checkin = $_POST['checkin'];
      $checkout = $_POST['checkout'];
      
       $mysqli->query(
        "INSERT INTO guest(FullName, RoomType,  Adult, ChildRoom,  PhoneNumber, Email, CheckIn, CheckOut) 
        VALUES('$fullname','$roomtype' ,   '$adult', '$childroom', '$phonenumber', '$email', '$checkin', '$checkout' )")
          or die($mysqli->error);
        
       } 

       
   
      if(isset($_POST['updatebooking'])){
          $id =  $_POST['id'];
          $fullname = $_POST['fullname'];
          $roomtype = $_POST['roomtype'];
          $roomnumber = $_POST['roomnumber'];
          $phonenumber = $_POST['phonenumber'];
          $adult = $_POST['adult'];
          $childroom = $_POST['childroom'];
          $email = $_POST['email'];
          $checkin = $_POST['checkin'];
          $checkout = $_POST['checkout'];
        
      $mysqli->query("UPDATE guest SET FullName='$fullname',RoomType='$roomtype',RoomNumber='$roomnumber', Adult='$adult',PhoneNumber='$phonenumber',Email='$email',CheckIn='$checkin',CheckOut= '$checkout', ChildRoom='$childroom' WHERE Id = '$id'")
      or die($mysqli->error);
      $_SESSION['updatebooking'] ="Record has been successfully updated...";

          header("location: Booking.php");
        }

        if(isset($_GET['approvebooking'])){
          $action = 'Aprove';
          $id = $_GET['approvebooking'];
          $mysqli->query("UPDATE guest SET Action ='$action' WHERE Id = $id ") or die($mysqli->error);
          $_SESSION['approvebooking'] ="Record has been successfully Approved...";
          header("location: Booking.php");
        }

          if(isset($_GET['deletebooking'])){
            $iddelete = $_GET['deletebooking']; 
            $mysqli->query("DELETE FROM guest WHERE Id = $iddelete") or die($mysqli->error);          
            $_SESSION['deletebooking'] ="Record has been successfully deleted ...";
            header("location: Booking.php");
          }
        

          if(isset($_POST['assignRoom'])){
            $id =  $_POST['id'];
            $fullname = $_POST['fullname'];
            $roomtype = $_POST['roomtype'];
            $roomnumber = $_POST['roomnumber'];
            $phonenumber = $_POST['phonenumber'];
            $adult = $_POST['adult'];
            $childroom = $_POST['childroom'];
            $email = $_POST['email'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
           
        $mysqli->query("UPDATE guest SET FullName='$fullname',RoomType='$roomtype',RoomNumber='$roomnumber', Adult='$adult',PhoneNumber='$phonenumber',Email='$email',CheckIn='$checkin',CheckOut= '$checkout', ChildRoom='$childroom' WHERE Id = '$id'")
        or die($mysqli->error);
            header("location: checkin.php");
            echo "<script type='text/javascript'>alert('successfull!!');</script>";
          }
?>