<nav class="nav-header-main" >
  <a href= "index.php" class="header-logo">
    <img src= "img/logo1.png" alt="logo">
  </a>
  <ul>
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
  </div>
</nav>

<?php
if (isset($_SESSION['usersId'])) {
  echo '<p class="login status">You are logged in</p>';
}
else {
  echo '<p class="login status">You are logged out</p>';
}
 ?>
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
