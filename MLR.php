<?php
require_once 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN & REGISTRATION</title>
	<link rel="stylesheet" href="nav.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<style type="text/css">
		*{
			font-family: sans-serif;
		}
		.hero{
			height: 150%;
			width: 100%;
			background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(img/aladin.jpg);
			background-position: center;
			background-size: cover;
			position: absolute;
		}
		.form-box{
			width: 380px;
			height: 450px;
			position: relative;
			margin: 6% auto;
			background: #fff;
			padding: 5px#;
			overflow: hidden;
			border-radius: 15px;
		}
		.button-box{
			width: 220px;
			margin: 35px auto;
			position: relative;
			box-shadow: 0 0 20px 9px #ff612141f;
			border-radius: 30px;
			transition: .5s;
		}
		.toggle-btn{
			padding: 10px 30px;
			cursor: pointer;
			background: transparent;
			border: 0;
			outline: none;
			position: relative;
		}
		#btn{
			top: 0;
			left: 0;
			position: absolute;
			width: 110px;
			height: 100%;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border-radius: 30px;
			transition: .5s;
		}
		.input-group{
			top:180px;
			position: absolute;
			width: 280px;
			transition: .5s;
		}
		.input-field{
			width: 100%;
			padding: 10px 0;
			margin: 5px 0;
			border-left: 0;
			border-top: 0;
			border-right: 0;
			border-bottom: 1px solid #999;
			outline: none;
			background: transparent;
		}
		.submit-btn{
			width: 85%;
			padding: 10px 30px;
			cursor: pointer;
			display: block;
			margin: auto;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border: none;
			border-radius: 30px;
		}
		#login{
			left: 50px;
		}
		#register{
			left: 450px;
		}
		select{
			font-size: 1rem;
			padding: 0.5em 0.5em;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border: 0;
			position: relative;
		}
	</style>
	<nav class="nav-header-main" >
		<ul>
			<!--<li><a href= "index.php" class="header-logo">
			<img src= "img/log.png" alt="logo">
		</a></li>-->
			<li><a href="index.php">Home</a><li>
			<li><a href="AboutUs.php">AboutUs</a></li>
			<li><a href="ContactUs.php">ContactUs</a></li>
		</ul>
		<div>
		 <?php
		 if (isset($_SESSION['usersId'])) {
			 echo '<form action="logout.inc.php" method="post">
							<button type="submit" name="logout-submit">logout</button>
						 </form>';
		 }
		 else {
			 echo '<p>Hard Work Pays</p>';
		 }
		?>
		<?php
		if (isset($_SESSION['usersId'])) {
			echo '<p class="login status">You are logged in</p>';
		}
		else {
			echo '<p class="login status">You are logged out</p>';
		}

		 ?>
		</div>
	</nav>


</head>
<body>

	<div class="hero" id="fullPage">
		<div class="form-box" id="formBox">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn"onclick="register()">Register</button>
			</div>

			<form id="login" class="input-group" action="mlogin.inc.php" method="post">
				<input type="text" name="lusername" class="input-field" placeholder="UserName" required="">
				<br><br>
				<input type="password" name="lpassword" class="input-field" placeholder="Password" required="">
				<br><br><br>
				<button type="submit" class="submit-btn" name="mlsubmit"><b>LogIn</b></button>

			</form>

			<form id="register" class="input-group" action="mregister.inc.php" method="post">
				<input type="text" name="name" class="input-field" placeholder="Full Name" required="">
				<br><br>
				<input type="email" name="email" class="input-field" placeholder="Email Address" required="">
				<br><br>
				<input type="phone" name="phone" class="input-field" placeholder="Phone-Number" required="">
				<br><br>
				<input type="text" name="rusername" class="input-field" placeholder="Prefered Username" required="">
				<br><br>
				<input type="password" name="rpassword" class="input-field" placeholder="Password" required="">
				<br><br>
				<input type="password" name="confirmPassword" class="input-field" placeholder="Re-Enter Password" required="">
				<br><br>

				<!--<input type="text" name="title" class="input-field" placeholder="manager/team_members" required="">
				<br><br>
			  -->
				<!--<select name="title">
					<option>MANAGER</option>
					<option>TEAM-MEMBER</option>
				</select>-->
				<br><br><br>
				<button type="submit" class="submit-btn" name="mrsubmit"><b>Register</b></button>

			</form>
		</div>
	</div>

	<script type="text/javascript">

		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		var w = document.getElementById("formBox");
		var v = document.getElementById("fullPage");

		function register(){
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
			w.style.height = "800px";
		}
		function login(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
			w.style.height = "450px";
		}


	</script>
</body>
</html>
