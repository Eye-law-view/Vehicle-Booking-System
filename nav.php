<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Fix</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Basic styling for the navbar */
        body {
            margin: 0;
            padding-top: 70px; /* Make space for fixed navbar */
        }

        .navbar {
            background-color: #333;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .navbar-nav {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-left: 20px;
            position: relative;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .nav-link:hover {
            background-color: #555;
            border-radius: 5px;
        }

        /* Dropdown styling */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-toggle::after {
            content: " ▼";
            font-size: 0.8rem;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background-color: #444;
            min-width: 160px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 0;
            z-index: 1001;
        }

        .dropdown-menu li {
            list-style: none;
        }

        .dropdown-item {
            padding: 10px 20px;
            display: block;
            color: #fff;
            text-decoration: none;
            background-color: #444;
        }

        .dropdown-item:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bus Reservation System</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php"><i class="fas fa-concierge-bell"></i> Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php"><i class="fas fa-images"></i> Gallery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog"><i class="fas fa-user-circle"></i> Login Panel</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="admin/"><i class="fas fa-user-shield"></i> Admin Login</a></li>
                        <li><a class="dropdown-item" href="usr/"><i class="fas fa-user"></i> Client Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

   
