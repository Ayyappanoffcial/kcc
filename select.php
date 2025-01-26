<?php
// Establish database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "kalam"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $selected_team = mysqli_real_escape_string($conn, $_POST['team']);

    // Prepare and execute SQL query
    $sql = "SELECT * FROM player ";
    $result = $conn->query($sql);

    // Display player information
    if ($result->num_rows > 0) {
        echo "<h2>Players from $selected_name:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["name"] . " - " . $row["age"] .  $row["native"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No players found for $selected_team";
    }

    // Close database connection
    $conn->close();
}
?>