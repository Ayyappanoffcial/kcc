
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

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $native = $_POST["native"];
    $specification = $_POST["specification"];


    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    

    // SQL to insert data into database
    $sql = "INSERT INTO player (first,last, email,dob, password,repassword,mobile, gender,native,specification) VALUES ('$first','$last', '$email', '$dob','$password','$repassword','$mobile', '$gender','$native','$specification')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();