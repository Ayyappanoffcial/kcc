<html>
  <link rel="stylesheet" href="at.css">
    <body bgcolor="white"text="black">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kalam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
	die('connection error:'.mysqli_connect_error());
}
// echo'connection success';
$sql = "SELECT no,name,total_game,total_wickets,total_overs FROM new_table GROUP BY no ORDER BY total_wickets DESC ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br><table border='1' id='highs'><tr><th>No</th><th>Name</th><th>Game</th><th>Wickets</th><th>Overs</th></tr>";
   // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr><td>" . $row["no"]."</td><td>" . $row["name"]."</td><td>"  . $row["total_game"]."</td><td>". $row["total_wickets"]."</td><td>". $row["total_overs"];
   
  }
}
echo"</table>";


?>
</body>
</html>