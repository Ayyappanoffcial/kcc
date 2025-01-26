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

$sql = "SELECT CONCAT(prefix, p_no) AS p_no,first,last,email,dob,mobile,gender,native,specification from player";
$result =$conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>P_no</th><th>First name</th><th>Last name</th><th>Email</th><th>DOB</th><th>Mobile</th><th>Gender</th><th>Native</th><th>Specification</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr><td>" .$row["p_no"]."</td><td>". $row["first"]."</td><td>" . $row["last"]."</td><td>"  . $row["email"]."</td><td>". $row["dob"]."</td><td>".  $row["mobile"]."</td><td>". $row["gender"]."</td><td>". $row["native"]."</td><td>". $row["specification"];
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