<?php

if (isset($_POST['rtsubmit'])){

	require 'database.php';

	$username=$_POST['rusername'];
	$password=$_POST['rpassword'];
	$confirmPassword=$_POST['confirmPassword'];
	$email=$_POST['email'];
	$phoneNumber=$_POST['phone'];
	$name=$_POST['name'];

	#if (empty($username) || empty($password) || empty($confirmPassword) || empty($workId) || empty($email) || empty($phoneNumber) || empty($name) || empty($title)) {
	#	header("Location: TLR.php?error=emptyfield");
	#	exit();
	#}
	//else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
	//	header("Location: TLR.php?error=invalidusername&username=".$username);
	//	exit();
	//}
	//else if (!preg_match("/^[a-zA-Z]*/", $name)) {
	//	header("Location: TLR.php?error=invalid&name=".$name);
	//	exit();
	//}
	//else if (!preg_match("/^[0-9]*/", $phoneNumber)) {
	//	header("Location: TLR.php?error=invalid&phoneNumber=".$phoneNumber);
	//	exit();
	//}
	//else if (!preg_match("/^[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+*/", $email)) {
	//	header("Location: TLR.php?error=invalid&email=".$email);
	//	exit();
	//}
	if ($password !== $confirmPassword) {
		header("Location: TLR.php?error=passwordsdonotmatch");
		exit();
	}
	else {
		$sql="SELECT Username FROM team_members WHERE Username = ?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: TLR.php?error=sqlerrror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$rowCount = mysqli_stmt_num_rows($stmt);

			if ($rowcount > 0) {
				header("Location: TLR.php?error=username_taken");
				exit();
			}
			else  {
				$sql = "INSERT INTO team_members (Name, E_mail, Phone_Number, Username, Password_) VALUES (?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location:  TLR.php?error=sqlerrror");
				exit();
				}


				else{
					$hashedPass = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "ssiss", $name, $email, $phoneNumber, $username, $hashedPass);
					mysqli_stmt_execute($stmt);
					header("Location:  TLR.php?success=registered");
					exit();

				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location:  TLR.php");
}

?>
