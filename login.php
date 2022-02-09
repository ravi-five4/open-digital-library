<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Form || An Online Digital Library By Ravi Gandhi</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> -->
  <!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
    function validateForm() {
      var x = document.forms["myform"]["username"].value;
      var y = document.forms["myform"]["password"].value;
      if (x == "" || y == "") {

        if (x == "" && y != "")
          alert("Hey, dude you have to fill the username for login");
        else if (y == "" && x != "")
          alert("Hey, dude you have to fill the password for login");
        else
          alert("Hey, dude you have to fill the form for login");
        return false;
      }
      // else
      // {
      //   if(y.length<8)
      //     alert("Password length should be greater or equal to 8");
      //   if (y.search(/[a-z]/i) < 0) {
      //     alert("Your password must contain at least one letter.");
      //   if (y.search(/[0-9]/) < 0) {
      //     alert("Your password must contain at least one digit.");
      //   return false;
      // }
    }
  </script>
</head>

<body>
  <div style="background:black; height:60px; padding-top:10px; padding-left:10px;">
    <marquee>
      <h2 style="color:white;">An Online<span style="color:red;"> Digital Library</span></h2>
    </marquee>
  </div>
  <img class="wave" src="img/ab.svg">
  <div class="container">
    <div class="img">
      <!-- <img src="img/bg.svg"> -->
    </div>
    <div class="login-content">
      <form name="myform" action="validate.php" onsubmit="return validateForm()" method="POST">
        <img src="img/avatar.svg">
        <h4 class="title"><i> Welcome</i></h4>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" class="input" name="username">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" class="input" name="password">
          </div>
        </div>

        <a href="foegot.php">Forgot Password?</a>
        <input type="submit" class="btn" value="Login" name="login">
        <font><i>New member ?</i><a href="register.php">Register</a></font>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>



</body>

</html>