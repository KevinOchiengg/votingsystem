<?php
	include 'includes/conn.php';

	if(isset($_POST['register'])){
		$surname = $_POST['surname'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$id_number = $_POST['idnumber'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$county = $_POST['county'];
		$constituency = $_POST['constituency'];
		$ward = $_POST['ward'];
		$pollingstation = $_POST['pollingstation'];
		$filename = $_FILES['photo']['name'];
		$birth = $_POST['birth'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
			//Generate Vkey
	$vkey = md5(time().$firstname);

		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}elseif(strlen($surname && $firstname && $lastname) < 5){
			echo "<p>Your name must be at least 5 characters</p>";
		}

		$sql = "INSERT INTO voters (surname, firstname, lastname, idnumber, gender,email, county, constituency, ward, pollingstation, photo, birth, verificationkey, password) VALUES ('$surname', '$firstname', '$lastname', '$id_number', '$gender','$email','$county','$constituency','$ward','$pollingstation','$filename','$birth','$vkey','$password')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	if($sql){
		$to = $email;
		$subject = "Email Verification";
		$message = "<p>Please click<a href='http://localhost/votesystem/verify.php?vkey=$vkey'>here</a> to verify your Email</p>";
		$headers = "From: kevinochieng932@gmail.com \r\n";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
		mail($to,$subject,$message,$headers);
		header('location:thanks.php');
	}

	extract($_REQUEST);
    $file=fopen("registration_backup.php","a");

    fwrite($file,"First name :");
    fwrite($file, $firstname ."\n");
    fwrite($file,"Lastname :");
    fwrite($file, $lastname ."\n");
    fwrite($file,"ID :");
    fwrite($file, $id_number ."\n");
    fclose($file);
    echo "<br>";
?>