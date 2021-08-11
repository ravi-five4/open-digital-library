 <?php
$conn= mysqli_connect('localhost','root','','library');
if(mysqli_connect_errno()){
	echo "failed to connect";
	exit();
}
else
{	
	 

		$femail=$_POST['femail'];
		$sql="SELECT * FROM details Where email='$femail' ";

		// if($sql)echo 'hi';
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$fetch_username=$row['username'];
		$fetch_password=$row['password'];
		$fetch_email=$row['email'];

		if($femail==$fetch_email){
			$to=$femail;
			$subject="Password";
			$txt="Hey $fetch_username, Your Password is :$fetch_password.";
			$headers="From:Od_library" . "\r\n" .
			"CC:$femail";
			mail($to,$subject,$txt,$headers);
			echo '<p style="color:green;position:absolute;top:20px;left:38%;">Password Sent Successfully !!</p><div style="position:absolute;left:41%;top:80px;text-decoration:none;"><button><i><a href="login.php">Click me to Login</a></i></button></div>
 ';
	 
		}
		else
			echo '<p style="color:red;position:absolute;top:20px;left:41%;">Invalid email id !!</p><div style="position:absolute;left:41%;top:80px;text-decoration:none;"><button><i><a href="login.php">Click me for login</a></i></button></div>
 ';
 

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="css/foegot.css">
</head>
<body>
 	 
	<img class="wave" src="img/undraw_road_to_knowledge_m8s0.svg">
</body>
</html>