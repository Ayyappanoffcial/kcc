<html>
    <head>
    <link rel="stylesheet" href="at.css">
       <style>
        table th tr{
            border:2px solid black;
        }
        
       </style>
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

$sql = "SELECT no,name,MAX(game),runs,balls,wickets,overs FROM kclub GROUP BY no ORDER BY game DESC";

$result =$conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>No</th><th>Name</th><th>Game</th><th>Runs</th><th>Balls</th><th>Wickets</th><th>Overs</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr><td>" . $row["no"]."</td><td>" . $row["name"]."</td><td>". $row["MAX(game)"]."</td><td>". $row["runs"]."</td><td>". $row["balls"]."</td><td>" . $row["wickets"]."</td><td>". $row["overs"];
  }
  echo"</table>";
}
 else {
  echo "0 results";
}
$conn->close();
?>
</html>