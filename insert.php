<html>
    <head>
    <link rel="stylesheet" href="at.css">
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

$sql = "SELECT no,name,age,MAX(game) AS total_game,sum(runs)AS total_runs,sum(balls)AS total_balls,sum(wickets)AS total_wickets,sum(overs)AS total_overs FROM kclub GROUP BY no";

$result =$conn->query($sql);


// if ($result->num_rows > 0) {
//     echo "<table border='1'><tr><th>No</th><th>Name</th><th>Age</th><th>Game</th><th>Runs</th><th>Balls</th><th>Wickets</th><th>Overs</th></tr>";
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo"<tr><td>" . $row["no"]."</td><td>" . $row["name"]."</td><td>"  . $row["age"]."</td><td>". $row["game"]."</td><td>". $row["sum(runs)"]."</td><td>". $row["balls"]."</td><td>" . $row["wickets"]."</td><td>". $row["overs"];
//   }
//   echo"</table>";
// }
//  else {
//   echo "0 results";
// }
if ($result) {
    // Create a new table to store the results
    $createTableSQL = "CREATE TABLE IF NOT EXISTS new_table (
                        no VARCHAR(255),
                        name VARCHAR(20),
                        age INT,
                        total_game INT(255),
                        total_runs INT,
                        total_balls INT,
                        total_wickets INT,
                        total_overs INT
                    )";

    if (mysqli_query($conn, $createTableSQL)) {
        // Insert data into the new table
        while ($row = mysqli_fetch_assoc($result)) {
            $no = mysqli_real_escape_string($conn, $row['no']);
            $name = $row['name'];
            $age = $row['age'];
            $total_game = mysqli_real_escape_string($conn, $row['total_game']);
            $total_runs = $row['total_runs'];
            $total_balls = $row['total_balls'];
            $total_wickets = $row['total_wickets'];
            $total_overs = $row['total_overs'];
            
            $insertSQL = "INSERT INTO new_table (no, name, age, total_game, total_runs, total_balls, total_wickets, total_overs) 
                          VALUES ('$no', '$name', '$age', '$total_game', '$total_runs', '$total_balls', '$total_wickets', '$total_overs')";

            if (!mysqli_query($conn, $insertSQL)) {
                echo "Error inserting data: " . mysqli_error($conn);
            }
        }
        echo "Data inserted into new_table successfully!";
    } else {
        echo "Error creating new_table: " . mysqli_error($conn);
    }
}
header('location:demo.php');
?>
</html>