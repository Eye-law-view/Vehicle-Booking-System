<?php session_start();
include('vendor/inc/config.php');
include('vendor/inc/checklogin.php');
check_login();

$aid = $_SESSION['u_id'];

// Check if the user ID is valid
if (!$aid) {
    die("User ID is not set in the session.");
}

// Fetch user details to use in the booking
$user_query = "SELECT u_fname, u_lname, u_phone, u_addr, u_category, u_email, u_pwd, u_car_type, u_car_regno, u_car_bookdate, u_car_book_status, u_source, u_destination FROM tms_user WHERE u_id=?";
$stmt_user = $mysqli->prepare($user_query);
$stmt_user->bind_param('i', $aid);
$stmt_user->execute();
$user_result = $stmt_user->get_result();
$user = $user_result->fetch_object();

// Check if the user exists
if (!$user) {
    die("User not found in the database.");
}

if (isset($_POST['book_vehicle'])) {
    $u_car_type = $_POST['u_car_type'];
    $u_car_regno = $_POST['u_car_regno'];
    $u_car_bookdate = $_POST['u_car_bookdate'];
    $u_car_book_status = $_POST['u_car_book_status'];
    $u_source = $_POST['u_source'];  
    $u_destination = $_POST['u_destination'];  

    // Use UPDATE query to update the existing booking details
    $query = "UPDATE tms_user SET u_car_type=?, u_car_bookdate=?, u_car_regno=?, u_car_book_status=?, u_source=?, u_destination=? WHERE u_id=?";

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssssssi', $u_car_type, $u_car_bookdate, $u_car_regno, $u_car_book_status, $u_source, $u_destination, $aid);

    if ($stmt->execute()) {
        $succ = "Booking Updated Successfully";
    } else {
        $err = "Please Try Again Later";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include('vendor/inc/head.php');?>

<body id="page-top">
 <!--Start Navigation Bar-->
  <?php include("vendor/inc/nav.php");?>
  <!--Navigation Bar-->

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("vendor/inc/sidebar.php");?>
    <!--End Sidebar-->
    
    <div id="content-wrapper">

      <div class="container-fluid">
      <?php if(isset($succ)) {?>
        <!--Success Alert-->
        <script>
          setTimeout(function () { 
              swal("Success!","<?php echo $succ;?>!","success");
          }, 100);
        </script>
      <?php } ?>
      <?php if(isset($err)) {?>
        <!--Failure Alert-->
        <script>
          setTimeout(function () { 
              swal("Failed!","<?php echo $err;?>!","Failed");
          }, 100);
        </script>
      <?php } ?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="user-dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item">Vehicle</li>
          <li class="breadcrumb-item">Book Vehicle</li>
          <li class="breadcrumb-item active">Confirm Booking</li>
        </ol>

        <hr>
        <div class="card">
        <div class="card-header">
          Confirm Booking
        </div>
        <div class="card-body">
          <!--Booking Form-->
          <?php
            $aid=$_GET['v_id'];
            $ret="SELECT * FROM tms_vehicle WHERE v_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute();
            $res=$stmt->get_result();
            while($row=$res->fetch_object())
            {
          ?>
          <form method="POST"> 
            <div class="form-group">
              <label for="exampleInputEmail1">Vehicle Category</label>
              <input type="text" value="<?php echo $row->v_category;?>" readonly class="form-control" name="u_car_type">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Vehicle Registration Number</label>
              <input type="text" value="<?php echo $row->v_reg_no;?>" readonly class="form-control" name="u_car_regno">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Booking Date</label>
              <input type="date" class="form-control" name="u_car_bookdate" required>
            </div>

            <!-- Source Dropdown -->
            <div class="form-group">
              <label for="source">Source</label>
              <select class="form-control" name="u_source" required>
                <option value="">Select Source City</option>
                <option value="Kathmandu">Kathmandu</option>
                <option value="Pokhara">Pokhara</option>
                <option value="Biratnagar">Biratnagar</option>
                <option value="Lalitpur">Lalitpur</option>
                <option value="Dharan">Dharan</option>
              </select>
            </div>

            <!-- Destination Dropdown -->
            <div class="form-group">
              <label for="destination">Destination</label>
              <select class="form-control" name="u_destination" required>
                <option value="">Select Destination City</option>
                <option value="Kathmandu">Kathmandu</option>
                <option value="Pokhara">Pokhara</option>
                <option value="Biratnagar">Biratnagar</option>
                <option value="Lalitpur">Lalitpur</option>
                <option value="Dharan">Dharan</option>
              </select>
            </div>

            <div class="form-group" style="display:none">
              <label for="exampleInputEmail1">Booking Status</label>
              <input type="text" value="Pending" class="form-control" name="u_car_book_status">
            </div>

            <button type="submit" name="book_vehicle" class="btn btn-success">Confirm Booking</button>
          </form>
          <!-- End Form-->
          <?php }?>
        </div>
      </div>

      <hr>

      <!-- Sticky Footer -->
      <?php include("vendor/inc/footer.php");?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="admin-logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- INject Sweet alert js-->
 <script src="vendor/js/swal.js"></script>

</body>
</html>
