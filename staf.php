<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "kalam";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_no = $_POST['student_no'];
    $student_name = $_POST['student_name'];
    $role = $_POST['role'];
    $attendance_status = $_POST['attendance_status'];
    $date = date("Y-m-d");

    // Insert attendance data into the database
    $sql = "INSERT INTO kcstaf (student_no,student_name,role, attendance_status, date) VALUES ('$student_no','$student_name','$role', '$attendance_status', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Attendance submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>