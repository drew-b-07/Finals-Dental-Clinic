<?php require_once __DIR__."/../../config/settings-configuration.php";

//  if(!isset($_SESSION["userSession"])) {
//      echo "<script>alert('user is not logged in yet.'); window.location.href = '../../';</script>";
//      exit;
//  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care | Profile</title>
    <link rel="stylesheet" href="../../src/css/profile.css">
    <link rel="icon" type="image/png" href="../../src/img/icon.png">
</head>
<body>
    <duv class="profile-container">
        <h2>PROFILE</h2>
        <form>
            <div class="form-group">
                <label for="fullname">Full Name: </label>
            </div>
            
            <div class="form-group">
                <label for="username">Username: </label>
            </div>

            <div class="form-group">
                <label for="email">Email Address: </label>
            </div>

            
            <!-- <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="last_name" required>
             </div>
            <div class="form-group">
                <label>Schedule:</label>
                <input type="date" name="schedule" required>
            </div>
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" name="first_name" required>
            </div>
            <div class="form-group">
                <label>Birthday:</label>
                <input type="date" name="birthday" required>
            </div>
            <div class="form-group">
                <label>Middle Initials:</label>
                <input type="text" name="middle_initials">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" name="address" required>
            </div>
            <div class="form-group age-group" >
                <label>Age:</label>
                <input type="number" name="age" required>
            </div>  -->
            <div class="button-container">
                <button type="submit" class="submit-button">EDIT PROFILE</button>
            </div>
        </form>
    </div>
</body>
</html>