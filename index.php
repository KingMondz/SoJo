<?php
 session_start();
 ?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
      <!--this is the head-->
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>HOMEPAGE</title>
			<link rel="stylesheet" href="css/bootstrap.min.css" >
    	<link rel="stylesheet" href="nav.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>
			<style>
				*{
					padding: 0;
				}
				.jumbotron{
		  	background-image: url("img/home2.jfif");
				background-size: cover;
				background-position: center;
				height: 100vh;
				width: 100%;
				display:flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				text-align: center;
				padding: 0 20px;
				padding-top: 0;
			    margin-bottom:0;
		        border-radius:0;
		    	}
		    	p{
		    	padding: :;
		    	}
		    	#cont1{
		    	background-size: cover;
					background-position: center;
					padding: 0 20px;
					display:flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					text-align: center;
					height: 60vh;
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

			<!--<nav id="navu">
				<div class="container" id="navi">
					<input type="checkbox" id="check">
					<label for="check" class="checkbtn">
					<i class="fas fa-bars"></i>
					</label>
					<label class="logo">Monds Tours</label>
					<ul>
						<li><a href="index.php">Home</a><li>
						<li><a href="LogIn.php">LogIn</a></li>
						<li><a href="Register.php">Register</a></li>
						<li><a href="AboutUs.php">AboutUs</a></li>
						<li><a href="ContactUs.php">ContactUs</a></li>
					</ul>
				</div>
			</nav>-->
			<div class="jumbotron text-center">
		      <div class="container">

						<p><h1>WELCOME</h1></p>
						<br><br>
		        <h1>SOJO PROJECT MANAGEMENT SYSTEM</h1>
						<br><br>
						<p><h4>PLEASE SELECT YOUR DESIGNATION<h4></p>
		        <a href="mlr.php" class="btn btn-primary">MANAGER</a>
		        <a href="tlr.php" class="btn btn-primary">TEAM-MEMBER</a>
		     </div>
					<?php
					if (isset($_SESSION['usersId'])) {
					  echo '<p class="login status">You are logged in</p>';
					}
					else {
					  echo '<p class="login status">You are logged out</p>';
					}

					 ?>
      </div>
		</body>
		</html>
