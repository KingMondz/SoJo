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
        echo "<tr> <th>Project ID</th><th>Project Name</th><th>Project Description</th></tr>";
        while($row = mysqli_fetch_array($result))
          {
          echo "<tr> <td>" . $row['Id'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Description'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
          }
          echo "</table>";

        mysqli_close($conn);
        ?>
        <br><br><br>
        <?php
         require 'database.php';
         $result = mysqli_query($conn,"SELECT * FROM sub_projects");

         echo "<table>";
         echo "<tr><th>Project Id</th><th>Sub_Project Id</th><th>Sub_Project_Name</th></tr>";
         while($row = mysqli_fetch_array($result))
           {
           echo "<tr><td>" . $row['Project_Id'] . "</td><td>" . $row['Sub_Project_Id'] . "</td><td>" . $row['Sub_Project_Name'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
           }
           echo "</table>";

         mysqli_close($conn);
         ?>
        <br><br><br>
        <?php
         require 'database.php';
         $result = mysqli_query($conn,"SELECT * FROM manager");

         echo "<table>";
         echo "<tr><th>Manager Id</th><th>Manager Name</th></tr>";
         while($row = mysqli_fetch_array($result))
           {
           echo "<tr><td>" . $row['Id'] . "</td><td>" . $row['Name'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
           }
           echo "</table>";

         mysqli_close($conn);
         ?>
         <br><br><br>
         <?php
          require 'database.php';
          $result = mysqli_query($conn,"SELECT * FROM team_members");

          echo "<table>";
          echo "<tr><th>Team_Member Id</th><th>Team-MembercName</th></tr>";
          while($row = mysqli_fetch_array($result))
            {
            echo "<tr><td>" . $row['Id'] . "</td><td>" . $row['Name'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
            }
            echo "</table>";

          mysqli_close($conn);
          ?>
         <br><br><br>
         <?php
          require 'database.php';
          $result = mysqli_query($conn,"SELECT * FROM client");

          echo "<table>";
          echo "<tr><th>Client Id</th><th>Client Name</th></tr>";
          while($row = mysqli_fetch_array($result))
            {
            echo "<tr><td>" . $row['Id'] . "</td><td>" . $row['Name'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
            }
            echo "</table>";

          mysqli_close($conn);
          ?>
         <br><br><br>
       <form class="input-group" action="projectDetails.inc.php" method="post">
        <input type="number" name="sbpid" class="input-field" placeholder="Sub_Project ID" required="">
				<br><br>
        <input type="number" name="pid" class="input-field" placeholder="Project ID" required="">
				<br><br>
				<input type="text" name="pname" class="input-field" placeholder="Project Name" required="">
				<br><br>
        <input type="number" name="mid" class="input-field" placeholder="Manager ID" required="">
				<br><br>
				<input type="text" name="mname" class="input-field" placeholder="Manager Name" required="">
				<br><br>
        <input type="number" name="tid" class="input-field" placeholder="Team-Member ID" required="">
				<br><br>
				<input type="text" name="tname" class="input-field" placeholder="Team-Member Name" required="">
				<br><br>
        <input type="number" name="cid" class="input-field" placeholder="Client ID" required="">
				<br><br>
				<input type="text" name="cname" class="input-field" placeholder="Client Name" required="">
				<br><br>
				<button type="submit" class="submit-btn" name="dataIns"><b>CREATE</b></button>
        <br><br><br>
				</form>
     </div>
   </body>
 </html>
