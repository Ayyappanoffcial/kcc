<html>
	
<head> <title> player</title>

</head>
<body>
 <h1></h1>

<?php
$no=$_POST['no'];
$name=$_POST['name'];
// $age=$_POST['age'];
$game=$_POST['game'];
$runs=$_POST['runs'];
$balls=$_POST['balls'];
$wickets=$_POST['wickets'];
$overs=$_POST['overs'];
$con=mysqli_connect("localhost","root","","kalam");
if (!$con){
	die('connection error:'.mysqli_connect_error());
	
	
    
}

// echo'connection success';
$query="INSERT INTO kclub(no,name,game,runs,balls,wickets,overs)VALUES('$no','$name','$game','$runs','$balls','$wickets','$overs')";
$result=mysqli_query($con,$query);
echo"<script>alert('record inserted')</script>";
echo"<h1>record inserted</h1>";


?>
</body>
</html>