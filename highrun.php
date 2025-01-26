<html>
    <body bgcolor="white"text="black">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="at.css">
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
$sql = "SELECT no,name,MAX(total_game),MAX(total_runs),MAX(total_balls) FROM new_table GROUP BY no ORDER BY MAX(total_runs) DESC ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br><table  class='w3-container'><tr><th>Name</th><th>No</th><th>Game</th><th>Runs</th><th>Balls</th></tr>";
   // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr w3-table-all w3-card-4><td>" . $row["no"]."</td>
    <td>". $row["name"]."</td>
    <td>"  . $row["MAX(total_game)"]."</td>
    <td>".$row["MAX(total_runs)"]."</td>
    <td>". $row["MAX(total_balls)"]."</td></tr>";
   
  }
}
echo"</table>";


?>
<style>tr:first-child {
  background-color: green; /* Change the background color as needed */
}</style>
</body>
</html>