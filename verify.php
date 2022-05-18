<?php 
include 'includes/conn.php';

if(isset($_GET['vkey'])){
 $vkey = $_GET['vkey'];

		$sql = "SELECT verified, verificationkey FROM voters WHERE verified = 0 AND verificationkey='$vkey' LIMIT 1";
		$query = $conn->query($sql);
  if($query->num_rows == 1){
    $update = $conn->query("UPDATE voters SET verified = 1 WHERE verificationkey = '$vkey' LIMIT 1 ");
  }else{
   echo "This account is invalid or already verified";
  }

}else{
 die("Something went wrong");
}

?>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 hell
</body>
</html>