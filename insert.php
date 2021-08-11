  
<?php
$conn= mysqli_connect('localhost','root','','library');
if(mysqli_connect_errno()){
	echo "failed to connect";
	exit();
}
else
{
	// echo "connection success";
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
// $email=$_POST['email'];
// echo "$email $username $mobile $password";
// echo "hello";
$sql="INSERT INTO  details VALUES ('$username','$email','$mobile','$password')";
$data= mysqli_query($conn,$sql);
if($data)
   echo '<p style="color:green;position:absolute;top:20px;left:41%;">Data inserted Successfully !!</p><div style="position:absolute;left:44%;top:50px;"><button><i><a href="login.php">Click me to Login</a></i></button></div>
	<img class="wave" src="img/undraw_road_to_knowledge_m8s0.svg">';
	
	 
else
  echo '<p style="color:red;position:absolute;top:20px;left:30%;">Failed to Data inserted into database May be you use some wrong credentials!!</p> <div style="position:absolute;left:44%;top:50px;"><button><i><a href="register.html">Go back to Register</a></i></button></div>
	<img class="wave" src="img/undraw_road_to_knowledge_m8s0.svg">';
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<!-- <img src="img/avatar.svg"> -->
 
</body>
</html>
