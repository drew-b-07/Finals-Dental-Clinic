<?php
require_once __DIR__."/../../config/settings-configuration.php";

 if(!isset($_SESSION["userSession"])) {
     echo "<script>alert('user is not logged in yet.'); window.location.href = '../../';</script>";
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
    <link rel="icon" type="image/png" href="../../src/img/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="nav-left">
                <h1>Dental Care Clinic</h1>
            </div>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="appointment.php" class="haber">Appointment</a></li>
                <li><a href="./service.php" class="haber">Service</a></li>
                <li><a href="about.php" class="haber">About Us</a></li>
                <li><button onclick="Ulogout()">Logout</button></li>
                <a href="profile.php">
                    <div class="profile-icon-button">
                        <img src="../../src/img/profile.jpg" alt=" " class="profile-icon">
                    </div>
                </a>
            </ul>
        </nav>
    </header>

    <section class="intro">
        <h2>The Best Accessory You Can Wear is a Healthy Smile</h2>
            <div class="images">
                <img src="../../src/img/page1.jpg" alt=" ">
                <img src="../../src/img/page2.jpg" alt=" ">
                <img src="../../src/img/page3.jpg" alt=" ">
            </div>
            <div class="images">
                <img src="../../src/img/page4.jpg" alt=" ">
                <img src="../../src/img/page5.jpg" alt=" ">
            </div>

                    <!-- New Appointment Button -->
            <div class="appointment-section">
                <button onclick="window.location.href='appointment.php'" class="appointment-button">Make an Appointment</button>
            </div>
    </section>
     
    <section class="slogan_container">
        <h1>Where Smiles Begin and Care Never Ends</h1>
        <div class="slogan_p">
            <p>We are dedicated to your dental health and overall well-being. From the moment you arrive, you’ll 
                experience a welcoming and personalized approach to care. Using advanced technology and a gentle 
                touch, we offer everything from routine cleanings to cosmetic transformations. Our goal is to ensure 
                your comfort and help you achieve a healthy, radiant smile that lasts a lifetime. Your confidence and 
                smile are always our top priorities!</p>
        </div>
        <div class="slogan_logo">
            <img src="../../src/img/logo.png" alt="Logo">
        </div>
    </section>

    <script src="../../src/js/script.js"></script>
</body>
</html>