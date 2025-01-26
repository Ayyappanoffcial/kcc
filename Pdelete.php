<html>
	
<head> <title> player</title>

</head>
<body>
 <h1></h1>
<?php
$no=$_POST['no'];
$game=$_POST['game'];

$con=mysqli_connect("localhost","root","","kalam");
if (!$con){
	die('connection error:'.mysqli_connect_error());
}
// echo'connection success';
$query="DELETE FROM kclub WHERE no = '$no' and game='$game'";

$result=mysqli_query($con,$query);
echo"<script>window.alert('record deleted')</script>";
echo"<h1>record deleted</h1>";
header('location:stat.php');

?>
</body>
</html>