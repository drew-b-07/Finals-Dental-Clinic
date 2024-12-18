<?php
require_once __DIR__."/../../config/settings-configuration.php";

// if(!isset($_SESSION["adminSession"])) {
//     echo "<script>alert('admin is not log in.'); window.location.href = '../../index.php';</script>";
//     exit;
// }

if(!isset($_SESSION["userSession"])) {
    echo "<script>alert('user is not log in.'); window.location.href = '../../';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care | Home</title>
    <link rel="stylesheet" href="../../src/css/mainPage.css">
    <link rel="icon" type="image/png" href="../../src/img/logo1.png">
</head>
<body>
    <header>
        <nav>
            <div class="nav-left">
                <h1>Dental Care</h1>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#" onclick="logout()">Logout</a></li>
                <li><a href="profile.php">
                    <div class="profile-icon-button">
                        <img src="../../src/img/profile.jpg" alt=" " class="profile-icon">
                    </div>
                </a></li>
            </ul>
        </nav>
    </header>

    <section class="intro">
        <h2>The best accessory you can wear is a healthy smile</h2>
        <p>Our goal is to always offer the best dental care to ensure your smile stays healthy, bright, and confident.</p>
        <div class="images">
            <img src="../../src/img/page1.jpg" alt=" ">
            <img src="../../src/img/page2.jpg" alt=" ">
            <img src="../../src/img/page3.jpg" alt=" ">
            <img src="../../src/img/page4.jpg" alt=" ">
            <img src="../../src/img/page5.jpg" alt=" ">
        </div>
    </section>

    <!-- New Appointment Button -->
    <div class="appointment-section">
        <button onclick="window.location.href='appointment.php'" class="appointment-button">Make an Appointment</button>
    </div>
     
    <section class="services"> 
    <h2>Our Services</h2><br>
    </section>

    <section class="services"> 
    <p>Focus on services that patients commonly seek or those that set your clinic apart, such as:</p>
    </section>

    <section class="services" id="services">
        <div class="service">
            <img src="../../src/img/column 1.png" alt="Cleaning Icon">
            <h3>Cleaning</h3>
            <p>Regular teeth cleaning keeps your teeth white, removes plaque, and helps keep your breath healthy and bright.</p>
        </div>
        <div class="service">
            <img src="../../src/img/column 2.png" alt="Dental Orthodontics Icon">
            <h3>Dental Orthodontics</h3>
            <p>Correcting misaligned teeth and jaws to improve bites, align the teeth properly, and improve oral health.</p>
        </div>
        <div class="service">
            <img src="../../src/img/column 3.png" alt="Fixed Bridge Icon">
            <h3>Fixed Bridge</h3>
            <p>Fixed crowns are typically used in precision and cosmetic dentistry to restore shape and size of your teeth.</p>
        </div>
    </section>

    <script src="../../src/js/popup-logout.js"></script>
</body>
</html>