
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
if(isset($_POST['no'])) {
    $no = mysqli_real_escape_string($conn, $_POST['no']);

    // Construct the SQL query with prepared statement
    $query = "SELECT * FROM player WHERE p_no = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $no);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        // Fetch the row
        $row = mysqli_fetch_assoc($result);

        // Output additional information
        $first = $row['first'];
        // $age = $row['age'];

        // echo "Player No: " . $row['no'] . "<br>";
        // echo "Name: $name <br>";
        // echo "Age: $age <br>";
        
        // You can output additional fields as needed
    } else {
        echo "No records found for player with No: $no";
    }
    

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
<html>
<body>
    <link rel="stylesheet" href="style.css">
<form action="inst.php" method="post" >
<div class="form-field"> 
 <input type="text"name="p_no" value="<?php echo $row['p_no']; ?>" ><br>
</div>
<div class="form-field">
         <input type="text" name="name"value="<?php echo $first; ?>" ><br>
</div>
        <!-- <div class="form-field">
         <input type="text" name="age"value="<?php echo $age; ?>" ><br>
        </div> -->
        <div class="form-field">
            <br/><input type="text"name="game"placeholder="game" required></br>
            </div>
            <div class="form-field">
            <br/> <input type="text"name="runs"placeholder="runs" required></br>
            </div>
            <div class="form-field">
            <br/> <input type="text"name="balls"placeholder="balls" required></br>
            </div>
            <div class="form-field">
            <br/><input type="text"name="wickets"placeholder="wickets" required></br>
            </div>
            <div class="form-field">
             <br/><input type="text"name="overs"placeholder="overs" required></br>
             </div>
             <div class="form-field">
            <br> <br/><input type="submit"value="insert" class="btn" />
             </div>
         </form>
         <div><button><a href="insert.php">After feed all player records</a></button></div>
         
</body>
<style>
    body{
        background-image: url(im.jpg);
    }
    a{
      text-decoration: none;
    }
    button{
        position: absolute;
        bottom: 2%;
        right: 2%;
  outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 0.9rem 2.5rem;
  text-align: center;
  background-color: yellow;
  color: black;
  border-radius: 4px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 20px;

    }
    button:hover{
        background-color: darkorange;
    }
</style>
</html>