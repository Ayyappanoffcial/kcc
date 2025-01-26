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
    $password = $_POST["password"];
    $mail=$_POST['email'];
 
    $sql = "SELECT * FROM login WHERE email='$mail' AND password='$password'";
    $result=$conn->query($sql);
if($result->num_rows==1){
    echo"<script>alert('Login Successfully👁👁')</script>";

    echo"<script>window.location.href='logdisplay.php'</script>";
    exit();
}
else{
    echo"<script>alert('email and password is incorrect👁👁')</script>";
    echo"<script>window.location.href='logex.html'</script>";
}
$conn->close();
?>