<html>
    <head>
    <link rel="stylesheet" href="at.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

$sql = "SELECT* from kcstaf";
$result =$conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Staff Id</th><th>Staff Name</th><th>Role</th><th>Status</th><th>Date</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr><td>" . $row["student_no"]."</td><td>" .$row["student_name"]."</td><td>"  . $row["role"]."</td><td>"   . $row["attendance_status"]."</td><td>". $row["date"];
  }
  echo"</table>";
}
 else {
  echo "0 results";
}
$conn->close();
?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./at.js"></script>
</html>
