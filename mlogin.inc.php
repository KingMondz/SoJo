<?php
if (isset($_POST['mlsubmit'])) {

require 'database.php';

$username = $_POST['lusername'];
$password = $_POST['lpassword'];

if (empty($username) || empty($password)) {
  header("Location: MLR.php?error=emptyfields");
  exit();
}
else {
  $sql = "SELECT * FROM manager WHERE Username=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: MLR.php?sql_error");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $hpass = password_verify($password, $row['Password_']);
      
      if ($hpass == false) {
        header("Location: MLR.php?wrong_password");
        exit();
      }
      else if ($hpass == true) {
        session_start();
        $_SESSION['usersId'] = $row['Id'];
        $_SESSION['usersUserName'] = $row['Username'];
        header("Location: MP.php?Login_Success ");
        exit();
      }
      else {
        header("Location: MLR.php?wrong_password");
        exit();
      }
    }
    else {
      header("Location: MLR.php?no_user");
      exit();
    }
  }
}

}
else {
	header("Location:  MLR.php");
}


?>
