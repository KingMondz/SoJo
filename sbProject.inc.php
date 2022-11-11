<?php
if (isset($_POST['sbpcreate'])) {

require 'database.php';

$ppId=$_POST['ppid'];
$sbpName=$_POST['sbpname'];
$sbpDes=$_POST['sbpdes'];

if (empty($ppId) ||empty($sbpName) || empty($sbpDes)) {
  header("Location: sbProject.php?error=emptyfields");
  exit();
  }
else {
  $sql = "SELECT Sub_Project_Id FROM sub_projects WHERE Sub_Project_Name=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: sbProject.php?sql_error");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $sbpName);
    mysqli_stmt_execute($stmt);
  	mysqli_stmt_store_result($stmt);
    $rowCount = mysqli_stmt_num_rows($stmt);
    if ($rowcount > 0) {
				header("Location: sbProject.php?error=Sub_Project_already_exists");
				exit();
				}
        else{
  				$sql = "INSERT INTO sub_projects (Project_Id, Sub_Project_Name, 	Sub_Project_Description) VALUES (?, ?, ?)";
  				$stmt = mysqli_stmt_init($conn);
  				if(!mysqli_stmt_prepare($stmt, $sql)){
  				header("Location:  sbProject.php?error=sqlerrror");
  				exit();
  						}
        else{
              mysqli_stmt_bind_param($stmt, "iss", $ppId, $sbpName, $sbpDes);
				      mysqli_stmt_execute($stmt);
				      header("Location:  sbProject.php?success=Created");
				      exit();
					}
        }
      }
    }
  mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location:  sbProject.php");
}
?>
