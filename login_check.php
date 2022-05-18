<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$idnumber = $_POST['idnumber'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE idnumber = '$voter'";
		$query = $conn->query($sql);
			// $verified = $row['verified'];
			// if($verified == 1){

			// }else{
			// 		$_SESSION['error'] = "This account has not been verified.";
			// }
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find voter with the ID';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['voter'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: home.php');

?>