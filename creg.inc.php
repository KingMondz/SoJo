<?php
if (isset($_POST['mcsubmit'])) {

require 'database.php';

$clientName=$_POST['cname'];
$clientEmail=$_POST['cemail'];
$clientPhone=$_POST['cphone'];

if ( empty($clientName) || empty($clientEmail) || empty($clientPhone)) {
  header("Location: creg.php?error=emptyfields");
  exit();
  }
else {
  $sql = "SELECT Id FROM client WHERE E_mail=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: creg.php?sql_error");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $clientEmail);
    mysqli_stmt_execute($stmt);
  	mysqli_stmt_store_result($stmt);
    $rowCount = mysqli_stmt_num_rows($stmt);
    if ($rowcount > 0) {
				header("Location: creg.php?error=Client_already_exists");
				exit();
				}
        else{
  				$sql = "INSERT INTO client (Name, E_mail, Phone_Number) VALUES ( ?, ?, ?)";
  				$stmt = mysqli_stmt_init($conn);
  				if(!mysqli_stmt_prepare($stmt, $sql)){
  				header("Location:  creg.php?error=sqlerrror");
  				exit();
  						}
        else{
              mysqli_stmt_bind_param($stmt, "ssi", $clientName, $clientEmail, $clientPhone);
				      mysqli_stmt_execute($stmt);
				      header("Location:  creg.php?success=registered");
				      exit();
					}
        }
      }
    }
  mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location:  creg.php");
}
?>
