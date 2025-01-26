<?php
// Connect to MySQL database
$conn = new mysqli('localhost', 'root', '', 'kalam');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve selected players from the form
    $presentPlayers = $_POST['presentPlayers'];

    // Prepare and execute SQL statements to insert attendance details into another table
    foreach ($presentPlayers as $playerNo) {
        $sql = "INSERT INTO attendance_details(player_no,attendance_date)VALUES('$playerNo',NOW())";
        if ($conn->query($sql) !== TRUE) {
            echo 'Error saving attendance: ' . $conn->error;
            exit;
        }
    }

    echo 'Attendance saved successfully!';
} else {
    echo 'No data submitted';
}

// Close database connection
$conn->close();
?>