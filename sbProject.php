<?php
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="form-box">
       <?php
        require 'database.php';
        $result = mysqli_query($conn,"SELECT * FROM project");

        echo "<table>";
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td>" . $row['Id'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Description'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
          }
          echo "</table>";

        mysqli_close($conn);
        ?>
       <form class="input-group" action="sbProject.inc.php" method="post">
        <input type="number" name="ppid" class="input-field" placeholder="Parent_Project ID" required="">
  			<br><br>
				<input type="text" name="sbpname" class="input-field" placeholder="Sub_Project Name" required="">
				<br><br>
        <input type="text" name="sbpdes" class="input-field" placeholder="Sub_Project Description" required="">
				<br><br>
				<button type="submit" class="submit-btn" name="sbpcreate"><b>CREATE</b></button>
        <br><br><br>
				</form>
     </div>
   </body>
 </html>
