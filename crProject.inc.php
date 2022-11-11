<?php
if (isset($_POST['pcreate'])) {

require 'database.php';

$pName=$_POST['pname'];
$pDes=$_POST['pdes'];

if (empty($pName) || empty($pDes)) {
  header("Location: crProject.php?error=emptyfields");
  exit();
  }
else {
  $sql = "SELECT Id FROM project WHERE Name=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: crProject.php?sql_error");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $pName);
    mysqli_stmt_execute($stmt);
  	mysqli_stmt_store_result($stmt);
    $rowCount = mysqli_stmt_num_rows($stmt);
    if ($rowcount > 0) {
				header("Location: crProject.php?error=Project_already_exists");
				exit();
				}
        else{
  				$sql = "INSERT INTO project (Name, Description) VALUES ( ?, ?)";
  				$stmt = mysqli_stmt_init($conn);
  				if(!mysqli_stmt_prepare($stmt, $sql)){
  				header("Location:  crProject.php?error=sqlerrror");
  				exit();
  						}
        else{
              mysqli_stmt_bind_param($stmt, "ss", $pName, $pDes);
				      mysqli_stmt_execute($stmt);
				      header("Location:  crProject.php?success=Created");
				      exit();
					}
        }
      }
    }
  mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location:  crProject.php");
}
?>
