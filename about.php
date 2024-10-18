<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("vendor/inc/head.php");?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/styles.css"> <!-- Custom styles -->
    <style>
        /* Custom Modern Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }

        h1, h2 {
            font-weight: 700;
        }

        h1 {
            font-size: 3rem;
            color: #007bff;
        }

        .breadcrumb {
            background-color: transparent;
            font-size: 1rem;
        }

        .breadcrumb-item a {
            text-decoration: none;
            color: #007bff;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }

        .container {
            max-width: 1200px;
            margin-top: 50px;
        }

        .rounded {
            border-radius: .75rem !important;
        }

        .shadow {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        p.lead {
            font-size: 1.2rem;
            line-height: 1.8;
        }

        /* Responsive alignment */
        @media (max-width: 768px) {
            .col-lg-6 {
                margin-bottom: 30px;
            }
        }

        footer {
            margin-top: 50px;
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php include("vendor/inc/nav.php");?>

    <!-- Page Content -->
    <div class="container mt-5">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="text-center mb-4">About Us</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>

        <!-- Intro Content -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow mb-4" src="vendor/img/busscch.jpeg" alt="Bus Image">
            </div>
            <div class="col-lg-6">
                <h2 class="text-primary">About Us</h2>
                <p class="lead">
                    The Bus Reservation System is designed to tackle the challenges faced in transportation.
                    Our platform ensures efficient task allocation, vehicle tracking, route assignment, payment processing, 
                    and booking management, all through a user-friendly system.
                </p>
                <p>
                    With GPS technology integrated into every vehicle, real-time tracking and task assignment become seamless. 
                    Our system also keeps detailed financial reports, customer bookings, and ensures the security of goods 
                    and users. Payments can be processed through credit/debit cards or mobile solutions, 
                    offering convenience and flexibility to our users.
                </p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include("vendor/inc/footer.php");?>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
