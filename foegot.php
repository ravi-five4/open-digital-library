
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="css/foegot.css">
	<script type="text/javascript">
	function validateForm() {
  var x = document.forms["my"]["femail"].value;
  if (x == "") {

    alert("Hey, dude you have to type your registered email for getting password !");


    return false;
  }
}




	</script>
</head>
<body>
 	<form name="my" style="position: absolute;top:30%;left:35%; height: 200px;width:25%; padding: 50px; " action="password.php" onsubmit="return validateForm()" method="POST">
 		<fieldset>
 			<legend><i>Please enter your mail</i></legend>
 		 <input type="email" placeholder="enter your registered mail...." name="femail">
 		 <input type="submit" name="fsubmit" value="submit">
 		</fieldset>

 	</form>
	<img class="wave" src="img/undraw_road_to_knowledge_m8s0.svg">
</body>
</html>
