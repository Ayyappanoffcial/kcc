<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cricket Club</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* Reset styles */
    body, h1, h2, p {
        margin: 0;
        padding: 0;
    }
    /* Global styles */
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(45deg,yellow,skyblue,blue);
        color: #333;
        animation: bg infinite ease-in 5000ms;
    }
    @keyframes bg {
        0%{
            background: linear-gradient(45deg,yellow,skyblue,blue);
        }
        15%{
            background: linear-gradient(45deg,skyblue,blue,yellow);
        }
        35%{
            background: linear-gradient(45deg,blue,yellow,skyblue);
        }
        50%{
            background: linear-gradient(45deg,yellow,skyblue,blue);
        }
        65%{
            background: linear-gradient(45deg,skyblue,blue,yellow);
        }
        85%{
            background: linear-gradient(45deg,blue,yellow,skyblue);
        }
        100%{
            background: linear-gradient(45deg,yellow,skyblue,blue);
        }
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }
    nav {
        background-color: #444;
        padding: 10px;
        text-align: center;
    }
    nav a {
        text-decoration: none;
        color: #fff;
        padding: 5px 10px;
    }
    nav a:hover {
        background-color: #555;
    }
    .hero {
        text-align: center;
        padding: 50px 0;
        background-image: url("https://example.com/your-hero-image.jpg");
        background-size: cover;
        color: #fff;
        
    }
    .hero h1 {
    color:black;
        font-size: 3em;
        margin-top: 100PX;
        margin-bottom: 20px;
    }
    .cta-btn {
        background-color: #ffcc00;
        color: #333;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        text-decoration: none;
    }
    .cta-btn:hover {
        background-color: #ffdb4d;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        margin-top: 300px;
    }

</style>
</head>
<body>
<?php
   session_start();

   // Check if the user came from the previous page
   if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) !== false) {
       // Allow access to the page
   } else {
       // User didn't come from the previous page
    //    $redirecturl="warning.php";
    //    $encodeurl=urlencode($redirecturl);
       header("Location:warning.php");
       exit();
   }
   ?> 
    
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
   ?>
    <header>
        <h1>Kalam Cricket Club</h1>
    </header>
    <nav>
        
    <a href="ex.html">Home</a>
        <!-- <a href="login.html">Sign Up</a> -->
        <a href="about.html">About</a>
        <a href="stat.php">Stats</a>
        <a href="attenview.php">Player status</a>
        <a href="stafview.php"> Staff Status</a>
        <a href="r1.php">Players</a>
        <a href="select.html">Individual Player </a>
        <a href="adminlog.php">Admin</a>
      
        
        <?php
        
    ?> 
 
       
 </nav>
    <div class="hero">
        <h1>Welcome to KALAM Cricket Club</h1>
        <p>Join us and play cricket like never before!</p>
    
    
<br>
        <button><a href="ex.html">LOGOUT</a></button>
        
        <BR>
            <!-- <BR><button><a href="logex.html">LOGIN</a></button> -->
    </div>
    <!-- <div class="container">
    
        <h1>yufweufweufewufguegfugefuwy</h1>
    </div> -->
    <footer>
        &copy; 2024 Cricket Club. All Rights Reserved.
    </footer>
</body>
<style>
    button{
        width: 130px;
        height: 70px;
        border-radius: 30px;
        border: solid green;
        box-shadow: 3px 3px 4px black ;
        text-shadow: 3px 2px 3px black;
        background-color: yellow;
        color: red;
        font-family: 'Times New Roman', Times, serif;
        font-size: larger;
    }
    button:hover{
        
        cursor: pointer;
    }
    a{
        text-decoration: none;

    }
</style>
</html>