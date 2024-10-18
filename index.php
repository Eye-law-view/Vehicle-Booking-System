<?php
  session_start();
  include('admin/vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Reservation System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            background-color: #f0f4f8;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header Section */
        header {
            background: url('vendor/img/busscch.jpeg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            color: white;
            text-align: center;
        }
        .header-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .header-content {
            position: relative;
            z-index: 1;
        }
        .header-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }
        .header-content p {
            font-size: 1.5rem;
        }

        /* Button Styles */
        .btn-book {
            background-image: linear-gradient(to right, #28a745, #218838);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }
        .btn-book:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        /* Container Styling */
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        h2.text-center {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 40px;
            color: #343a40;
            text-align: center;
        }

        /* Features Section */
        .features-section {
            padding: 50px 0;
            text-align: center; /* Centering the text in the section */
        }
        .features-row {
            display: flex;
            justify-content: space-between; /* Add space between the cards */
            align-items: center;
            gap: 20px; /* Adds spacing between the cards */
        }
        .feature-card {
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 30%; /* Set the width of each card to ensure all 3 fit in one row */
            text-align: center;
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .feature-icon {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .feature-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .feature-card p {
            font-size: 1rem;
            color: #6c757d;
        }

        /* Client Testimonials Section */
        .testimonials-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            text-align: center; /* Centering the text in the section */
        }
        .testimonials-row {
            display: flex;
            justify-content: space-between; /* Add space between the cards */
            align-items: center;
            gap: 20px; /* Adds spacing between the cards */
        }
        .testimonial {
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 30%; /* Set the width of each card to ensure all 3 fit in one row */
            text-align: center;
            transition: transform 0.3s;
        }
        .testimonial:hover {
            transform: translateY(-10px);
        }
        .testimonial-img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .testimonial-name {
            font-weight: 600;
            margin-bottom: 5px;
        }
        .testimonial-text {
            font-size: 1rem;
            color: #6c757d;
        }

        /* Footer Section */
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: .9rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .feature-card, .testimonial {
                width: 100%; /* Make the cards full width on smaller screens */
                margin-bottom: 20px;
            }
   


        }
        .feature-card img.feature-image {
    width: 200px; /* Set a consistent width for the images */
    height: auto; /* Maintain the aspect ratio */
    margin-bottom: 15px; /* Space between the image and text */
}
    </style>
</head>
<body>
<?php include 'nav.php'; ?>

<header>
    <div class="header-overlay"></div>
    <div class="header-content">
        <h1>Welcome to the Bus Reservation System</h1>
        <p>Your journey starts here. Book your tickets now!</p>
        <a href="./usr/" class="btn-book">Book Now</a>
    </div>
</header>

<!-- Features Section -->
<h2 class="text-center">Our Features</h2>

<<div class="container features-section">
    <div class="features-row">
        <div class="feature-card">
            <img src="./vendor/img/secure.png" alt="Easy Bus Booking" class="feature-image">
            <h3>Secure and Easy</h3>
            <p>Book your tickets with a few simple steps, hassle-free and quick.</p>
        </div>
        <div class="feature-card">
            <img src="./vendor/img/paisa.png" alt="Real-Time Schedules" class="feature-image">
            <h3>Cheap and Affordable</h3>
            <p>Book your reservation at cheap price.</p>
        </div>
        <div class="feature-card">
            <img src="./vendor/img/comfortable.png" alt="Comfortable Seating" class="feature-image">
            <h3>Comfortable Seating</h3>
            <p>Experience comfortable seating arrangements with enough legroom.</p>
        </div>
    </div>
</div>


<h2 class="text-center">What Our Clients Say</h2>

<?php

// Database query to get 3 random published feedbacks
$ret = "SELECT * FROM tms_feedback WHERE f_status = 'Published' ORDER BY RAND() LIMIT 3";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
?>


<!-- Testimonials Section -->
<div class="container testimonials-section">
    <div class="testimonials-row">
        <?php
        while($row = $res->fetch_object()) {
        ?>
        <div class="testimonial">
            <div class="testimonial-name"><?php echo htmlspecialchars($row->f_uname); ?></div>
            <p class="testimonial-text">"<?php echo htmlspecialchars($row->f_content); ?>"</p>
        </div>
        <?php } ?>
    </div>
</div>


<!-- Footer -->
<footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> Bus Reservation System | All Rights Reserved</p>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
