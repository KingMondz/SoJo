<?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">

     <!--<link rel="stylesheet" href="css/bootstrap.min.css" >-->
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<script src="https://kit.fontawesome.com/a076d05399.js"></script>

   	<link rel="stylesheet" href="nav.css">
   	<link rel="stylesheet" type="text/css" href="login.css">
     <title></title>
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
     <div class="form-box">
       <form class="input-group" action="crProject.inc.php" method="post">
				<input type="text" name="pname" class="input-field" placeholder="Project Name" required="">
				<br><br>
				<input type="text" name="pdes" class="input-field" placeholder="project Description" required="">
				<br><br>
				<button type="submit" class="submit-btn" name="pcreate"><b>CREATE</b></button>
        <br><br><br>
				</form>
     </div>
   </body>
 </html>
