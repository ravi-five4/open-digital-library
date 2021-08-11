<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css">

body{
   padding: 0;
	margin: 0;
	overflow: hidden;
	font-family:sans-serif;
	background: url("img/Library-Solutions.JPG");
}

.wave{
	position: center;
	bottom: 0;

		height: 100%;
	z-index: -1;
	background-size: cover;
	overflow: hidden;
}
h2
{
	font-family: sans-serif;
	font-size: 2rem;
	/*text-shadow: 2px 1px green;*/
	position: absolute;
	top: -20px;
	left: 5%;
	color: white;

	text-decoration: underline;
}
.nav
{
	width: 100%;
	height: 49px;
	background-color: #262626;

}
.nav  a{
	float: left;
	font-family: sans-serif;
	position: relative;
	left: 70%;
	text-decoration: none;
	color: #fff;
	padding: 14px 26px;
	font-size: 17px;
}
.nav a:hover{
	color: blue;
	background-color: white;
	transition: 0.6s all;
}
.pad{
	width: 100%;
	height: 70px;
	position: absolute;
	top: 89.5%;
	color:grey;
	background-color: #262626;

}
.search{
	position: absolute;
	top:49%;
	left:38%;


}
.read
{
	position: absolute;
	top: 50%;
	color:white;
}
.inp{
	border: 3px solid #32e17c;
	height: 40px;
	width: 300px;
	border-radius: 50px;
	padding: 0px 10px;

}
.inpt{
	border: 3px solid #32e17c;
	height: 43px;
	width: 50px;
	border-radius: 50px;
	padding: 0px 10px;

}
.read{
	position: absolute;
	width: 360px;
	/*background-color:black;*/
	top:20%;
	left:35%;
	font-size: 1.3rem;
}

</style>
	 	<title>An Online Digital Library</title>
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2>An Online<span style="color:red;"> Digital Library</span></h2>
	<div class="read">
		<pre class="txt"><i>"A reader lives a thousand lives before he dies...
    The man who never reads lives only one."
	    <span style="color:pink;">  -George R.R Martin<span></i></pre>
	</div>
	<div class="nav">

		<a href='#'>Home</a>
		<a href='#'>Our Misson</a>
		<a href='#'>Contact Us</a>

	</div>
	<div class="search">
		<form action="display.php" method="POST">
		<input class="inp" type="text" placeholder="Search Anybook You Want..." name="search">
		<input class="inpt" type="submit" value="Go" name="go">
		<form>
	</div>


<div class="pad">
<pre>
	Phone :+91 9110132757
	Email :officialravigandhi@gmail.com
	&copyCopyright 2021. All rights reserved to Ravi Gandhi , Shimla (H.P) , INDIA.

</pre>

</div>
</body>
</html>
