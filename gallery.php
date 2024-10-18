<?php
  session_start();
  include('admin/vendor/inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<!--Head-->
<?php include("vendor/inc/head.php");?>
<!--End Head-->
<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

  <!-- Page Content --><br><br><br>
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Our Gallery</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Gallery</li>
    </ol>

    <!-- Improved Vehicle Gallery -->
    <div class="row">
      <?php
        $ret="SELECT * FROM tms_vehicle ORDER BY RAND() LIMIT 10"; // Get random 10 vehicles
        $stmt= $mysqli->prepare($ret);
        $stmt->execute();
        $res=$stmt->get_result();
        while($row=$res->fetch_object()) {
      ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <img class="card-img-top" src="vendor/img/busscch.jpeg" alt="Vehicle Image">
          <div class="card-body">
            <h5 class="card-title text-primary"><?php echo $row->v_category; ?></h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Name:</strong> <?php echo $row->v_name; ?></li>
              <li class="list-group-item"><strong>Passengers:</strong> <?php echo $row->v_pass_no; ?></li>
              <li class="list-group-item"><strong>Registration No:</strong> <?php echo $row->v_reg_no; ?></li>
            </ul>
          </div>
          <div class="card-footer text-center">
            <a href="usr/" class="btn btn-success">Hire Vehicle</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <!-- /.row -->

    <hr>
  </div>  

  <!-- Footer -->
  <?php include("vendor/inc/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
