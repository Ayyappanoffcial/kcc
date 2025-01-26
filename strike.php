
<html>
    <head>
    <link rel="stylesheet" href="at.css">
    <style>
        table th tr{
            border:2px solid black;
        }
       </style>
    </head>
    <body>
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

$sql = "SELECT no,name,total_runs,total_game FROM new_table GROUP BY no";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Player_No</th><th>Player</th><th>Batting Average</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
        $strike_rate = ($row["total_runs"] / $row["total_game"]);
        $strike_rate=round(number_format((float)$strike_rate,1,'.',''));
        
        echo "<tr><td>" . $row["no"]."<td>" . $row["name"]."<td>"."$strike_rate" ."<br>";
       
    }
    echo"</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
    </body>
     
</html>

