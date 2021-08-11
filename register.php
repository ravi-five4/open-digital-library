<!DOCTYPE html>
<html>
<head>
  <title>Registration Form || An Online Digital Library</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
<!--   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> -->
  <!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
  function validateForm() {
  var p = document.forms["form"]["username"].value;
  var q = document.forms["form"]["email"].value;
  var r = document.forms["form"]["mobile"].value;
  var s = document.forms["form"]["password"].value;


  if (p == "" || q=="" || r=="" || s=="" ) {

    alert("Hey, dude you have to fill all the details you can not skip any!");


    return false;
  }
}




  </script>
</head>


<body>
  <div style="background:black; height:60px; padding-top:10px; padding-left:10px;">
  <marquee><h2 style="color:white;">An Online<span style="color:red;"> Digital Library</span></h2></marquee>
  </div>
  <img class="wave" src="img/abc.svg">
  <div class="container">
    <div class="img">
      <!-- <img src="img/bg.svg"> -->
    </div>
    <div class="login-content">
      <form name="form" action="insert.php" onsubmit="return validateForm()" method="POST">
        <img src="img/avatar.svg">
        <h2 class="title">Welcome</h2>
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
                    <h5>Email</h5>
                    <input type="email" class="input" name="email">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i">
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Mobile No</h5>
                    <input type="text" class="input" name="mobile">
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

              <!-- <a href="#">Forgot Password?</a> -->
              <input type="submit" class="btn" value="Register">
              <font><i>already a member ?</i><a href="login.php">Login</a></font>
            </form>

        </div>

    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
