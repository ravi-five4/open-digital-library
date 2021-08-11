<?php session_start();?>
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
$password=$_POST['password'];
$sql ="SELECT * FROM details WHERE username='$username' AND password='$password' ";
$data=mysqli_query($conn,$sql);
if(mysqli_num_rows($data)>0)
{

	 header('Location:home.php');
}
else
	echo '<p style="color:red;position:absolute;top:20px;left:41%;">Failed to Login !!</p><div style="position:absolute;left:41%;top:80px;text-decoration:none;"><button><i><a href="login.php">Click me to Login</a></i></button></div>
	<img class="wave" src="img/undraw_road_to_knowledge_m8s0.svg">';


}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 
<body>

</body>
</html>
