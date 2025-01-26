<html>
    <head>
    <link rel="stylesheet" href="">
       <style>
       nav > button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 20px 2px;
    cursor: pointer;
    border-radius: 5px;
    margin-left: 170px;
}

body {
   background-image: url(img/cricket3.png);
   background-repeat: no-repeat;
   background-size: 60%;
}

nav {
    background-color: black; /* Dark gray background color */
    overflow: hidden;
    height: 13%;
} 
       </style>
</head>
 <script>
    function hw() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("highs").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "view.php", true);
      xmlhttp.send();
    }
    function hr() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("highs").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "highrun.php", true);
      xmlhttp.send();
    }
    function hba() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("highs").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "strike.php", true);
      xmlhttp.send();
    }  
    function hwa() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("highs").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "bowlavg.php", true);
      xmlhttp.send();
    } 
 </script>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kalam";
$run="runs";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo"<nav>";
echo"<button onClick='hw()'>Highest Wicket</button>";
echo"<button onClick='hr()'>Highest Run</button>";
echo"<button onClick='hba()'>Batting average</button>";
echo"<button onClick='hwa()'>Bowling average</button>";
echo"</nav>";
echo"<div id='highs'></div>";
 ?>
</body>
</html>