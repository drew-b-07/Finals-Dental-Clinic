<?php
// Database connection
$servername = "localhost";  // Database server
$username = "root";         // MySQL username
$password = "";             // MySQL password (if any)
$dbname = "hospital";       // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch patient list for appointment scheduling
$patients = $conn->query("SELECT id, first_name, last_name FROM patients");

// Handle appointment scheduling
if (isset($_POST['schedule_appointment'])) {
    $patient_id = $_POST['patient_id'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_status = $_POST['appointment_status'];

    // Insert appointment into the database
    $sql = "INSERT INTO appointments (patient_id, appointment_date, status) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $patient_id, $appointment_date, $appointment_status);

    if ($stmt->execute()) {
        echo "<script>alert('Appointment scheduled successfully!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Appointment</title>
    <link rel="stylesheet" href="scheduleappointment.css">
</head>
<body>


<div class="container">
    <h2>Schedule Appointment</h2>
    <form method="POST">
        <div class="form-group">
            <label for="patient_id">Select Patient</label>
            <select id="patient_id" name="patient_id" required>
                <option value="">-- Select Patient --</option>
                <?php while ($row = $patients->fetch_assoc()): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['first_name'] . ' ' . $row['last_name'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="appointment_date">Appointment Date & Time</label>
            <input type="datetime-local" id="appointment_date" name="appointment_date" required>
        </div>
        <div class="form-group">
            <label for="appointment_status">Appointment Status</label>
            <select id="appointment_status" name="appointment_status" required>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>
        <button type="submit" name="schedule_appointment">Schedule Appointment</button>
    </form>
</div>
</body>
</html>
