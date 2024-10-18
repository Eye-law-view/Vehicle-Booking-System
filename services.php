<!DOCTYPE html>
<html lang="en">

<!--Head-->
<?php include("vendor/inc/head.php");?>
<!--End Head-->

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?><br><br><br>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 text-center">Our Services</h1>

    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Services</li>
    </ol>

    <!-- Image Header -->

    <!-- Modern Services Section -->
    <div class="row text-center">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <div class="mb-3">
              <i class="fas fa-bus fa-3x text-primary"></i>
            </div>
            <h4 class="card-title text-primary">Enhanced Transport Modes</h4>
            <p class="card-text">
              We improve access to public transport for all people and organizations by strengthening 
              conditions for sustainable transport modes.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <div class="mb-3">
              <i class="fas fa-tachometer-alt fa-3x text-primary"></i>
            </div>
            <h4 class="card-title text-primary">Faster And Safe Travels</h4>
            <p class="card-text">
              Our services reduce traffic and congestion by shifting from private vehicles to more efficient 
              and sustainable transport modes.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <div class="mb-3">
              <i class="fas fa-network-wired fa-3x text-primary"></i>
            </div>
            <h4 class="card-title text-primary">Networking</h4>
            <p class="card-text">
              We create an efficient multimodal public transport network that facilitates interconnection and interoperability 
              across transport systems.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("vendor/inc/footer.php");?>

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
