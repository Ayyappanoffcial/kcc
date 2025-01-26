<html>
	
<head> <title> player</title>
<link rel="stylesheet" href="at.css">
</head>
<body>
 <h1></h1>
<?php
// Database connection
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "kalam"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['no'])) {
    // 'no' key exists, retrieve its value
    $no = mysqli_real_escape_string($conn, $_POST['no']);
} else {
    // 'no' key doesn't exist, handle the situation accordingly
    // For example, set $no to a default value or display an error message
    $no = ""; // Setting default value
    echo "No 'no' key found in the POST request.";
}


$query="SELECT * FROM kclub WHERE no = '$no' ORDER BY game";

$result=mysqli_query($conn,$query);
if ($result->num_rows > 0) {
    echo "<br><table border='1' id='highs'><tr><th>No</th><th>Name</th><th>Game</th><th>Runs</th><th>Balls</th><th>Wickets</th><th>Overs</th></tr>";
   // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr><td>" . $row["no"]."</td><td>" . $row["name"]."</td><td>"  . $row["game"]."</td><td>".$row["runs"]."</td>
    <td>". $row["balls"]."</td><td>". $row["wickets"]."</td><td>". $row["overs"];
   
  }
}
echo"</table>";
// echo"<script>window.alert('record deleted')</script>";
// echo"<h1>record deleted</h1>";
// header('location:stat.php');

?>
</body>
<style>
    body{
        background-image: url(im.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
    }
</style>
</html>