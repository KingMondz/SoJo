<?php

if (isset($_POST['dataIns'])) {

require 'database.php';

$sbpid=$_POST['sbpid'];
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$mid=$_POST['mid'];
$mname=$_POST['mname'];
$tid=$_POST['tid'];
$tname=$_POST['tname'];
$cid=$_POST['cid'];
$cname=$_POST['cname'];

if (empty($sbpid) || empty($pid) || empty($pname) || empty($mid) || empty($mname) || empty($tid) || empty($tname) || empty($cid) || empty($cname)) {
  header("Location: projectDetails.php?error=emptyfields");
  exit();
  }
else {
  $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_execute($stmt);

  				$sql = "INSERT INTO project_data (Project_ID, Sub_Project_ID, Project_Name, Manager_Id, Manager_Name, Team_Member_Name, Team_Member_Id, client_Name, client_Id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  				$stmt = mysqli_stmt_init($conn);
  				if(!mysqli_stmt_prepare($stmt, $sql)){
  				header("Location:  projectDetails.php?error=sqlerrror");
  				exit();
  						}
        else{
              mysqli_stmt_bind_param($stmt, "iisissisi", $pid, $sbpid, $pname, $mid, $mname, $tname, $tid, $cname, $cid);
				      mysqli_stmt_execute($stmt);
				      header("Location:  projectDetails.php?success=Created");
				      exit();
					}
        }


  mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location:  projectDetails.php");
}

 ?>
