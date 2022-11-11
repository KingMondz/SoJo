<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    <?php
    require 'database.php';
    $result = mysqli_query($conn,"SELECT * FROM project_data WHERE Team_Member_Id= " . $_SESSION['usersId']);

    echo "<table>";
    echo "<tr><th>Project Id</th><th>Sub_Project_Id</th><th>Sub_Project_Status</th><th>Manager ID</th><th>Manager Name</th><th>Team_Member_Name</th><th>Team_Member_Id</th><th>Overall Status</th><th>Client_Name</th><th>lCient_Id</th></tr>";
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>" . $row['Project_Id'] . "</td><td>" . $row['Sub_Project_Id'] . "</td> <td>" . $row['Sub_Project_Status'] . "</td><td>" . $row['Manager_ID'] . "</td> <td>" . $row['Manager_Name'] . "</td><td>" . $row['Team_Member_Name'] . "</td><td>" . $row['Team_Member_Id'] . "</td><td>" . $row['Overall_Project_Status'] . "</td><td>" . $row['client_Name'] . "</td><td>" . $row['client_Id'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
      }
      echo "</table>";

    mysqli_close($conn);

     ?>
  </body>
</html>
