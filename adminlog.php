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

// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // For demo purposes, you can replace this with your own authentication logic
    // Check if the username and password are valid
    if ($username === "hello" && $password === "admin") {
        // Store username in session variable
        $_SESSION["username"] = $username;
        // Redirect to a welcome page
        header("Location: admin.php");
        exit;
    } else {
        // If username or password is incorrect, display an error message
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="bg"></div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <div class="form-field">
        <input type="text" id="username" name="username" placeholder="enter ur email"><br>
        </div>
       
        <div class="form-field">
        <input type="password" id="password" name="password" placeholder="password"><br><br>
        </div>
        <div class="form-field">
        <button class="btn" type="submit">Log in</button>
        </div>
        <?php
        // Display error message if login fails
        if (isset($error)) {
            echo "<p style='color:red;'>$error</p>";
        }
        ?>
    </form>
</body>
</html>