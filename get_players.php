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
$sql = "SELECT CONCAT(prefix, p_no) AS p_no , first FROM player";
$result = $conn->query($sql);

// Initialize $players array
$players = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Append player data to $players array
        $players[] = array(
            'playerNo' => $row['p_no'],
            'playerName' => $row['first']
        );
    }
}

// Close database connection
$conn->close();
?>

<!-- HTML Form -->
<body>
<form id="attendanceForm" action="patten.php" method="post">
    <table border="1">
        <link rel="stylesheet" href="at.css">
        <tr>
            <th>Player_No</th>
            <th>Player</th>
            <th>Present</th>
        </tr>
        <?php
        // Loop through players to create form fields
        foreach ($players as $player) {
            echo "<tr>";
            echo "<td>" . $player['playerNo'] . "</td>";
            echo "<td>" . $player['playerName'] . "</td>";
            echo "<td><input type='checkbox' name='presentPlayers[]' value='" . $player['playerNo'] . "'></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div>
    <button type="submit">Submit Attendance</button>
    </div>
    </body>
    <style>
       div{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 10px;
       }
       button{
        outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 0.9rem 2.5rem;
  text-align: center;
  background-color: #47AB11;
  color: #fff;
  border-radius: 4px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
       }
       button:hover{
        background-color: chartreuse;
       }
       body{
        background-image: url(im.jpg);
       }
    </style>
</form>