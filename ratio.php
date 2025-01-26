<html>
<head>
<link rel="stylesheet" href="at.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kalam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve player data from the database
$sql = "SELECT * FROM kclub";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Player</th><th>Batting average</th><th>Bowling average</th></tr>";
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $game = $row["game"];
        $runs = $row["runs"];
        $wickets = $row["wickets"];
        
        // Calculate ratios
        $batting_average = $runs / $game;
        $bowling_average = $wickets / $game;
       if (!function_exists('calculatePlayerRatio')){
        function calculatePlayerRatio($wickets, $game) {
            if ($wickets == 0) {
                return "N/A"; // Handle division by zero
            }
            return number_format($wickets, $game, 2);
        }
       
        // Display player ratios
        // echo "Player: " . $name . "<br>";
        // echo "Batting Average: " . $batting_average . "<br>";
        // $batting_average= sprintf("%.2f",$batting_average);
        // echo "Bowling Average: " . $bowling_average . "<br>";
        // $bowling_average= sprintf("%.2f",$bowling_average);
        echo "<tr><td>" . $row["name"]."<td>"."$batting_average"."<td>"."$bowling_average" ."<br>";
        echo "<br>";
    }
}}
else {
    echo "0 results";
}

$conn->close();


?>
</html>