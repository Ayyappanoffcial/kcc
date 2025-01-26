<html>
	
<head> <title> player</title>

</head>
<body>
 <h1></h1>
<?php
$no=$_POST['no'];
$name=$_POST['name'];
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
$query="UPDATE kclub set runs = runs+'$runs',game=game+'$game', balls = balls+'$balls',wickets = wickets+'$wickets',overs = overs+'$overs'
WHERE no='$no'";
$result=mysqli_query($con,$query);


echo"<script>alert('record Updated')</script>";
echo"<h1>record Updated</h1>";
header('location:demo.php');

?>
</body>
</html>