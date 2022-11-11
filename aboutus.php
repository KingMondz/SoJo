<?php
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>About Us</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
	}
	.section{
		width: 100%;
		min-height: 100vh;
		background-color: #ddd;
	}
	.container{
		width: 80%;
		display: block;
		margin: auto;
		padding-top:100% ;
	}
	.content-section{
		float: left;
		width: 55%;
	}
	.image-section{
		float: right;
		width: 40%;
	}
	.image-section img{
		width: 100%;
		height: auto;
	}
	.content-section .title{
		text-transform: uppercase;
		font-family: 28px;
		font-size: 19px;
		text-align: center;
	}
	.content-section .content h3{
         margin-top: 20px;
         color: #5d5d5d;
         font-size: 21px;
	}
	.content-section .content p{
		margin-top: 10px;
		font-family: sans-serif;
		font-size: 18px;
		line-height: 1.5;
	}
	.content-section .content .button{
		margin-top:30px;
		text-align: center;
	}
	.content-section .content .button a{
		background-color: #3d3d3d;
		padding: 12px 40px;
		text-decoration: none;
		color: #fff;
		font-size: 25px;
		letter-spacing: 1,5px;
	}
	.content-section .content .button a:hover{
		background-color: #a52a2a;
		color: #fff;
	}
	.content-section .social{
		margin: 40px 40px;
		text-align: center;
	}
	.content-section .social i{
        color: #a52a2a;
        font-size: 30px;
        padding: 0px 10px;
	}
	.content-section .social i:hover{
		color: #3d3d3d;
	}
    @media screen and (max-width: 768px){
    	.container{
		width: 80%;
		display: block;
		margin: auto;
		padding-top:50px ;
	}
	.content-section{
		float: none;
		width: 100%;
		display: block;
		margin: auto;
	}
	.image-section{
		float: none;
		width: 100%;
		display: block;
		margin: auto;
	}
	.
    }

</style>
</head>
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
<body>


			<div class="content-section">
				<div class="title">
					<h1>ABOUT US</h1>
				</div>
				<div class="content">
					<h3>The Sojo Project Management System </h3>
					<p>The Sojo Project Management is a web application program that deals with assisting in the management and supervision on the progress made during a project. This will include milestones and those individuals involved with each task included into the system as well as the time allocations for each task. This will enable the entire project team to keep track of all the milestones achieved and not achieved yet by just a glance on the application without much more motion and movement. The system was developed by Munala Sophie and Muinde Joshua in 2021.
					</p>

				</div>

			</div>
			<div class="image-section">
				<img src="img/home3.jpg">
			</div>




</body>
</html>
